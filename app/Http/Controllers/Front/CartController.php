<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;

class CartController extends Controller
{
    protected $cart;   
  
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
  
    public function index()
    {
        
        $view = View::make('front.pages.cart.index');

        if(request()->ajax()) {     

            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],
            ]);

        }

        return $view;
    }    


    public function store(Cart $cart)
    {            
        $amount = $_GET['amount'];

        for ( $i = 0; $i < $amount ; $i++ ) {

            $cart = $this->cart->create([
                'id' => request('id'),
                'price_id' => request('price_id'),
                'client_id' => null,
                'fingerprint_id' => null,
                'sale_id' => null,                
            ]);

        }

        $sections = View::make('front.pages.cart.index')->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    
   
}
