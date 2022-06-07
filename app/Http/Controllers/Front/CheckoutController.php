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
        
        $view = View::make('front.pages.checkout.index');

        return $view;
    }
    
}
