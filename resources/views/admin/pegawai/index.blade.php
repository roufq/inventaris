@extends('admin.home')
@section('title','pegawai')
@section('content')
<div class="content">
	<div class="container-fluid">
		 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pegawai</h3>
            </div>
            <a href="{{route('pegawai.create')}}" class="btn btn-sm btn-primary" style="margin-left: 15px;">Tambah</a>
            <!-- /.box-header -->
            
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pegawai</th>
                  <th>NIP</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($pegawai as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->nama_pegawai}}</td>
                  <td>{{$data->nip}}</td>
                  <td>{{$data->alamat}}</td>
                  <td>
                  	<a href="{{url('admin/pegawai/edit',$data->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                  	<a href="{{URL::to('destroy/pegawai/'.$data->id)}}" onclick="return confirm('apa kamu serius?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>       
      <!-- /.row -->
	</div>
</div>
@endsection