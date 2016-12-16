@extends('admin.layout')

@section('ex_css')

@endsection

@section('judul')
  Kelola Galeri
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

 

  @foreach($galleries as $gallery)
	<div class="col-md-6 col-xs-12">
      <!-- general form elements -->
      <div class="box box-primary">
        
        <div class="box-header with-border">
          <h3 class="box-title">Galeri ke {{ $gallery->nomor }}</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <img src="{{ url('konten/gallery') }}/{{ $gallery->nama_photo }}" class="gambar" width="400" height="300" alt="">
        </div>
        <div class="box-footer">
          <a href="#" data-id="{{ $gallery->id }}" data-toggle="modal"  data-target="#hapusDialog" class="hapusDialog"><button class="btn btn-danger">Hapus</button></a>
        </div>
      </div><!-- /.box -->
  </div>
  @endforeach

 <div class="col-md-2 col-xs-2">
    <a href="{{ url('wisata/galeri') }}/{{$id_konten}}/tambah/galeri" class="btn btn-block btn-social btn-primary">
      <i class="fa fa-plus-square-o"></i> Tambah Galeri
    </a>
  </div>  

  <div id="hapusDialog" class="modal fade" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form id="delete-form" action="{{ url('wisata/galeri/hapus/') }}" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Dialog Notifikasi</h4>
      </div>
      <div class="modal-body">
        <div class="box-body">
            Hapus data galeri ?
            {{ csrf_field() }}
            <input type="hidden" id="id_delete" name="id" />
            <input type="hidden" id="id_konten" value="{{ $id_konten }}" name="id_konten"/>
        </div><!-- /.box-body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-default pull-right">Ya</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

@endsection

@section('script')
  <script>
    $('#menuWisata').addClass('active');
    $('#lihatWisata').addClass('active');

    $('body').delegate('.hapusDialog','click',function(){
        var id = $(this).data('id');
        $('#id_delete').val(id);
    });
    
  </script>

@endsection