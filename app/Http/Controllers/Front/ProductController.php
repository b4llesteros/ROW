<?php

namespace App\Http\Controllers\Front;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Price;
use Request;
use App\Http\Requests\Front\ProductRequest;
use Debugbar;


class ProductController extends Controller
{
      protected $product;

      public function __construct(Product $product, Price $price)
      {
            $this->product = $product;
            $this->price = $price;
      }    

    public function index()
    {
    
        $view = View::make('front.pages.products.index')        
        ->with('products', $this->product->where('active', 1)->where('visible', 1)->orderBy('title','asc')->get());
              
        
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
        $view = View::make('front.pages.products.index') 
        ->with( $sort); 
 
            if ($sort == 'price_asc') { 
                $view->with('products', $this->product->prices->where('active', 1)->where('visible', 1)->orderBy('price', 'asc')->get()); 
            } elseif ($sort == 'price_desc') { 
                $view->with('products', $this->product->prices->where('active', 1)->where('visible', 1)->orderBy('price', 'desc')->get()); 
            } else { 
                $view->with('products', $this->product->where('active', 1)->where('visible', 1)->get()); 
            } 
         
        if(request()->ajax()) { 
 
            $sections = $view->renderSections(); 
 
            return response()->json([ 
                'content' => $sections['content'], 
            ]); 
        } 
 
        return $view; 
    } 

    
}

