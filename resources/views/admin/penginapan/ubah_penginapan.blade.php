@extends('admin.layout')

@section('ex_css')
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .map-group
      {
        width: 100%;
        overflow: hidden;
        height: 400px
      }
      #map {
        height: 400px;
        overflow: overflow-y;
      }
    </style>
@endsection

@section('judul')
  Ubah Penginapan
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
          <h3 class="box-title">Ubah Penginapan {{ $penginapan->nama_penginapan }}</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('pUbahPenginapan',['id' => $penginapan->id]) }}">
          <div class="box-body">
          	{{ csrf_field() }}
            <div class="form-group">
              <label for="nama">Nama Penginapan</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Penginapan" value="{{ $penginapan->nama_penginapan }}">
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" name="alamat"  id="alamat">{{ $penginapan->alamat }}</textarea>
            </div>

             <div class="form-group">
              <label for="permalink">Permalink</label>
              <input type="text" class="form-control" id="permalink" name="permalink" placeholder="Masukkan permalink/alamat url" value="{{ $penginapan->permalink }}">
            </div>

            <div class="form-group">
              <label for="kapasitas">Kapasitas</label>
              <input type="text" class="form-control" name="kapasitas" id="kapasitas" placeholder="Masukkan Kapasitas Penginapan" value="{{ $penginapan->kapasitas }}">
            </div>

           <div class="form-group">
              <label for="thumbnail">URL_Gambar</label>
              <input type="file" name="thumbnail"/>
              <img src="{{ url('penginapan/thumbnail')  }}/{{ $penginapan->url_gambar }}" width='100' height='100'>
            </div>            

            <div class="form-group">
              <label for="desa">Desa</label>
              <select class="form-control" name="desa">
                @foreach($desa as $d)
                  @if ($d->id == $penginapan->id_desa)
                    <option value="{{ $d->id }}" selected="">{{ $d->nama_desa }}</option>
                  @else
                    <option value="{{ $d->id }}" >{{ $d->nama_desa }}</option>
                  @endif
                @endforeach
              </select>
            </div>


            <div class="form-group">
              <label for="kontak">Kontak</label>
              <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Masukkan Kontak Penginapan" value="{{ $penginapan->kontak }}">
            </div>


            <div id="map-group">
              <div id="map"></div>
            </div>

            <div class="form-group">
              <label for="latitude">Latitude</label>
              <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $penginapan->latitude }}" placeholder="Masukkan Lokasi Latitude">
            </div>

            <div class="form-group">
              <label for="longitude">Longitude</label>
              <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $penginapan->longitude }}" placeholder="Masukkan Lokasi Longitude">
            </div>
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
    $('#lihatPenginapan').addClass('active');

  var map;
  var location;
  var marker;

  var initialLocation = {lat: {{ $penginapan->latitude }}, lng: {{ $penginapan->longitude }}};
  
  function initMap() {

    
    map = new google.maps.Map(document.getElementById('map'), {
      center: initialLocation,
      zoom: 15
    });

    map.addListener('click',function(event){
      marker.setMap(null);
      addMarker(event.latLng);
      bindLatLng(event.latLng);
    });

    addMarker(initialLocation);
  
  }

  function addMarker(location) {
        marker = new google.maps.Marker({
          position: location,
          map: map
        });
        location = marker;
        marker.setMap(map);
  }

  function bindLatLng(latLng)
  {
      $("#latitude").val(latLng.lat());
      $("#longitude").val(latLng.lng());
  }




</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX_Yu91SDMqbFWdSQNE-mEY0xyWoU73Ik&callback=initMap"
async defer></script>
@endsection