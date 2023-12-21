<?php

namespace App\Http\Controllers;

use App\Constants\RangePrice;
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
        $brandId = $request->brand_id;
        $rangeId = $request->range_id;
        $products = Product::where('deleted_at', null);
        if (!empty($cateId)) {
            $products = $products->where('category_id', $cateId);
        }
        if (!empty($brandId)) {
            $products = $products->where('brand_id', $brandId);
        }
        if (!empty($rangeId)) { 
            if ($rangeId == RangePrice::MIN) {
                $products = $products->whereBetween('price', [0, 15]);
            }
            if ($rangeId == RangePrice::MIN_1) {
                $products = $products->whereBetween('price', [15, 50]);
            }
            if ($rangeId == RangePrice::MIN_2) {
                $products = $products->whereBetween('price', [50, 200]);
            }
            if ($rangeId == RangePrice::MAX) {
                $products = $products->where('price', '>', 200);
            }
        }
        $products = $products->with(['brands'])->paginate(9);
        $categories = Category::all();
        $brands = Brand::all();
        // dd($products);
        return view('dashboard', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }
}
