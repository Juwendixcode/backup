@extends('master')

@section('content')
<!--Simulasi-->
<div class="section scrollspy">
    <div class="container">
        <h2 class="header text_b">Hasil Simulasi Pertanian </h2>
        <div class="container">  
            <div class="row">
                <div  class="col offset-s0 s12">
                    <h5>Data Penanaman</h5>
                    <table style="width:100%">
                        <tr>
                            <td class="green-text">Luas Lahan (m<sup>2</sup>)</td>
                            <td>{{number_format ($panjang, 0, ',', '.')}} m * {{number_format ($lebar, 0, ',', '.')}} m = <b>{{number_format ($luas, 0, ',', '.')}} m<sup>2</sup></b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Luas Lahan (hektare)</td>
                            <td><b>{{number_format ($luasha, 3, ',', '.')}} ha</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Cara Penanaman</td>
                            <td><b>{{$jenisp}}</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Jenis Tanaman</td>
                            <td><b>{{$bibit->nama}}</b></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div  class="col offset-s0 s12 ">
                    <h5>Perkiraan Pengeluaran</h5>
                    <table style="width:100%">
                        <tr>
                            <td class="green-text">Kebutuhan bibit</td>
                            <td><b>{{$kebutuhan}} Kg/ha</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Biaya bibit</td>
                            <td>{{$kebutuhan}} Kg * {{$luasha}} ha * Rp.  {{number_format ($bibit->hbibit, 2, ',', '.')}} = <b>Rp.  {{number_format ($biayab, 2, ',', '.')}}</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Kebutuhan pupuk urea</td>
                            <td><b>{{$bibit->kpu}} Kg/ha</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Biaya pupuk urea</td>
                            <td>{{$bibit->kpu}} Kg * {{$luasha}} ha * Rp.  {{number_format ($urea->harga, 2, ',', '.')}} = <b>Rp.  {{number_format ($pupuku, 2, ',', '.')}}</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Kebutuhan pupuk SP-36</td>
                            <td><b>{{$bibit->kps}} Kg/ha</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Biaya pupuk SP-36</td>
                            <td>{{$bibit->kps}} Kg * {{$luasha}} ha * Rp.  {{number_format ($sp36->harga, 2, ',', '.')}} = <b>Rp.  {{number_format ($pupuks, 2, ',', '.')}}</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Kebutuhan pupuk KCL</td>
                            <td><b>{{$bibit->kpk}} Kg/ha</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Biaya pupuk KCL</td>
                            <td>{{$bibit->kpk}} Kg * {{$luasha}} ha * Rp.  {{number_format ($kcl->harga, 2, ',', '.')}} = <b>Rp.  {{number_format ($pupukk, 2, ',', '.')}}</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Kebutuhan pupuk kandang</td>
                            <td><b>{{number_format ($bibit->kph, 0, ',', '.')}} Kg/ha</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Biaya pupuk kandang</td>
                            <td>{{number_format ($bibit->kph, 0, ',', '.')}} Kg * {{$luasha}} ha * Rp.  {{number_format ($kandang, 2, ',', '.')}} = <b>Rp.  {{number_format ($pupukh, 2, ',', '.')}}</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Total biaya pengeluaran</td>
                            <td><b>Rp. {{number_format ($jmlpeng, 2, ',', '.')}}</b></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">* <i>Biaya pengeluaran belum termasuk biaya perawatan dan biaya pekerja</i></td>
                        </tr>
                        <tr>
                            <td colspan="2">* <i>Semua data yang ada diambil dari jurnal penelitian</i></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div  class="col offset-s0 s12">
                    <h5>Perkiraan Pendapatan</h5>
                    <table style="width:100%">
                        <tr>
                            <td class="green-text">Hasil panen bibit (<b>ton/ha</b>)</td>
                            <td>{{number_format ($panen, 2, ',', '.')}} ton/ha * {{number_format ($luasha, 2, ',', '.')}} ha = <b>{{number_format ($panenha, 3, ',', '.')}} ton</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Hasil panen bibit (<b>Kg/ha</b>)</td>
                            <td>{{number_format ($panenha, 3, ',', '.')}} ton * {{number_format (1000, 0, ',', '.')}} Kg = <b>{{number_format ($panenkg, 0, ',', '.')}} Kg</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Hasil penjualan bibit</td>
                            <td>{{number_format ($panenkg, 0, ',', '.')}} Kg * Rp. {{number_format ($bibit->hjual, 2, ',', '.')}} = <b>Rp. {{number_format ($jmlpend, 2, ',', '.')}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div  class="col offset-s0 s12">
                    <h4>Perkiraan Keuntungan</h4>
                    <table style="width:100%">
                        <tr>
                            <td class="green-text">Jumlah pendapatan</td>
                            <td><b>Rp. {{number_format ($jmlpend, 2, ',', '.')}}</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Jumlah pengeluaran</td>
                            <td><b>Rp. {{number_format ($jmlpeng, 2, ',', '.')}}</b></td>
                        </tr>
                        <tr>
                            <td class="green-text">Total perkiraan pendapatan</td>
                            <td>Rp. {{number_format ($jmlpend, 2, ',', '.')}} - Rp. {{number_format ($jmlpeng, 2, ',', '.')}} = <b>Rp. {{number_format ($total, 2, ',', '.')}}</b></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> 
        <div class="container">
            <div class="row">
                <div class="col offset-s7 s5">
                    <form action="/simulasi">
                        <button class="btn waves-effect waves-light green darken-1">Kembali</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
