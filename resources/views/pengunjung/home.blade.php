@extends('pengunjung.pengunjung_layout')

@section('content')
	@foreach($wisata as $w)
	<div class="span3">
		<article class="property-item">
			<div class="property-images">
				<a href="{{ url('detail') }}/{{ $w->permalink }}" title="Florida 5, Pinecrest, FL">
					<img width="540" height="360" src="{{ url('konten/thumbnail') }}/{{ $w->thumbnail }}" class="status-35 wp-post-image" alt="Florida 5, Pinecrest, FL" title="Florida 5, Pinecrest, FL" /></a>
			</div><!-- /.property-images -->
			<div class="property-attribute">
				<h3 class="attribute-title"><a href="property-single.html" title="Florida 5, Pinecrest, FL" >{{ $w->judul_konten }}</a></h3>
				<span class="attribute-city">{{ $w->alamat }}</span>
			</div>
			<div class="property-meta clearfix">
				<div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240M</span></div>
				<div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
				<div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
			</div>
		</article>
	</div>
	@endforeach
@endsection