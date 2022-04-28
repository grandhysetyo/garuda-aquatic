<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsController extends Controller
{    
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('backoffice.contact.index',compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function reply($id)
    {
        $message = Contact::find($id); 
        return view('backoffice.contact.reply',compact('message'));
    }

    public function sendMail(Request $request, $id){
       
    }
}