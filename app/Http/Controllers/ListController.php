<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        return view('list.index');
    }

    public function list()
    {
        return view('list.index', [
            'users' => User::all(),
        ]);
    }
}
