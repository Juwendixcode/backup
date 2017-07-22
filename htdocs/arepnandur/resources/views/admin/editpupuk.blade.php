@extends('admin')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit pupuk</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            {!!Form::model($pupuk, ['url'=>'/admin/pupuk/'.$pupuk->id.'/edit', 'method'=>'PATCH'])!!}
                @include('admin.formpupuk')
            {!!Form::close()!!}
                <div class="form-group">
                    {!!Form::button('Hapus pupuk', ['class'=>'navbar-btn btn-danger btn', 'data-toggle'=>'modal', 'data-target'=>'#myModal'])!!}
                </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
        
    </div>
    <!-- /.row -->
</div>
<!-- Modal popup -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Pupuk</h4>
            </div>
            <div class="modal-body">
                <p>Yakin ingin menghapus <b>{{$pupuk->nama}}</b> dari daftar pupuk?</p>
            </div>
            <div class="modal-footer">
                {!!Form::open(['url'=>'/admin/pupuk/'.$pupuk->id.'/delete', 'method'=>'DELETE'])!!}
                    {!!Form::submit('Ya', ['class'=>'btn btn-danger'])!!}
                    {!!Form::submit('Tidak', ['class'=>'btn btn-default', 'data-dismiss'=>'modal'])!!}
                {!!Form::close()!!}
            </div>
      </div>
    </div>
</div>
@stop