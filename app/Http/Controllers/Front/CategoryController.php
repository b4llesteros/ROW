<?php

namespace App\Http\Controllers\Front;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use Debugbar;

    

class CategoryController extends Controller
{
      protected $category;

      public function __construct(CategoryProduct $category, Product $product)
      {
          $this->category = $category;
          $this->product = $product;
      }
      

    public function show()
    {
      
      $products = CategoryProduct::find(1)->products();

      $view = View::make('front.pages.products.index')
        ->with('product', $products)
        // ->with('product', $products->where('active', 1)->where('visible', 1)->where('category.id','=','category_id') get());        

          if(request()->ajax()) {     

              $sections = $view->renderSections();

              return response()->json([
                  'content' => $sections['content'],
              ]);

        }
        return $view;
    }   




}
