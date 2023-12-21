<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $cateId = $request->category_id;
        if (!empty($cateId)) {
            $products = Product::where('deleted_at', null)
            ->where('category_id', $cateId)
            ->with(['brands'])
            ->paginate(9);
        } else {
            $products = Product::where('deleted_at', null)
            ->with(['brands'])
            ->paginate(9);
        }
        // dd($products);
        $categories = Category::all();
        $brands = Brand::all();
        return view('dashboard', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }
}
