@extends('admin.layout')

@section('ex_css')

@endsection

@section('judul')
  Tambah Galeri
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
          <h3 class="box-title">Kelola Galeri {{ $penginapan->nama_penginapan }}</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('pTambahPenginapanGallery', ['id' => $penginapan->id]) }}">
          <div class="box-body">
          	{{ csrf_field() }}
            <div class="form-group" id="inputGaleri">
              Galeri 1 <br><input type="file" name="galleries[]"/>
            </div>            

            <button type="button" class="btn btn-default" onclick="addInput('inputGaleri');"> Tambah Galeri </button>
          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div><!-- /.box -->
  </div>

@endsection

@section('script')
  <script>
     $('#penginapan').addClass('active');
     $('#menuPenginapan').addClass('active');

    var counter = 1;  
    var limit = 1000;

    function addInput(divName){
         if (counter == limit)  {
              alert("You have reached the limit of adding " + counter + " inputs");
         }
         else {
              var newdiv = document.createElement('div');
              newdiv.innerHTML = "<br> Galeri " + (counter + 1) + " <br><input type='file' name='galleries[]'/>";
              document.getElementById(divName).appendChild(newdiv);
              counter++;
         }
    }

  </script>

@endsection