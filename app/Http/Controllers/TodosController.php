<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::where('user_id', Auth::id())->get();
        return view('todos.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'description' => 'required'
        ]);
        $data = $request->all();

        $todo = new Todo();
        $todo->user_id = Auth::id();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
    
        $todo->save();
    
        return redirect('/todos')->with('success', 'Todo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {   
        if($todo->user_id == Auth::id()) {
            return view('todos.show')->with('todo', $todo);
        } else {
            return redirect('/todos')->with('error', 'không hợp lệ');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        if($todo->user_id == Auth::id()) {
            return view('todos.edit')->with('todo', $todo);
        } else {
            return redirect('/todos')->with('error', 'không hợp lệ');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'description' => 'required'
        ]);
        $data = $request->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
    
        $todo->save();
    
        return redirect('/todos')->with('success', 'Todo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {   
        $todo->delete();;
        return redirect('/todos')->with('success', 'Todo deleted successfully.');
    }

    public function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();

        return redirect('/todos')->with('success', 'Todo completed successfully.');
    }


    public function again(Todo $todo)
    {
        $todo->completed = false;
        $todo->save();

        return redirect('/todos')->with('success', 'Todo start again successfully.');
    }
}
