<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
        $user = User::count();
        $contact = Contact::count();
        $userlakilaki = User::where('jeniskelamin','Laki-laki')->count();
        $userperempuan = User::where('jeniskelamin','Perempuan')->count();

        return view('dashboard.index', compact('user','contact','userlakilaki','userperempuan'));
    }
}
