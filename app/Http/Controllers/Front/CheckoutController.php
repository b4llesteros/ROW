<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Sale; 
use App\Models\Client;
use Debugbar;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    protected $sale;
    protected $cart;
    protected $client;

    public function __construct(Cart $cart, Sale $sale, Client $client)
    {
        $this->sale = $sale;
        $this->cart = $cart;
        $this->client = $client;
    }  


    public function index(Request $request)
    {
        $ticket_number = $this->sale-> ticket_number;
        $date_emission = $this->sale-> date_emission;
        $time_emission = $this->sale-> time_emission;  
              
      
        $view = View::make('front.pages.checkout.index');
        
        $totals = $this->cart
        ->where('carts.fingerprint', $request->cookie('fp'))
        ->where('carts.active', 1)
        ->where('carts.sale_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();
       
        $view = View::make('front.pages.checkout.index')
        ->with('fingerprint', $request->cookie('fp'))
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->with('ticket_number', $ticket_number);
        
        if(request()->ajax()) {

            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],
            ]);
        }
      
    }

    public function store(Request $request)       
    {                
        
        $ticket_number = $this->sale->latest()->first()->ticket_number;

       
        if (str_contains($ticket_number, date('Ymd'))) {
            $ticket_number += 1;            
        } else {
            $ticket_number = date('Ymd') . '0000' ;
        }     

      
        $client = $this->client->create([
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
            'additional_information' => request('additional_information'),
            'city' => request('city'),
            'state' => request('state'),
            'zip_code' => request('zip_code'),
            
        ]);

        $sale = $this->sale->create([
            'id' => request('id'),
            'ticket_number' => request('ticket_number'),        
            'client_id' => $client->id,
            'total_base_price' => request('base_total'),
            'total_tax_price' => request('tax_total'),
            'total_price' => request('total'),            
            'payment_method_id' => request('payment_method_id'),
            'ticket_number' => $ticket_number,
            'date_emission' =>  date('Y-m-d'),
            'time_emission' => date('H:i:s'),

            
        ]);

        $cart = $this->cart
            ->where('fingerprint', request('fingerprint'))
            ->update([
                'sale_id' => $sale->id,
                'client_id' => $client->id,
        ]);

        $sections = View::make('front.pages.salesdone.index')->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

}
   
    

