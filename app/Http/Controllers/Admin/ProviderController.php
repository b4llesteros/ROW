<?php



use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Provider; 
use App\Http\Requests\Admin\ProviderRequest;
use Debugbar;

class ProviderController extends Controller
{

    protected $provider;
    

    public function __construct(Provider $provider)
    {

        $this->provider = $provider; 

    }

    public function index() 
    {

      
        $view = View::make('admin.pages.providers.index') 
           
                ->with('provider', $this->provider) 
                ->with('providers', $this->provider->where('active', 1)->get());  



        if(request()->ajax()) { 

            $sections = $view->renderSections(); 

            return response()->json([ 
                'table' => $sections['table'], 
                'form' => $sections['form'], 
            ]);
        }

        return $view; 

    public function create() 
    {
        

       $view = View::make('admin.pages.providers.index')
        ->with('provider', $this->provider) 
        ->renderSections(); 
        Debugbar::info($view['form']); 
       

        return response()->json([
            'form' => $view['form']
        ]);
    }
    
    public function store(ProviderRequest $request) //se llama 
    {            
        $provider = $this->provider->updateOrCreate([
               
                'id' => request('id')],[                   
                'name' => request('name'),
                'email' => request('email'),
        ]);
        
        $view = View::make('admin.pages.providers.index')
       
        ->with('providers', $this->provider->where('active', 1)->get())        
        ->with('provider', $provider)     
        ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $provider->id,
        ]);
    }

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
