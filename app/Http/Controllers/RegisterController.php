<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'tittle' => 'Register'
        ]);
    }

    public function store(Request $request)
   {
    $validated= $request->validate([
          'nama'=>'required',
          'angkatan'=>'required',
          'nohp'=>'required',
          'jeniskelamin'=>'required'
      ]);
      User::create($validated);

      return redirect()->route('list')->with('success', 'Registration Successfull ,Please Login!');
   }
}
