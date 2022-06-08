<?php

namespace App\Http\Controllers\Front;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Http\Requests\Front\CategoryProductRequest;
use Debugbar;


class CategoryController extends Controller
{
      protected $category;

      public function __construct(CategoryProduct $category)
      {
          $this->category = $category;
      }    

    // public function index()
    // {
        
    //     $view = View::make('front.pages.products.index')

    //     ->with('product', $this->product->where('active', 1)->where('visible', 1)->get());

    //     if(request()->ajax()) {     

    //         $sections = $view->renderSections();

    //         return response()->json([
    //             'content' => $sections['content'],
    //         ]);

    //     }
        
    //     return $view;
    }
    
    // public function show(CategoryProduct $category)
    // {
    //     $view = View::make('front.pages.product.index')
    //     ->with('category', $this->$category)->get();
   

    //     if(request()->ajax()) {     

    //         $sections = $view->renderSections();

    //         return response()->json([
    //             'content' => $sections['content'],
    //         ]);

    //     }
        
    //     return $view;
    // }
    



