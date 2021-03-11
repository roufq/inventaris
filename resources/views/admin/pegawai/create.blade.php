@extends('admin.home')
@section('title','Tambah Data Pegawai')
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
              <h3 class="box-title">Tambah Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('pegawai.store')}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nama_pegawai" placeholder="" name="nama_pegawai">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Pegawai</label>
                  <input type="number" class="form-control" id="nip" placeholder="" name="nip">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">alamat</label>
                  <input type="textarea" class="form-control" id="alamat" placeholder="" name="alamat">
                </div> 
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
        </div>
  </div>
</section>
@endsection