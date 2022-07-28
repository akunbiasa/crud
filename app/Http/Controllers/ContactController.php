<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        
        return view('contact.index');
    }

    public function store(Request $request)
   {
   
        $validate = Contact::create([
            'email' => $request->email,
            'pesan' => $request->pesan,
            
           
        ]);

        return redirect()->route('dashboard')->with('success','Pesan Berhasil Dikirim !');
   }
}
