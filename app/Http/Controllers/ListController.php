<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        return view('list.index', compact('data'));
    }

    public function list()
    {
        return view('list.index', [
            'users' => User::all(),
        ]);      
    }

    public function tampilkandata($id)
    {
        $data = User::find($id);
        //dd($data);

        return view('register.tampiledit', compact('data'));
    }

    public function editdata(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('list')->with('success','Data Berhasil Di Edit !');

    }

    public function hapusdata($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('list')->with('success','Data Berhasil Di Hapus !');

    }
}
