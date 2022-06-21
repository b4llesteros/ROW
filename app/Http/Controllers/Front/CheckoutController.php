<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Http\Requests\Front\SaleRequest;

class CheckoutController extends Controller
{
    protected $checkout;



    public function __construct(Sale $sale)
    {
        $this->sale = $sale;

    }


    public function index()
    {

        $view = View::make('front.pages.checkout.index');

        return $view;
    }


    public function store(SaleRequest $request)
    {
        $sale = $this->sale->updateOrCreate([
            'id' => request('id'),
            'client_id' => request('client_id'),
            'payment_method_id' => request('payment_method_id'),
            'total_base_price' => request('total_base_price'),
            'total_tax_price' => request('total_tax_price'),
            'total_price' => request('total_price'),

    ]);

        $sections = View::make('front.pages.checkout.index')->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

}
