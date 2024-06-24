<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashIndex(){
        return view('admin.index');
    }

    public function show(Daftar $daftar){
        return view('admin.detaildp', compact('daftar'));
    }

    public function edit(Daftar $daftar){
        return view('admin.editdp', compact('daftar'));
    }

    public function users(){
        return view('admin.users.index');
    }

    public function profile(){
        return view('admin.users.profile');
    }
}
