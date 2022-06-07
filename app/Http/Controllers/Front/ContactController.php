<?php

namespace App\Http\Controllers\Front;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Front\ContactRequest;



class ContactController extends Controller
{
      protected $contact;

    

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
       
    }
    
    public function index()
    {
        
        $view = View::make('front.pages.contact.index');

        return $view;
    }
    
    public function store(ContactRequest $request)
    {            
        $contact = $this->contact->updateOrCreate([
            'id' => request('id')],[
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message'),
            
        ]);

        $sections = View::make('front.pages.contact.index')->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }
   
}
