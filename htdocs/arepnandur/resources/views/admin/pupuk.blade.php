@extends('admin')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tata kelola pupuk</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <a href="/admin/pupuk/tambah" class="navbar-btn btn-primary btn" style="margin-left:5px;"><span class="glyphicon glyphicon-plus"></span> Tambah pupuk</a>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <tr>
                        <th>ID.</th>
                        <th>Nama pupuk</th>
                        <th>Slug</th>
                        <th>Harga/Kg</th>
                        <th>Jenis</th>
                        <th>Update tanggal</th>
                    </tr>
                    @foreach($pupuks as $pupuk)
                    <tr >
                        <td>{{$pupuk->id}}</td>
                        <td><u><a href="/admin/pupuk/{{$pupuk->id}}/edit">{{$pupuk->nama}}</a></u></td>
                        <td>{{$pupuk->slug}}</td>
                        <td>{{$pupuk->harga}}</td>
                        <td>{{$pupuk->jenis}}</td>
                        <td>{{$pupuk->updated_at}}</td>
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