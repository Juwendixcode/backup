<?php

namespace arepnandur\Http\Controllers;

use Illuminate\Http\Request;
use arepnandur\Http\Requests;
use arepnandur\Http\Controllers\Controller;
use arepnandur\Tanaman;
use arepnandur\Pupuk;
use arepnandur\Http\Requests\SimulasiRequest;

class HomeController extends Controller
{
    public function index(){
    	return view('pages.home');
    }
    public function simulasi(){
    	$tanamans = Tanaman::get();
    	return view('pages.simulasi', compact('tanamans'));
    }
    public function hitung(SimulasiRequest $request){
        $panjang = $request->get('panjang');
        $lebar = $request->get('lebar');
        $luas = $panjang*$lebar;
        $luasha = $luas/10000;
        $jenistid = $request->get('jenistanaman');
        $bibit = Tanaman::whereId($jenistid)->first();
        $urea = Pupuk::whereSlug('urea')->first();
        $sp36 = Pupuk::whereSlug('sp-36')->first();
        $kcl = Pupuk::whereSlug('kcl')->first();
        $kandang = 300;
        $jenispid = $request->get('jenispenanaman');
        if($jenispid =='1'){
            $jenisp = 'Jajar Legowo';
            $kebutuhan = $bibit->kpmj;
            $panen = $bibit->hpmj;
        }else{
            $jenisp = 'Konvensional';
            $kebutuhan = $bibit->kpmb;
            $panen = $bibit->hpmb;
        }
        $biayab = $luasha * $kebutuhan * $bibit->hbibit;
        $pupuku = $luasha * $bibit->kpu * $urea->harga;
        $pupuks = $luasha * $bibit->kps * $sp36->harga;
        $pupukk = $luasha * $bibit->kpk * $kcl->harga;
        $pupukh = $luasha * $bibit->kph * $kandang;
        $panenha = $panen * $luasha;
        $panenkg = $panenha * 1000;
        $jmlpend = $bibit->hjual * $panenkg;
        $jmlpeng = $biayab + $pupuku + $pupuks + $pupukh + $pupukk;
        $total = $jmlpend - $jmlpeng;
        return view('pages.hasil', compact(['panjang','lebar','luas', 'luasha', 'jenisp', 'bibit', 'kebutuhan', 'panen', 'biayab', 'urea', 'kcl', 'sp36', 'kandang', 'pupuku', 'pupuks', 'pupukk', 'pupukh', 'panenk', 'jmlpeng', 'jmlpend', 'total', 'panenha', 'panenkg']));
    }
    public function pupuk(){
    	$pupuks = Pupuk::get();
    	return view('pages.pupuk', compact('pupuks'));
    }
    public function detail($slug){
    	$pupuk = Pupuk::whereSlug($slug)->first();
    	return view('pages.detail', compact('pupuk'));
    }
    public function jajarlegowo(){
        return view('pages.jajarlegowo');
    }
    public function konvensional(){
        return view('pages.konvensional');
    }
}