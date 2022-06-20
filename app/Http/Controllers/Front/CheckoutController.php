<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    protected $checkout;   

    public function index()
    {
        
        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->where('active',1)
        ->where('fingerprint',1)    
        ->groupByRaw('price_id')->get();      

              
    $sections = View::make('front.pages.cart.index')
        ->with('carts', $carts)
        ->with('fingerprint', $cart->fingerprint)
        ->renderSections();

    return response()->json([
        'content' => $sections['content'],
    ]);
    }
    

    
}
