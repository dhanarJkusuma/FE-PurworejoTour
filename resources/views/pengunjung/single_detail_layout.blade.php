<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en-US" class="no-js ie ie6 ie-lte7 ie-lte8 ie-lte9"><![endif]-->
<!--[if IE 7 ]><html lang="en-US" class="no-js ie ie7 ie-lte7 ie-lte8 ie-lte9"><![endif]-->
<!--[if IE 8 ]><html lang="en-US" class="no-js ie ie8 ie-lte8 ie-lte9"><![endif]-->
<!--[if IE 9 ]><html lang="en-US" class="no-js ie ie9 ie-lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US" class="no-js"><!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="" />
	<meta name="keyword" content="" />
	<title>Informasi wisata | Purworejo - @yield('title')</title>
	<link rel="shortcut icon" href="fav-ico.png" />
	<meta name='robots' content='noindex,nofollow' />
	<link rel='stylesheet' id='realexpert_bootstrap_main_css-css'  href="{{ asset('pengunjung/library/bootstrap/css/bootstrap.min.css') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='realexpert_bootstrap_responsive_css-css'  href="{{ asset('pengunjung/library/bootstrap/css/bootstrap-responsive.min.css') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='realexpert_font_awesome_css-css'  href="{{ asset('pengunjung/library/font-awesome/css/font-awesome.min.css') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='realexpert_font_awesome_css_ie7-css'  href="{{ asset('pengunjung/library/font-awesome/css/font-awesome-ie7.min.css') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='flexslider_css-css'  href="{{ asset('pengunjung/library/flexslider/flexslider.css') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='default-style-css'  href="{{ asset('pengunjung/style.css') }}" type='text/css' media='all' />
	<script src="{{ asset('admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/jquery3e5a.js?ver=1.10.2') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/jquery-migrate.min1576.js?ver=1.2.1') }}"></script>
	
	<style type="text/css">
		@font-face
		{
			font-family: ProximaNova;
			src:url("{{ asset('pengunjung/library/fonts/ProximaNova-Regular.otf') }}") format("opentype");
			font-weight:normal;
		}

		@font-face{
			font-family: ProximaNova;
			src:url("{{ asset('pengunjung/library/fonts/ProximaNova-Light.otf') }}") format("opentype");
			font-weight:200;
		}

		@font-face{
			font-family: ProximaNova;
			src:url("{{ asset('pengunjung/library/fonts/ProximaNova-Bold.otf') }}") format("opentype");
			font-weight:bold;
		}

		@font-face{
			font-family: ProximaNova;
			src:url("{{ asset('pengunjung/library/fonts/ProximaNova-Semibold.otf') }}") format("opentype");
			font-weight:600;
		}
		body{
			font-family:ProximaNova;
			color:#757c80;
		}
		input, button, select, textarea{
			font-family:ProximaNova;
		}
		.status-28-text{
			background-color : #ec4d3a;
		}
		.status-28{
			border-bottom:5px solid #ec4d3a !important;
		}
	
		.status-35-text{
			background-color : #007bb0;
		}
		.status-35{
			border-bottom:5px solid #007bb0 !important;
		}
		      #map {
        height: 400px;
        overflow: overflow-y;
      }
	</style>
</head>
<body>
	<div class="container-full">
		<header id="header" role="banner">
			<div class="nav-background">
				<div class="container">
					<div class="clearfix navbar">
						<div class="navbar-inner">
							<div class="container">
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</a>
								<div class="nav-collapse collapse">
									<nav id="nav-main" role="navigation">
										<ul id="menu-primary-menu" class="nav">
											<li id="menu-item-1536" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children dropdown menu-item-1536"><a class="dropdown-toggle" href="index.html">Home</a>
												<ul class="dropdown-menu">
													<li id="menu-item-1875" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1875"><a href="homepage-2.html">Homepage 2</a></li>
												</ul>
											</li>
										
											<li id="menu-item-1592" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1592"><a href="contact-us.html">Contact</a></li>
										</ul>
										<div id="social-network">
											<a class="fb" href="http://www.facebook.com/" title="Facebook"><i class="icon-facebook"></i></a>
											<a class="tw" href="http://www.twitter.com/" title="Twitter"><i class="icon-twitter"></i></a>
											<a class="rss" href="http://feeds.feedburner.com/" title="RSS"><i class="icon-rss"></i></a>					
											<a class="gp" href="http://www.plus.google.com/" title="Google Plus"><i class="icon-google-plus"></i></a>	
										</div>
									</nav> <!-- #nav-main -->
								</div>

							</div>

						</div>
					</div><!-- .navbar -->
				</div>
			</div>
		</header><!-- #header -->		
		<header id="banner">
			<div id="banner_container" class="container">
				<h3 class="banner-title">@yield('judul')</h3>
				<p class="banner-subtitle"></p>
			</div>
		</header>
		<div class="content-wrapper clearfix">
			<div class="container"><!-- container via hooks -->
				<div id="main" class="row-fluid">
					<section  id="content" class="span9" role="main">
						<article class="post-56 property type-property status-publish hentry clearfix" id="property-56">
							<div id="property_slider_wrapper">
								@yield('carousel')
							</div><!-- /#property_slider_wrapper -->
							<div class="single-property-content-wrapper">
								<header class="single-property-header">
									<h3 class="single-property-title">Keterangan</h3>
									<p class="single-property-address">@yield('alamat')</p>
								</header>
								<div class="single-property-content">
									@yield('isi')
								</div>
								<div class="single-property-map">
									<div id="the_map" class="map-wrap clearfix">
										<span class="map-label">Lokasi</span>
										<div id="map"></div>
									</div>
								</div>
							</div>
						</article>
					</section><!-- #content -->
					<section id="sidebar" class="span3" role="complementary">
						<aside id="property_agent-2" class="widget property-agent">
							<h3 class="widget-title">Agent Info</h3>
							<div class="content-widget"><img width="150" height="150" src="uploads/agent-john-due-150x150.jpg" class="alignleft agent-widget wp-post-image" alt="agent-john-due" />
							<div class="agent-widget-name">Julianne Hough</div>
							<div class="agent-widget-phone"><i class="icon-phone"></i>+215 (800) 4567</div>
							<div class="agent-widget-email"><i class="icon-envelope"></i>agent@envato.com</div>
							<div class="clear"></div>
							<div class="agent-widget-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidu</div><p>&nbsp;</p>
							<div class="agent-desc"><a role="button" data-toggle="modal" class="button button-search-widget" href="#contactAgent">Contact Agent</a></div></div><!-- /.content-widget -->
						</aside>
						
					</section><!-- #sidebar -->
				</div><!-- /#main -->
		
			</div><!-- /.container-->
		</div><!-- /.content-wrapper -->
		<section id="footer_widgets">
			<div id="footer_widget_wrapper">
				<div class="container">
					<div class="row-fluid">
						<div id="text-2" class="span4 widget widget_text">
							<h3 class="widget-title">About Real Expert</h3>
							<div class="textwidget">
								<p>Aquam est tortor, sagittis in fringilla in, pellent esque nec erat.  Aenean semper, neque non faucibus. tortor, sagittis in fringilla in, pellent esque nec eratsemper, neque non.</p>
								<p>Malesuada, dui felis tempor felis, vel varius ante diam ut mais eque non faucibus. tortor, sagittis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
							</div>
						</div>
						<div id="pages-2" class="span2 widget widget_pages">
							<h3 class="widget-title">Quick Links</h3>
							<ul>
								<li class="page_item page-item-14"><a href="#">Blog</a></li>
								<li class="page_item page-item-18"><a href="#">Contact Us</a></li>
								<li class="page_item page-item-115"><a href="#">Listing</a></li>
								<li class="page_item page-item-1864"><a href="#">Property Listing</a></li>
								<li class="page_item page-item-1681"><a href="#">Property Search</a></li>
								<li class="page_item page-item-1675"><a href="#">Special Tabs</a></li>
							</ul>
						</div>
						<div id="pages-5" class="span2 widget widget_pages">
							<h3 class="widget-title">Another Links</h3>
							<ul>
								<li class="page_item page-item-14"><a href="#">Blog</a></li>
								<li class="page_item page-item-18"><a href="#">Contact Us</a></li>
								<li class="page_item page-item-115"><a href="#">Listing</a></li>
								<li class="page_item page-item-1864"><a href="#">Property Listing</a></li>
								<li class="page_item page-item-1681"><a href="#">Property Search</a></li>
								<li class="page_item page-item-1675"><a href="#">Special Tabs</a></li>
							</ul>
						</div>
						<div id="blog-widget-2" class="span4 widget blog">
							<h3 class="widget-title">Recent Blogs</h3>
							<ul class="footer-blog">
								<li>
									<a href="#">
										<img width="70" height="60" src="uploads/1-70x60.jpg" class="alignleft wp-post-image" alt="Lectus non rutrum pulvinar urna leo dignissim lorem" />
									</a>
									<a href="#">Lectus non rutrum pulvinar urna leo dignissim lorem</a><br />
									<span class="blog-date">On : October 30, 2013</span>
								</li>
								<li>
									<a href="#">
									<img width="70" height="60" src="uploads/3-70x60.jpg" class="alignleft wp-post-image" alt="Aenean dignissim dignissim lorem pellentesque felis risus" /></a>
									<a href="#">Aenean dignissim dignissim lorem pellentesque felis risus</a><br />
									<span class="blog-date">On : September 25, 2013</span>
								</li>
							</ul>
						</div> 
					</div>
				</div>
			</div><!-- /.footer-widget-wrapper -->
		</section><!-- #footer_widgets -->
		<footer id="footer">
			<div class="container cleafix">
				<p class="pull-left">Copyright 2013, All Rights Reserved by <a href="http://themeforest.net/user/minimalthemes/portfolio">minimalthemes</a></p>
				<div class="pull-right">
					<ul class="footer-social">
						<li><a href="http://www.facebook.com/" title="Facebook"><i class="icon-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/" title="Twitter"><i class="icon-twitter"></i></a></li>
						<li><a href="http://feeds.feedburner.com/" title="RSS"><i class="icon-rss"></i></a></li>							
						<li><a href="http://www.plus.google.com/" title="Google Plus"><i class="icon-google-plus"></i></a></li>														
					</ul>
				</div>
			</div>
		</footer>
	</div><!-- .container-full -->
	<script type="text/javascript">
		jQuery(document).ready(function(){
		// Tab contents = .inside
			var tag_cloud_class = '#tagcloud';
			//Fix for tag clouds - unexpected height before .hide()
			var tag_cloud_height = jQuery( '#tagcloud').height();
			jQuery( '.inside ul li:last-child').css( 'border-bottom','0px' ); // remove last border-bottom from list in tab content
			jQuery( '.realTabs').each(function(){
				jQuery(this).children( 'li').children( 'a:first').addClass( 'selected' ); // Add .selected class to first tab on load
			});
			jQuery( '.inside > *').hide();
			jQuery( '.inside > *:first-child').show();
			jQuery( '.realTabs li a').click(function(evt){ // Init Click funtion on Tabs
				var clicked_tab_ref = jQuery(this).attr( 'href' ); // Strore Href value
				jQuery(this).parent().parent().children( 'li').children( 'a').removeClass( 'selected' ); //Remove selected from all tabs
				jQuery(this).addClass( 'selected' );
				jQuery(this).parent().parent().parent().children( '.inside').children( '*').hide();
				jQuery( '.inside ' + clicked_tab_ref).fadeIn(500);
				evt.preventDefault();
			});
		});
	</script>	
	<script type='text/javascript' src="{{ asset('pengunjung/js/jquery.form.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/jpages.js') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/library/bootstrap/js/bootstrap.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/jquery.jcarousel.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/jquery.flexslider.js') }}"></script>
	
	<script type='text/javascript' src="{{ asset('pengunjung/js/jquery.placeholder.js') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/jquery.selectbox.js') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/map-highlight.js') }}"></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var slide = {"start":"1","interval":"5000"};
		/* ]]> */
	</script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/real-expert.js') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/selectivizr.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('pengunjung/js/respond.min.js') }}"></script>
	@yield('script')
	
</body>
</html>