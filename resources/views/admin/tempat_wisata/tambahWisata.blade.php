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
  Tambah Tempat Wisata
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
          <h3 class="box-title">Tambah Tempat Wisata</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" method="POST" action="{{ url('wisata/tambah') }}">
          <div class="box-body">
          	{{ csrf_field() }}
            <div class="form-group">
              <label for="judul">Nama Tempat Wisata</label>
              <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul Konten">
            </div>

            <div class="form-group">
              <label for="isi_konten">Isi Tempat Wisata</label>
              <textarea class="form-control" name="isi" ></textarea>
            </div>

			     <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" name="foto"/>
            </div>            

             <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" name="alamat" ></textarea>
            </div>

            <!-- <div class="form-group">
              <label for="permalink">Permalinks</label>
              <input type="text" class="form-control" id="slug" name="slug" placeholder="Masukkan permalink/alamat url">
            </div> -->

            <div id="map-group">
              <div id="map"></div>
            </div>

            <div class="form-group">
              <label for="latitude">Latitude</label>
              <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Masukkan Lokasi Latitude">
            </div>

            <div class="form-group">
              <label for="longitude">Longitude</label>
              <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Masukkan Lokasi Longitude">
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
  $('#wisata').addClass('active');
  $('#menuWisata').addClass('active');
  $('#tambahWisata').addClass('active');
  var map;
  var location;
  var marker;

  var initialLocation = {lat: -7.714528, lng: 110.008083};
  
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