<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::paginate(8);
        if ($request->ajax()) {
            $view = view('data', compact('products'))->render();
            return response()->json(['html' => $view]);
        }
        return view('product', compact('products'));
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName() . " - LocosporelPC";
        $viewData["subtitle"] = $product->getName() . " - Información del producto";
        $viewData["product"] = $product;
        $rating = Rating::all();
        $viewData["rating"] = $rating;
        return view('product.show')->with("viewData", $viewData);
    }
}