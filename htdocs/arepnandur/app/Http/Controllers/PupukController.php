<?php

namespace arepnandur\Http\Controllers;

use Illuminate\Http\Request;
use arepnandur\Http\Requests;
use arepnandur\Http\Controllers\Controller;
use arepnandur\Pupuk;
use arepnandur\Http\Requests\CreatePupukRequest;
use arepnandur\Http\Requests\UpdatePupukRequest;
class PupukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $pupuks = Pupuk::get();
        return view('admin.pupuk', compact('pupuks'));
    }
    public function tambah(){
        return view('admin.addpupuk');
    }
    public function edit($id){
        $pupuk = Pupuk::whereId($id)->first();
        return view('admin.editpupuk', compact('pupuk'));
    }
    public function update($id, UpdatePupukRequest $request){
        $pupuk = Pupuk::whereId($id)->first();
        $pupuk->fill($request->input())->save();
        return redirect('/admin/pupuk');
    }
    public function store(CreatePupukRequest $request, Pupuk $pupuk){
        $pupuk->create($request->all());
        return redirect('/admin/pupuk');
    }
    public function destroy($id){
        $pupuk = Pupuk::whereId($id)->first();
        $pupuk->delete();
        return redirect('/admin/pupuk');
    }
}
