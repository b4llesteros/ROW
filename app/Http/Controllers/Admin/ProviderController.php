<?php

//namespace le dice a Laravel donde se encuentra el controlador,identificar el archivo que estamos buscando
//si da error de que no encuentra el archivo, namespace está mal escrito, o el nombre del archivo está mal escrito o que no concuerda con el nombre del archivo
namespace App\Http\Controllers\Admin;

// Los use equivalen a los import de javascript, es una forma de traer
// otros archivos que contienen código a este archivo
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Provider; //El nombre del modelo es en singular
use App\Http\Requests\Admin\ProviderRequest;
use Debugbar;

// Podemos identificar que estamos ante un objeto por la palabra "class"
// el nombre objeto es "FaqController", el nombre del objeto tiene que
// coincidir con el nombre del archivo.

// extends lo que está afirmando es que el objeto "FaqController" está
// heredando todas las propiedades (variables) y métodos del objeto "Controller"

class ProviderController extends Controller
{

    // Un objeto puede tener propiedades o/y métodos.

    // La siguiente es una propiedad del objeto, una propiedad es equivalente
    // a una variable.Se puede crear popiedades sin darle valor. En este caso estamos declarando la propiedad $faq la cual
    // podrá ser usada si escribimos $this->faq, donde "this" significa el propio
    // objeto. Protected en este caso significa que esta propiedad sólo puede ser
    // usada desde dentro de una función.
    // Declarar una propiedad hay que poner protected + $nombre de la propiedad

    protected $provider;

    //Protectec, solo se puede acceder a esta propiedad a través de los métodos de este objeto

    /*
    Las siguientes líneas son métodos. Un método se identifica porque
    escribimos "public function". Public en este caso significa que esta función
    puede ser llamada por otro archivo para que se ejecute el código que hay dentro de
    la función.

    Cuando llamamos a un método antes de nada se ejecutara el método
    __construct (constructor). El constructor se utiliza normalmente para
    dar un valor a las propiedades.


    En este caso estamos construyendo el objeto del modelo Faq y asignándolo
    a la propiedad $this->faq para poder tener disponible el modelo dentro de
    cada método.

    Existen tres formas de construir (instanciar) un objeto, instanciar un objeto
    significa que hacemos disponible su código para poder ser usado.

    // 1 ª Forma (clásica):
    $faq = (new Faq);
    En esta forma estamos creando una variable que se llama faq, y que tiene como valor el objeto Faq. Si vemos
    la palabra "new" significa que se está instanciando el objeto.

    // 2ª Forma (inyección de dependencias, la más óptima):
    __construct(Faq $faq)
    En esta forma lo que hacemos es poner entre los paréntesis de un método (en este ejemplo en el método __construct) el nombre
    del objeto y una variable que tendrá como valor el objeto ya instanciado. El nombre de la variable puede ser el que queramos,
    pero normalmente solemos poner como nombre de la variable el mismo nombre del objeto.

    // 3ª Forma (uso de métodos estáticos, la menos óptima)
    View::make('admin.pages.faqs.index')
    En esta forma lo que hacemos es usar un método de un objeto sin necesidad de instanciarlo. En este caso estamos usando el método
    make del objeto View.
    Finalmente, una vez instanciado un objeto (por ejemplo, el objeto Faq) podemos acceder a sus propiedades escribiendo:
    $faq = new Faq;
    $faq->name;
    En este caso estamos accediendo a la propiedad "name" del objeto "faq";
    Si queremos acceder al método de un objeto tenemos que escribir:
    $faq->get();

    */

    public function __construct(Provider $provider)
    {

        $this->provider = $provider; //Para tenerlo disponible en todos los métodos del controlador

    }

    public function index() //Método de Index, que tiene el alias Index en las rutas
    {

        /*
            En este momento estamos usando el objeto View para crear una vista, a la cual le estamos pasando dos variables
            (faq y faqs). La primera variable tiene como valor los campos de la tabla faqs vacios, y la segunda variable
            tiene como valor todos los registros de la tabla faqs. Para pedir todos los datos hemos escrito: $this->faq->get();
        */

        $view = View::make('admin.pages.providers.index') //Aquí carga la página de index
                //Método with() para pasarle una variable a la vista
                ->with('provider', $this->provider) // Pasa el index con los campos de la tabla vacios
                ->with('providers', $this->provider);// Pasa el index con todos los campos de la tabla que tenga el campo active = 1



        if(request()->ajax()) { //Carga media AJAX y así no carga toda la página de nuevo

            $sections = $view->renderSections(); //Método para renderizar las secciones de la vista y las carga con las nuevas variables

            return response()->json([ //Lo devuelve mediante un JSON
                'table' => $sections['table'], //Devuelve la  seccion table
                'form' => $sections['form'], //Devuelve la seccion form
            ]);
        }

        return $view; //Devuelve la vista con los datos cargados en la variable $view
    }

