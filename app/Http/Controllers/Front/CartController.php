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
            ->where('active',1)
            ->where('fingerprint',1)
            ->groupByRaw('price_id')->get();

        // $total = $this->cart->price()->select(DB::raw('sum(base_price) as total'))->where('active',1)->first();

        // SELECT sum(base_price), carts.active FROM `carts` INNER JOIN prices ON carts.price_id = prices.id WHERE carts.active = 1

        //SELECT price_id, base_price, tax_id, multiplicator FROM `carts` INNER JOIN prices ON carts.price_id = prices.id INNER JOIN taxes ON prices.tax_id = taxes.id WHERE carts.active = 1

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            // ->with('total', $total)
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

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
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

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $fingerprint)
            ->renderSections();


        return response()->json([
            'content' => $sections['content'],
        ]);
    }
}
