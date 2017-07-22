<?php

namespace arepnandur\Http\Controllers;

use Illuminate\Http\Request;
use arepnandur\Http\Requests;
use arepnandur\Http\Controllers\Controller;
use arepnandur\Tanaman;
use arepnandur\Http\Requests\CreateTanamanRequest;

class TanamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $tanamans = Tanaman::get();
        return view('admin.tanaman', compact('tanamans'));
    }
    public function tambah(){
        return view('admin.addtanaman');
    }
    public function edit($id){
        $tanaman = Tanaman::whereId($id)->first();
        return view('admin.edittanaman', compact('tanaman'));
    }
    public function update($id, CreateTanamanRequest $request){
        $tanaman = Tanaman::whereId($id)->first();
        $tanaman->fill($request->input())->save();
        return redirect('/admin/tanaman');
    }
    public function store(CreateTanamanRequest $request, Tanaman $tanaman){
        $tanaman->create($request->all());
        return redirect('/admin/tanaman');
    }
    public function destroy($id){
        $tanaman = Tanaman::whereId($id)->first();
        $tanaman->delete();
        return redirect('/admin/tanaman');
    }
}
