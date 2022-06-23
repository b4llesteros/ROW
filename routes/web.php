<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin'], function () {

    /*
    Dentro de resource( 'faqs') "faqs" significa lo que tendremos que escribir en la url para entrar en la página,
    en este caso tendremos que escribir www.dev-asociacion-mascotas.com/admin/faqs
    Tendremos que decir también que controlador queremos cargar, en este caso el controlador que estamos cargando se llama
    "FaqController" y se encuentra dentro de la carpeta /app/http/controllers/admin

    En Internet una web es enviada desde el servidor al usuario a través de un protocolo llamado
    HTTP/S. La información enviada a través de este protocolo llega a los puertos 80 (no-seguro) o al 443 (seguro). Cuando instalamos
    en el servidor un programa para convertirlo en un servidor web (por ejemplo, Nginx o Apache) estos se van a responsabilizar de
    gestionar esos puertos para detectar si hay llamadas o hay que hacer envios de datos.
    Las llamadas que hacemos por HTTP tiene principalmente 4 métodos (verbos) que son:
    - GET: Esto significa que hacemos una llamada que va a pedir datos al servidor.
    - POST: Esto significa que hacemos una llamada que va a enviar datos al servidor.
    - PUT: Esto signifca que hacemos una llamada que va a actualizar datos en el servidor.
    - DELETE: Esto significa que hacemos una llamada que va a eliminar datos en el servidor.
    Estos métodos HTTP se corresponden con los métodos que vamos a tener en el controlador:

    - index, create, edit show  serán llamadas de tipo GET
        -- En index pediremos todos los datos de una tabla de la base de datos
        -- En create pediremos que nos limpie el formulario.
        -- En edit o show pediremos que nos pase sólo un registro de la tabla (por una id)
    - store será una llamada de tipo POST
        -- En store guardaremos los datos que hayamos añadido en el formulario, nos servirá tanto para guardar datos nuevos como actualizarlos
    - destroy será una llamada de tipo DELETE
        -- En destroy lo que haremos es borrar un dato de la base de datos
    */
                    //Laravel le quita la s a faqs
    Route::resource('faqs', 'App\Http\Controllers\Admin\FaqController', [
        'parameters' => [
            'faqs' => 'faq', // faq es la palabra que saldrá como parámentro en las rutas en route:link
        ],
        'names' => [
            'index' => 'faqs', // poner el enlace -> {{route('faqs')}} //Se señala este alias, y este alias apunta a este método
            'create' => 'faqs_create', //Método GET // Escoba
            'edit' => 'faqs_edit', //Método GET // Lápiz
            'store' => 'faqs_store', //Método POST //Disquete
            'destroy' => 'faqs_destroy', //Método DELETE //Borrar
            'show' => 'faqs_show', //Método GET //Lápiz
        ]
    ]);

    // Route::resource('providers', 'App\Http\Controllers\Admin\ProviderController', [
    //     'parameters' => [
    //         'providers' => 'provider',
    //     ],
    //     'names' => [
    //         'index' => 'providers',
    //         'create' => 'providers_create',
    //         'edit' => 'providers_edit',
    //         'store' => 'providers_store',
    //         'destroy' => 'providers_destroy',
    //         'show' => 'providers_show',
    //     ]
    // ]);

    Route::resource('products/categories', 'App\Http\Controllers\Admin\ProductCategoryController', [
        'parameters' => [
            'categories' => 'category',
        ],
        'names' => [
            'index' => 'products_categories',
            'create' => 'products_categories_create',
            'edit' => 'products_categories_edit',
            'store' => 'products_categories_store',
            'destroy' => 'products_categories_destroy',
            'show' => 'products_categories_show',
        ]
    ]);

    Route::resource('products', 'App\Http\Controllers\Admin\ProductController', [
        'parameters' => [
            'products' => 'product',
        ],
        'names' => [
            'index' => 'products',
            'create' => 'products_create',
            'edit' => 'products_edit',
            'store' => 'products_store',
            'destroy' => 'products_destroy',
            'show' => 'products_show',
        ]
    ]);

    Route::resource('users', 'App\Http\Controllers\Admin\UserController', [
        'parameters' => [
            'users' => 'user',
        ],
        'names' => [
            'index' => 'users',
            'create' => 'users_create',
            'edit' => 'users_edit',
            'store' => 'users_store',
            'destroy' => 'users_destroy',
            'show' => 'users_show',
        ]
    ]);


    Route::resource('clients', 'App\Http\Controllers\Admin\ClientController', [
        'parameters' => [
            'clients' => 'client',
        ],
        'names' => [
            'index' => 'clients',
            'create' => 'clients_create',
            'edit' => 'clients_edit',
            'store' => 'clients_store',
            'destroy' => 'clients_destroy',
            'show' => 'clients_show',
        ]
    ]);

    Route::resource('sales', 'App\Http\Controllers\Admin\CheckoutController', [
        'parameters' => [
            'sales' => 'sale',
        ],
        'names' => [
            'index' => 'sales',
            'create' => 'sales_create',
            'edit' => 'sales_edit',
            'store' => 'sales_store',
            'destroy' => 'sales_destroy',
            'show' => 'sales_show',
        ]
    ]);

});

Route::get('/', 'App\Http\Controllers\Front\HomeController@index')->name('front_home');

Route::get('/faqs', 'App\Http\Controllers\Front\FaqController@index')->name('front_faqs');


Route::post('/checkout', 'App\Http\Controllers\Front\CheckoutController@store')->name('checkout_store');

Route::get('/checkout/{fingerprint}', 'App\Http\Controllers\Front\CheckoutController@index')->name('front_checkout');


Route::get('/cart', 'App\Http\Controllers\Front\CartController@index')->name('front_cart');

// Route::get('/cart/checkout', 'App\Http\Controllers\Front\CheckoutController@index')->name('front_checkout');


Route::get('cart/plus/{fingerprint}/{price_id}', 'App\Http\Controllers\Front\CartController@pluscart')->name('front_plus_cart');
Route::get('cart/minus/{fingerprint}/{price_id}', 'App\Http\Controllers\Front\CartController@minuscart')->name('front_minus_cart');


Route::get('/products/filter', 'App\Http\Controllers\Front\ProductController@filter')->name('front_products_filter');

//La variable $category es la que viene del controlador //Filtro de categorías
Route::get('/products/categories/{category}', 'App\Http\Controllers\Front\CategoryController@show')->name('front_category');

Route::get('/products', 'App\Http\Controllers\Front\ProductController@index')->name('front_products');


Route::post('/products', 'App\Http\Controllers\Front\CartController@store')->name('front_cart_store');


Route::get('/products/sort/{sort}', 'App\Http\Controllers\Front\ProductController@sort')->name('front_product_sort');

//La variable $product es la que viene del controlador
Route::get('/products/{product}', 'App\Http\Controllers\Front\ProductController@show')->name('front_product');

Route::get('/contact', 'App\Http\Controllers\Front\ContactController@index')->name('front_contact');
Route::post('/contact', 'App\Http\Controllers\Front\ContactController@store')->name('contacts_store');






