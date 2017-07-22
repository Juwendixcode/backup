@extends('admin')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tata kelola tanaman</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <a href="/admin/tanaman/tambah" class="navbar-btn btn-primary btn" style="margin-left:5px;"><span class="glyphicon glyphicon-plus"></span> Tambah tanaman</a>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <tr>
                        <th rowspan="3">ID.</th>
                        <th rowspan="3">Nama Tanaman</th>
                        <th colspan="2">Jumlah bibit Kg/ha</th>
                        <th colspan="2">Hasil panen bibit ton/ha</th>
                        <th rowspan="3">Jumlah urea Kg/ha</th>
                        <th rowspan="3">Jumlah KCL Kg/ha</th>
                        <th rowspan="3">Jumlah SP-36 Kg/ha</th>
                        <th rowspan="3">Jumlah pupuk kandang Kg/ha</th>
                        <th rowspan="3">Harga bibit/Kg</th>
                        <th rowspan="3">Harga jual/Kg</th>
                        <th rowspan="3">Update tanggal</th>
                    </tr>
                    <tr></tr>
                    <tr>
                        <th>Jajar legowo</th>
                        <th>Biasa</th>
                        <th>Jajar legowo</th>
                        <th>Biasa</th>
                    </tr>
                    @foreach($tanamans as $tanaman)
                    <tr>
                        <td>{{$tanaman->id}}</td>
                        <td><u><a href="/admin/tanaman/{{$tanaman->id}}/edit">{{$tanaman->nama}}</a></u></td>
                        <td>{{$tanaman->kpmj}} Kg</td>
                        <td>{{$tanaman->kpmb}} Kg</td>
                        <td>{{$tanaman->hpmj}} ton</td>
                        <td>{{$tanaman->hpmb}} ton</td>
                        <td>{{$tanaman->kpu}} Kg</td>
                        <td>{{$tanaman->kpk}} Kg</td>
                        <td>{{$tanaman->kps}} Kg</td>
                        <td>{{$tanaman->kph}} Kg</td>
                        <td>Rp.{{$tanaman->hbibit}}</td>
                        <td>Rp.{{$tanaman->hjual}}</td>
                        <td>{{$tanaman->updated_at}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
                
</div>
@stop