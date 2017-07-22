@extends('admin')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah pupuk</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            {!!Form::open(['url'=>'/admin/pupuk/tambah', 'method'=>'POST'])!!}
                @include('admin.formpupuk')
            {!!Form::close()!!}
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
        
    </div>
    <!-- /.row -->
</div>
@stop