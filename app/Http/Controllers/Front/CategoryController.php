<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Debugbar;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryProduct $category_product)
    {
        $this->category_product = $category_product;          
    }
      
      //La variable $category tiene que ser la misma que se ha puesto en la ruta
    public function show(CategoryProduct $category)
    {     
     
      	$view = View::make('front.pages.products.index')        
        ->with('category', $category)
        //$category->products es la relación que hemos creado en el modelo CategoryProduct
        //'products' es el nombre que le hemos puesto a la variable en que se pasa a la vista
        //que se usa para hacer el bucle
        ->with('products', $category->products->where('visible',1));

		if(request()->ajax()) {     

			$sections = $view->renderSections();

			return response()->json([
				'content' => $sections['content'],
			]);
        }

        return $view;
    }   
}
