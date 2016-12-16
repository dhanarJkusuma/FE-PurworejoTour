@extends('admin.layout')


@section('judul')
  Tambah Desa
@endsection

@section('konten')
  
  @if(Session::get('berhasil') != null)
  <div class="col-md-12 col-xs-12">
    <div class="callout callout-success">
      <h4>Notifikasi</h4>
      <p>{{ Session::get('berhasil') }} </p>
    </div>
  </div>
  @endif

  @if(Session::get('error') != null)
  <div class="col-md-12 col-xs-12">
    <div class="callout callout-danger">
      <h4>Error</h4>
      <p>{{ Session::get('error') }} </p>
    </div>
  </div>
  @endif

  

	<div class="col-md-12 col-xs-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Desa</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('pTambahDesa') }}">
          <div class="box-body">
          	{{ csrf_field() }}
            <div class="form-group">
              <label for="nama">Nama Desa</label>
              <input type="text" class="form-control" name="desa" id="nama" placeholder="Masukkan Nama Desa">
            </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div><!-- /.box -->
  </div>

@endsection

@section('script')
  <script>
    $('#desa').addClass('active');
    $('#menuDesa').addClass('active');
    $('#tambahDesa').addClass('active');
  </script>
@endsection