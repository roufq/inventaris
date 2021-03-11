@extends('admin.home')
@section('title','Edit Data Pegawai')
@section('content')
<section class="content">
  @if(session('status'))
    <div class="alert alert-succes">
      {{session('status')}}
     </div>
    @endif  
  <div class="row">
     <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('/admin/pegawai/update',$pegawai->id)}}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Pegawai</label>
                  <input type="text" class="form-control" id="nama_peagwai" value="{{$pegawai->nama_peagwai}}" name="nama_peagwai">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nip" value="{{$pegawai->nip}}" name="nip">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">gender</label>
                  <input type="text" class="form-control" id="alamat" value="{{$pegawai->alamat}}" name="alamat">
                </div>
               
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">edit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
        </div>
  </div>
</section>
@endsection