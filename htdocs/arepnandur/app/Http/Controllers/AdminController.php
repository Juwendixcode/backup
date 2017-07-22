<?php

namespace arepnandur\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use arepnandur\Http\Requests;
use arepnandur\Tanaman;
use arepnandur\Pupuk;
use Auth;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if(Auth::guest()){
        	return redirect('login');
        }else{
            $jumlahT = Tanaman::get()->count();
            $jumlahP = Pupuk::get()->count();
            return view('admin.home', compact('jumlahT', 'jumlahP'));
        }
    }
}
