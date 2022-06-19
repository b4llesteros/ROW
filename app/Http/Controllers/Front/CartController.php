<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Debugbar;
use Request;

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


    public function store(Request $request)
    {            
        $amount = request('amount');      

        for ($i = 0; $i < $amount; $i++ ) {

            $cart = $this->cart->create([
                'id' => request('id'),
                'price_id' => request('price_id'),                
                'client_id' => null,
                'fingerprint' => 1,
                'sale_id' => null,                
            ]);

        }
       
        //Se puede hacer una consulta MySql puro
        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
            ->where('fingerprint',1)    
            ->groupByRaw('price_id')->get();        

        Debugbar::info();
            

            
       
        // foreach($carts as $cart) {
        //     Debugbar::info($cart->price_id);
        //     Debugbar::info($cart->price->base_price);
        //     Debugbar::info($cart->price->product->title);
        // }

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)                    
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    
   
}
