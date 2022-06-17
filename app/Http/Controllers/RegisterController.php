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
   
        $validate = user::create([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'nohp' => $request->nohp,
            'jeniskelamin' => $request->jeniskelamin
           
        ]);

        return redirect()->route('list')->with('success','Daftar Berhasil !');
   }
   
}
