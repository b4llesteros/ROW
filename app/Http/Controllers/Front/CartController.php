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
       
        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
            ->where('active',1)
            ->where('fingerprint',1)
            ->groupByRaw('price_id')
            ->get();           
               
         //Sacar el precio base total
        // SELECT sum(base_price) as precio_base FROM `carts` INNER JOIN prices ON prices.id = price_id WHERE
        // carts.active = 1 AND carts.fingerprint = 1
        
        // $total_base = DB::table('prices')
        //     ->join('carts','prices.id','=','carts.price_id')
        //     ->where('carts.fingerprint',1)
        //     ->where('carts.active',1)
        //     ->sum('prices.base_price');


        //Sacar el multiplicador del IVA
        //SELECT multiplicator FROM `carts` INNER JOIN prices ON prices.id = price_id INNER JOIN taxes ON taxes.id = tax_id WHERE
        //carts.active = 1 AND carts.fingerprint = 1 GROUP BY multiplicator

        // $total_tax = DB::table('carts')
        //     ->select(DB::raw('multiplicator')
        //     ->join('prices','carts.price_id','=','prices.id')
        //     ->where('carts.fingerprint',1)
        //     ->where('carts.active',1);     
        
        $total_base = 0 ;  
        $total_tax = 0 ; 
       
        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->with('total_base', $total_base)
            ->with('total_tax', $total_tax)             
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    } 


    public function pluscart ($fingerprint, $price_id)
    {
        

        $cart = $this->cart->create([
            'id' => request('id'),
            'price_id' => request('price_id'),
            'fingerprint' => 1,
            'active' => 1,
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
            ->where('active',1)
            ->where('fingerprint',1)
            ->groupByRaw('price_id')->get();

        $total_base = 0 ;
        $total_tax = 0 ; 

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->with('total_base', $total_base)
            ->with('total_tax', $total_tax) 
            ->renderSections();


        return response()->json([
            'content' => $sections['content'],
        ]);
    }



    public function minuscart ($fingerprint, $price_id)
    {

        $product = $this->cart
            ->where('active',1)
            ->where('fingerprint', $fingerprint)
            ->where('price_id', $price_id)
            ->first();

        $product->active = 0;
        $product->save();        

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
            ->where('active',1)
            ->where('fingerprint',1)
            ->groupByRaw('price_id')->get();



        $total_base = 0 ;
        $total_tax = 0 ;

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $fingerprint)
            ->with('total_base', $total_base)
            ->with('total_tax', $total_tax) 
            ->renderSections();


        return response()->json([
            'content' => $sections['content'],
        ]);
    }
}