    public function create() //Sirve para recargar el formulario y que aparezca en blanco
    {
        /*
            En la siguientes líneas estamos creando una variable que se llama view, y que tiene como valor el objeto View.
            El objeto View mediante un método estático está creando la vista 'admin.pages.faqs.create' que es la que se
            mostrará en pantalla. Con 'with' le estamos diciendo que le pase la variable 'faq' y que su valor sea el objeto
            modelo Faq, que como no estamos haciendo ninguna llamada a la base de datos nos devolverá los campos vacíos de la tabla.
            Por último, renderSections() lo que está haciendo es recargar las sections que tiene la vista (en este caso 'form' y 'table')
            con los datos procesados.
        */

       $view = View::make('admin.pages.providers.index')
        ->with('provider', $this->provider) //  Devuleve los campos de la tabla vacíos
        ->renderSections(); //Renderiza secciones
        Debugbar::info($view['form']); //Devuelve solo el formulario

        /*
            En la siguiente línea estamos devolviendo una respuesta a la petición AJAX, una petición AJAX hará que una parte de la página
            se actualice sin necesidad de recargar toda la página. En este caso, la parte que se actualizará es la parte del formulario. Para
            ello estamos diciendo que la palabra "form" será equivalente a $view['form'], la cual contiene el html del formulario ya actualizado.
        */

        return response()->json([
            'form' => $view['form']
        ]);
    }
    // Para utilizar el validador en esta línea se inyecta la dependencia del validador(del servidor) de formularios que corresponde.
    //Si el validador detecta algo que no es correcto, ningún código se validará y devolverá un error 422 con los mensajes de error.
    //Ejemplo de otro panel de administración: public function store(UserRequest $request)
    public function store(ProviderRequest $request) //se llama al validador, como se usa cuando se envía datos, y no siempre, no se
                                                //llama al validador en el constructor, por eso el validador se hace mediante la inyección
                                                //de dependencias
    {

            //este $this->faq es el modelo (el modelo es el que hace cosas con la base de datos)
            //updateOrCreate = actualiza o crea
        $provider = $this->provider->updateOrCreate([
                //request = a que es obligatorio que tiene que estar en blanco
                //si el usuario lo deja en blanco, el formulario no se guardaría
                //Esta id pertenece al input que está hidden dentro del formulario, por tanto la siguiente línea comprueba
                //si el campo id está vacío o no, si está vacío, crea un nuevo registro, si no está vacío, actualiza el registro
                'id' => request('id')],[
                    //request es que cogerá los datos del formulario( del atributo name=" ") y los guardará
                    //la palabra que está entre paréntesis es el nombre del atributo name de cada input
                    //no puede haber dos inputs con el mismo atributo name
                'name' => request('name'),
                'email' => request('email'),

        ]);
        //crea la vista de la tabla
        $view = View::make('admin.pages.providers.index')
        // pasa las dos variables a la vista que está preparando
        //la variable $faqs tiene todos los registros de la tabla faqs, que cumple esa condición
        ->with('providers', $this->provider->where('active', 1)->get())
        //la variable $faq significa los campos de la base de datos sin nada, es decir
        //cuando le pasas los datos se guarda y devuelve el formulario en blanco
        ->with('provider', $provider)
        //renderiza secciones, en este caso la tabla y el formulario
        ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $provider->id,
        ]);
    }
//la palabra que pones con el $ tiene que concidir con la que le has asignado
 // en el parámetro de la ruta
    public function edit(Provider $provider)
    {
        debugbar::info($provider);
        $view = View::make('admin.pages.providers.index')
        ->with('provider', $provider)
        ->with('providers', $this->provider->where('active', 1)->get());

        if(request()->ajax()) {

            $sections = $view->renderSections();

            return response()->json([
                'form' => $sections['form'],
            ]);
        }

        return $view;
    }

    public function show(Provider $provider){

    }

    public function destroy(Provider $provider)
    {

        // $provider->active = 0;
        $provider->save();

        $view = View::make('admin.pages.providers.index')
            ->with('provider', $this->provider)
            ->with('providers', $this->provider->where('active', 1)->get())
            ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}
