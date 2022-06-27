<?php

namespace App\Http\Controllers\Front;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Support\Facades\DB;
use Request;
use App\Http\Requests\Front\ProductRequest;
use Debugbar;


class ProductController extends Controller
{
      protected $product;

      public function __construct(Product $product)
      {
            $this->product = $product;
            
      }    

    public function index()
    {
        $products = $this->product         
        ->join('prices', 'prices.product_id', '=', 'products.id')
        ->where('products.active', 1)
        ->where('products.visible', 1)
        ->where('prices.active', 1)
        ->where('prices.valid', 1)       
        ->get();   
              
        Debugbar::info($products);
    
        $view = View::make('front.pages.products.index')        
        ->with('products', $products);
        
        if(request()->ajax()) {     

            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],
            ]);

        }
        
        return $view;
    } 

    
    public function show(Product $product)
    {
        $view = View::make('front.pages.product.index')
        ->with('product', $product);
   

        if(request()->ajax()) {     

            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],
            ]);

        }
        
        return $view;
    } 
    
    public function sort($sort) 
    {  

        $products = $this->product 
        ->join('prices', 'prices.product_id', '=', 'products.id')
        ->where('products.active', 1)
        ->where('products.visible', 1)
        ->where('prices.active', 1)
        ->where('prices.valid', 1)
        ->orderBy('prices.base_price', $sort)
        ->get();      

        Debugbar::info($products);

        $view = View::make('front.pages.products.index') 
            ->with('products', $products);

     
         
        if(request()->ajax()) { 
 
            $sections = $view->renderSections(); 
 
            return response()->json([ 
                'content' => $sections['content'], 
            ]); 
        } 
 
        return $view; 
    } 

    
}

