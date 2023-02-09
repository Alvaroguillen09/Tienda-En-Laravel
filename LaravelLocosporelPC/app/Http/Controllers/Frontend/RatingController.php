<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function add(Request $request)
    {
        $stars_rated = $request->input('product_rating');
        $product_id = $request->input('product_id');

        $product_check = Product::where('id', $product_id)->where('status', '0')->first();
        if ($product_check) 
        {
            $verified_purcharse = Order::where('orders.user_id', Auth::id())
                ->join('items', 'orders.id', 'items.order_id')
                ->where('items.product_id', $product_id)->get();

            if($verified_purcharse) 
            {
                $existing_rating = Rating::where('user_id', Auth::id())->where('prod_id', $product_id)->exists();
                if($existing_rating)
                {
                    $existing_rating->stars_rated = $stars_rated;	
                    $existing_rating->update();
                }
                else
                {
                Rating::create([
                    'user_id' => Auth::id(),
                    'prod_id' => $product_id,
                    'stars_rated' => $stars_rated,
                ]);
                }
                return redirect()->back()->with('status', "Gracias por su calificación");
            } 
            else 
            {
                return redirect()->back()->with('status', "No se puede calificar un producto que no ha comprado");
            }
        }
        else 
            {
                return redirect()->back()->with('status', "No se puede calificar un producto que no existe");
            }
        
    }
}
