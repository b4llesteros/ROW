<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Contact; 
use App\Http\Requests\Admin\ContactRequest;
use Debugbar;


class ContactController extends Controller
{


    protected $contact;


    public function __construct(Contact $contact)
    {       
        $this->contact = $contact;      
    }
    
    public function index() 
    {    

        $view = View::make('front.pages.contacts.index')                         
    } 
   
    public function store(ContactRequest $request) 
    {                                
        $contact = $this->contact->updateOrCreate([
               
                'id' => request('id')],[                    
                'name' => request('name'),
                'surname' => request('title'),
                'email' => request('description'),
                'phone' => request('phone'),
                'message' => request('message'),
                'active' => request('active'),             
        ]);
       
        $view = View::make('front.pages.contacts.index')      
        ->renderSections();        

        return response()->json([
            'content' => $section['content'],           
        ]);
    }
}

  