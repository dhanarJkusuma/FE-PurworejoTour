@extends('pengunjung.single_detail_layout')

@section('carousel')
	<div id="myCarousel" class="carousel slide">
		<!-- Carousel items -->
		<div class="carousel-inner">
			<?php  $i=1; ?>
			@foreach($galleries as $gallery)
				@if($i==1)
					<div class='item active'><img src="{{ url('konten/gallery') }}/{{ $gallery->nama_photo }}" width='600' height='400' alt='' /></div>
				@else
					<div class='item '><img src="{{ url('konten/gallery') }}/{{ $gallery->nama_photo }}" width='600' height='400' alt='' /></div>
				@endif
				<?php $i++; ?>
			@endforeach
		</div>
		<div class="carousel-thumbnail">
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			<ol class="carousel-indicators hidden-phone">
				<?php  $i=0; ?>
				@foreach($galleries as $gallery)
					@if($i==0)
						<li data-target='#myCarousel' data-slide-to='{{ $i }}' class='active'><img src="{{ url('konten/gallery') }}/{{ $gallery->nama_photo }}" width='80' height='80' alt='' /></li>
					@else
						<li data-target='#myCarousel' data-slide-to='{{ $i }}' class=''><img src="{{ url('konten/gallery') }}/{{ $gallery->nama_photo }}" width='80' height='80' alt='' /></li>
					@endif
					<?php $i++; ?>
				@endforeach
			</ol>
	  </div>
	</div>
@endsection


@section('title')
	{{ $wisata->judul_konten }}
@endsection

@section('judul')
	{{ $wisata->judul_konten }}
@endsection

@section('alamat')
	{{ $wisata->alamat }}
@endsection

@section('isi')
	{{ $wisata->isi_konten }}
@endsection

@section('script')
	<script>
	 	var map;
	  	var location;
	  	var marker;

	  	var initialLocation = {lat: {{ $wisata->lokasi_lat }}, lng: {{ $wisata->lokasi_long }}};
	  
	  	function initMap() {
	    	map = new google.maps.Map(document.getElementById('map'), {
	      	center: initialLocation,
	      	zoom: 15
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

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX_Yu91SDMqbFWdSQNE-mEY0xyWoU73Ik&callback=initMap"
async defer></script>
@endsection