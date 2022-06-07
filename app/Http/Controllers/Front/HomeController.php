<?php

namespace App\Http\Controllers\Front;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Home;




class HomeController extends Controller
{
      protected $home;   

  
    
    public function index()
    {
        
        $view = View::make('front.pages.home.index');

        return $view;
    }
   
   
}
