<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Http\Requests\Admin\SaleRequest;
use Debugbar;



class SaleController extends Controller
{
    protected $sale;

    public function __construct(Sale $sale)
    {
        $this->sale = $sale;
    }

    public function index()
    {
        $view = View::make('admin.pages.sales.index')
                ->with('sale', $this->sale)
                ->with('sales', $this->sale->where('active', 1)->get());

        if(request()->ajax()) {

            $sections = $view->renderSections();

            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]);
        }
        return $view;
    }

    public function create()
    {

       $view = View::make('admin.pages.sales.index')
        ->with('sale', $this->sale)
        ->renderSections();


        return response()->json([
            'form' => $view['form']
        ]);

    }

    public function store(SaleRequest $request)
    {
        $sale = $this->sale->updateOrCreate([
                'id' => request('id')],[
                'client_id' => request('client_id'),
                'payment_method_id' => request('payment_method_id'),
                'ticket_number' => request('ticket_number'),
                'date_emission' => request('date_emission'),
                'time_emission' => request('time_emission'),
                'total_base_price' => request('total_base_price'),
                'total_tax_price' => request('total_tax_price'),
                'total_price' => request('total_price'),
                'active' => 1,
        ]);

        $view = View::make('admin.pages.sales.index')
        ->with('sales', $this->sale->where('active', 1)->get())
        ->with('sale', $sale)

        ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $sale->id,

        ]);
    }

    public function edit(Sale $sale)
    {

        $view = View::make('admin.pages.sales.index')
        ->with('sale', $sale)
        ->with('sales', $this->sale->where('active', 1)->get());

        if(request()->ajax()) {

            $sections = $view->renderSections();

            return response()->json([
                'form' => $sections['form'],
            ]);
        }
        return $view;
    }

    public function show(Sale $sale){

    }

    public function destroy(Sale $sale)
    {

        $sale->active = 0;
        $sale->save();

        $view = View::make('admin.pages.sales.index')
            ->with('sale', $this->sale)
            ->with('sales', $this->sale->where('active', 1)->get())
            ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}
