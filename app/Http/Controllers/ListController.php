<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


use Barryvdh\DomPDF\Facade as PDF;

class ListController extends Controller
{
    // public function index(Request $request)
    // {
    //     if($request->has('search')){
    //         $data = User::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
    //     }else{
    //         $data = User::paginate(5);
    //     }
    //     $data = User::paginate(5);
    //     return view('list.index', compact('data'));
        
    // }

    public function list()
    {
        return view('list.index', [
            'users' => User::paginate(5),
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

    public function exportpdf()
    {
        $data = User::all();

        view()->share('data' , $data);
        $pdf = PDF::loadview('pdf.index');
        return $pdf->download('list.pdf');
    }
}
