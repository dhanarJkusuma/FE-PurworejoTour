@extends('layouts.front')

@section('content')

<body>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end-->
    <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
      <!-- Start Switcher-->
      <div class="switcher-wrapper">
        <div class="demo_changer">
          <div class="demo-icon color_primary"><i class="fa fa-cog fa-spin fa-2x"></i></div>
          <div class="form_holder">
            <div class="row">
              <div class="col-xs-12">
                <div class="predefined_styles">
                  <div class="skin-theme-switcher">
                    <h4>Color</h4><a href="javascript:void(0);" data-switchcolor="color1" style="background-color:#df0001;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color2" style="background-color:#86a800;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color3" style="background-color:#00adb4;" class="styleswitch"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end switcher-->
      <div class="cd-main">
        <div class="wrap-content cd-section cd-selected">
          <header class="header">
            <!-- <div class="top-header">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="top-header__link bg-primary">
                      <div class="top-header__wrap-link">top headlines<i class="icon fa fa-caret-right"></i></div>
                    </div>
                    <div class="top-header__ticker">
                      <ul id="myUl">
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">Uber offers $29m 'safe ride' settlement</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">The robot that camouflages itself</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">Luxury cars at the Detroit auto show</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">Uber offers $29m 'safe ride' settlement</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">The robot that camouflages itself</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">Luxury cars at the Detroit auto show</a><i class="icon fa fa-adjust"></i></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="header-main">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <ul class="social-links list-inline">
                      <li><a href="twitter.com" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
                      <li><a href="facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
                      <li><a href="instagram.com" class="social-links__item_link"><i class="icon fa fa-instagram"></i></a></li>
                      <li><a href="linkedin.com" class="social-links__item_link"><i class="icon fa fa-linkedin"></i></a></li>
                      <li><a href="pinterest.com" class="social-links__item_link"><i class="icon fa fa-pinterest-p"></i></a></li>
                      <li><a href="youtube.com" class="social-links__item_link"><i class="icon fa fa-youtube-play"></i></a></li>
                      <li><a href="rss.com" class="social-links__item_link"><i class="icon fa fa-rss"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-md-4"><a href="home.html" class="logo"><img src="assets/media/general/logo_mod-a.png" alt="Logo" class="logo__img img-responsive center-block"/></a></div>
                  <div class="col-md-4">
                    <div class="header-main__links"><a href="home.html" class="header-main__links-item">Sign In</a> or<a href="home.html" class="header-main__links-item"> Register</a><a href="#fakelink" class="search-open"><i class="icon pe-7s-search"></i></a><a href="#cd-nav" class="trigger cd-nav-trigger"><i class="icon pe-7s-menu"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div class="wrap-nav">
            <nav class="navbar yamm">
              <div id="navbar-collapse-1" class="navbar-collapse collapse">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12">
                      <ul class="nav navbar-nav">
                        <li><a href="home.html">All pages</a>

                            <ul class="dropdown-menu">


                            <li><a href="home.html">HOMEPAGE </a>
                              <ul class="dropdown-menu">
                               <li><a href="home.html">HOMEPAGE 1</a></li>
                              <li><a href="home-2.html">HOMEPAGE 2</a></li>
                              <li><a href="home-3.html">HOMEPAGE 3</a></li>
                             </ul>
                            </li>


                                <li><a href="category.html">NEWS </a>
                              <ul class="dropdown-menu">
                                   <li><a href="category.html">Blog page</a></li>
                               <li><a href="news_details-1.html">news details 1</a></li>
                              <li><a href="news_details-2.html">news details 2</a></li>
                              <li><a href="news_details-3.html">news details 3</a></li>
                             </ul>
                            </li>


                                <li><a href="about.html">pages </a>
                              <ul class="dropdown-menu">
                               <li><a href="about.html">ABOUT</a></li>
                              <li><a href="contacts.html">CONTACT</a></li>
                              <li><a href="typography.html">typography</a></li>
                             </ul>
                            </li>



                          </ul>
                        </li>
                        <li class="yamm-fw"><a href="home.html">Health</a>
                          <ul class="dropdown-menu">
                            <li>
                              <div class="yamm-content">
                                <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <ul class="list list-mark-1 list-mark-1_mod-a">
                                      <li><a href="category.html">Asia & europe</a></li>
                                      <li><a href="category.html">festival games</a></li>
                                      <li><a href="category.html">world organizations</a></li>
                                      <li><a href="category.html">africa & middle east</a></li>
                                      <li><a href="category.html">pakistan & india</a></li>
                                      <li><a href="category.html">usa & canada</a></li>
                                    </ul>
                                  </div>
                                  <div class="col-md-4 col-sm-6">
                                    <article class="post post-4 post-4_mod-a clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/360x280/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x280/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
                                        </div>
                                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">38 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-4">Entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">4</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">91</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incid magna aliqua enim</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li class="yamm-fw"><a href="home.html">technology</a>
                          <ul class="dropdown-menu">
                            <li>
                              <div class="yamm-content">
                                <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <ul class="list list-mark-1 list-mark-1_mod-a">
                                      <li><a href="category.html">Asia & europe</a></li>
                                      <li><a href="category.html">festival games</a></li>
                                      <li><a href="category.html">world organizations</a></li>
                                      <li><a href="category.html">africa & middle east</a></li>
                                      <li><a href="category.html">pakistan & india</a></li>
                                      <li><a href="category.html">usa & canada</a></li>
                                    </ul>
                                  </div>
                                  <div class="col-md-4 col-sm-6">
                                    <article class="post post-4 post-4_mod-a clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/360x280/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x280/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
                                        </div>
                                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">38 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-4">Entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">4</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">91</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incid magna aliqua enim</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li class="yamm-fw"><a href="home.html">politics</a>
                          <ul class="dropdown-menu">
                            <li>
                              <div class="yamm-content">
                                <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <ul class="list list-mark-1 list-mark-1_mod-a">
                                      <li><a href="category.html">Asia & europe</a></li>
                                      <li><a href="category.html">festival games</a></li>
                                      <li><a href="category.html">world organizations</a></li>
                                      <li><a href="category.html">africa & middle east</a></li>
                                      <li><a href="category.html">pakistan & india</a></li>
                                      <li><a href="category.html">usa & canada</a></li>
                                    </ul>
                                  </div>
                                  <div class="col-md-4 col-sm-6">
                                    <article class="post post-4 post-4_mod-a clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/360x280/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x280/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
                                        </div>
                                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">38 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-4">Entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">4</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">91</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incid magna aliqua enim</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li class="yamm-fw"><a href="home.html">entertainment</a>
                          <ul class="dropdown-menu">
                            <li>
                              <div class="yamm-content">
                                <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <ul class="list list-mark-1 list-mark-1_mod-a">
                                      <li><a href="category.html">Asia & europe</a></li>
                                      <li><a href="category.html">festival games</a></li>
                                      <li><a href="category.html">world organizations</a></li>
                                      <li><a href="category.html">africa & middle east</a></li>
                                      <li><a href="category.html">pakistan & india</a></li>
                                      <li><a href="category.html">usa & canada</a></li>
                                    </ul>
                                  </div>
                                  <div class="col-md-4 col-sm-6">
                                    <article class="post post-4 post-4_mod-a clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/360x280/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x280/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
                                        </div>
                                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">38 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-4">Entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">4</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">91</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incid magna aliqua enim</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li class="yamm-fw "><a href="home.html">lifestyle</a>
                          <ul class="dropdown-menu">
                            <li>
                              <div class="yamm-content">
                                <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <ul class="list list-mark-1 list-mark-1_mod-a">
                                      <li><a href="category.html">Asia & europe</a></li>
                                      <li><a href="category.html">festival games</a></li>
                                      <li><a href="category.html">world organizations</a></li>
                                      <li><a href="category.html">africa & middle east</a></li>
                                      <li><a href="category.html">pakistan & india</a></li>
                                      <li><a href="category.html">usa & canada</a></li>
                                    </ul>
                                  </div>
                                  <div class="col-md-4 col-sm-6">
                                    <article class="post post-4 post-4_mod-a clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/360x280/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x280/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
                                        </div>
                                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">38 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-4">Entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">4</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">91</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incid magna aliqua enim</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li class="yamm-fw"><a href="home.html">Sports</a>
                          <ul class="dropdown-menu">
                            <li>
                              <div class="yamm-content">
                                <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <ul class="list list-mark-1 list-mark-1_mod-a">
                                      <li><a href="category.html">Asia & europe</a></li>
                                      <li><a href="category.html">festival games</a></li>
                                      <li><a href="category.html">world organizations</a></li>
                                      <li><a href="category.html">africa & middle east</a></li>
                                      <li><a href="category.html">pakistan & india</a></li>
                                      <li><a href="category.html">usa & canada</a></li>
                                    </ul>
                                  </div>
                                  <div class="col-md-4 col-sm-6">
                                    <article class="post post-4 post-4_mod-a clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/360x280/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x280/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
                                        </div>
                                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">38 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-4">Entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">4</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">91</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incid magna aliqua enim</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li class="yamm-fw" ><a href="home.html">travel</a>
                          <ul class="dropdown-menu" >
                            <li>
                              <div class="yamm-content">
                                <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <ul class="list list-mark-1 list-mark-1_mod-a">
                                      <li><a href="category.html">Asia & europe</a></li>
                                      <li><a href="category.html">festival games</a></li>
                                      <li><a href="category.html">world organizations</a></li>
                                      <li><a href="category.html">africa & middle east</a></li>
                                      <li><a href="category.html">pakistan & india</a></li>
                                      <li><a href="category.html">usa & canada</a></li>
                                    </ul>
                                  </div>
                                  <div class="col-md-4 col-sm-6">
                                    <article class="post post-4 post-4_mod-a clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/360x280/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x280/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
                                        </div>
                                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">38 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-4">Entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">4</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">91</a></span></div>
                                      </div>
                                    </article>
                                    <article class="post post-3 post-3_mod-f clearfix">
                                      <div class="entry-media"><a href="assets/media/content/post/100x80/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x80/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                                      <div class="entry-main">
                                        <div class="entry-header">
                                          <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incid magna aliqua enim</a></h2>
                                        </div>
                                        <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="header-search">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                      <div class="navbar-search">
                        <form class="search-global">
                          <input type="text" placeholder="Type to search" autocomplete="off" name="s" value="" class="search-global__input"/>
                          <button class="search-global__btn"><i class="icon fa fa-search"></i></button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
              </div>
            </nav>
            <div id="main-slider" data-slider-width="100%" data-slider-height="750" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro">
              <div class="sp-slides">
                <!-- Slide 1-->
                <div class="sp-slide"><img src="assets/media/content/main-slider/1.jpg" alt="slider" class="sp-image"/>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                    <h2 class="main-slider__title">Adieusm tempor incidunt dolore <br>sed magna enim</h2>
                  </div>
                  <div data-width="100%" data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="1700" data-hide-delay="400" class="sp-layer"><a href="blog-1.html" class="main-slider__link bg-3 btn btn-xs btn-effect">lifestyle</a></div>
                  <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="800" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
                    <div class="main-slider-meta"><span class="main-slider-meta__item">february 30, 2016</span><span class="main-slider-meta__item"><i class="icon pe-7s-comment"></i>108</span></div>
                  </div>
                </div>
                <!-- Slide 2-->
                <div class="sp-slide"><img src="assets/media/content/main-slider/1.jpg" alt="slider" class="sp-image"/>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                    <h2 class="main-slider__title">Adieusm tempor incidunt dolore <br>sed magna enim</h2>
                  </div>
                  <div data-width="100%" data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="1700" data-hide-delay="400" class="sp-layer"><a href="blog-1.html" class="main-slider__link bg-3 btn btn-xs btn-effect">lifestyle</a></div>
                  <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="800" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
                    <div class="main-slider-meta"><span class="main-slider-meta__item">february 30, 2016</span><span class="main-slider-meta__item"><i class="icon pe-7s-comment"></i>108</span></div>
                  </div>
                </div>
                <!-- Slide 3-->
                <div class="sp-slide"><img src="assets/media/content/main-slider/1.jpg" alt="slider" class="sp-image"/>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                    <h2 class="main-slider__title">Adieusm tempor incidunt dolore <br>sed magna enim</h2>
                  </div>
                  <div data-width="100%" data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="1700" data-hide-delay="400" class="sp-layer"><a href="blog-1.html" class="main-slider__link bg-3 btn btn-xs btn-effect">lifestyle</a></div>
                  <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="800" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
                    <div class="main-slider-meta"><span class="main-slider-meta__item">february 30, 2016</span><span class="main-slider-meta__item"><i class="icon pe-7s-comment"></i>108</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <section class="section-type-a wow">
                  <div class="wrap-title-bg">
                    <h2 class="ui-title-bg">Latest from categories</h2>
                  </div>
                  <div data-min480="1" data-min768="2" data-min992="2" data-min1200="4" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                    <article class="post post-1 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/285x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/1.jpg" alt="Foto" class="img-responsive"/></a>
                        <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
                      </div><span class="label bg-1">politics</span>
                      <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">feb 30, 2016</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>62</span></div>
                    </article>
                    <article class="post post-1 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/285x300/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/2.jpg" alt="Foto" class="img-responsive"/></a>
                        <h2 class="entry-title">elit sed eiusmod tempor</h2>
                      </div><span class="label bg-2">technology</span>
                      <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">feb 30, 2016</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>24</span></div>
                    </article>
                    <article class="post post-1 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/285x300/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/3.jpg" alt="Foto" class="img-responsive"/></a>
                        <h2 class="entry-title">dolore magna aliqua Ut enim</h2>
                      </div><span class="label bg-5">world</span>
                      <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">feb 30, 2016</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>47</span></div>
                    </article>
                    <article class="post post-1 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/285x300/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/4.jpg" alt="Foto" class="img-responsive"/></a>
                        <h2 class="entry-title">ullamco laboris nisi aliquip</h2>
                      </div><span class="label bg-7">health</span>
                      <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">feb 30, 2016</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>85</span></div>
                    </article>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <div class="section-type-c wow">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <section class="section-area">
                    <h2 class="ui-title-block"><span class="ui-title-block__subtitle">Explore the Top</span><span class="text-uppercase">news makers</span></h2>
                    <ul class="nav nav-tabs">
                      <li class="tabs-label">Filter Content by</li>
                      <li class="active"><a href="#tab-1" data-toggle="tab">Latest</a></li>
                      <li><a href="#tab-2" data-toggle="tab">Previous Week</a></li>
                      <li><a href="#tab-3" data-toggle="tab">HOT articles</a></li>
                      <li><a href="#tab-4" data-toggle="tab">highest rated</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="tab-1" class="tab-pane fade in active">
                        <div class="row">
                          <div class="col-md-6">
                            <article class="post post-2 post-2_mod-d clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/360x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x300/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco laboris onsequat duis aute irue dolorin voluptate velit esse cillum ...</p>
                                </div>
                                <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article class="post post-3 post-3_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsekuat duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-7">health</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">45</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">81</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/4.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">sports</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">48</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-12">technology</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                      <div id="tab-2" class="tab-pane fade">
                        <div class="row">
                          <div class="col-md-6">
                            <article class="post post-2 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/360x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x300/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco laboris onsequat duis aute irue dolorin voluptate velit esse cillum ...</p>
                                </div>
                                <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsekuat duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-7">health</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">45</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">81</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/4.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">sports</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">48</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-12">technology</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                      <div id="tab-3" class="tab-pane fade">
                        <div class="row">
                          <div class="col-md-6">
                            <article class="post post-2 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/360x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x300/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco laboris onsequat duis aute irue dolorin voluptate velit esse cillum ...</p>
                                </div>
                                <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsekuat duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-7">health</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">45</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">81</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/4.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">sports</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">48</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-12">technology</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                      <div id="tab-4" class="tab-pane fade">
                        <div class="row">
                          <div class="col-md-6">
                            <article class="post post-2 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/360x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x300/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco laboris onsequat duis aute irue dolorin voluptate velit esse cillum ...</p>
                                </div>
                                <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsekuat duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-7">health</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">45</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">81</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/4.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">sports</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">48</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 clearfix">
                              <div class="entry-media"><a href="assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-12">technology</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-md-4">
                  <aside class="sidebar">
                    <section class="widget">
                      <h2 class="widget-title ui-title-inner text-right">follow us</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <ul class="list-subscription list-unstyled">
                          <li class="list-subscription__item bg-11"><span class="list-subscription__name">Rss</span><span class="list-subscription__number">164.983</span> followers<a href="rss.com" class="list-subscription__link"><i class="icon fa fa-rss"></i></a></li>
                          <li class="list-subscription__item bg-8"><span class="list-subscription__name">TW</span><span class="list-subscription__number">714,967</span> followers<a href="twitter.com" class="list-subscription__link"><i class="icon fa fa-twitter"></i></a></li>
                          <li class="list-subscription__item bg-9"><span class="list-subscription__name">FB</span><span class="list-subscription__number">250,642</span> likes<a href="facebook.com" class="list-subscription__link"><i class="icon fa fa-facebook"></i></a></li>
                          <li class="list-subscription__item bg-10"><span class="list-subscription__name">yt</span><span class="list-subscription__number">920,497</span> subscribers<a href="youtube.com" class="list-subscription__link"><i class="icon fa fa-youtube-play"></i></a></li>
                        </ul>
                      </div>
                    </section>
                    <div class="widget"><a href="home.html" class="banner"><img src="assets/media/content/banners/1.jpg" alt="banner" class="img-responsive center-block"></a></div>
                    <section class="widget">
                      <h2 class="widget-title ui-title-inner text-right">stay updated</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <p>Sign up for our newsletter to receive latest news as it happenes in your inbox.</p>
                        <form class="form-subscribe">
                          <div class="form-group has-feedback">
                            <input type="email" placeholder="your email address" class="form-control">
                            <button class="icon pe-7s-mail form-control-feedback"></button>
                          </div>
                        </form>
                      </div>
                    </section>
                  </aside>
                </div>
              </div>
            </div>
          </div>
          <section class="section-type-a">
            <div class="wrap-title-bg">
              <h2 class="ui-title-bg">today’s news trend</h2>
            </div>
            <div data-jarallax="{&quot;type&quot;: &quot;scroll-opacity&quot;, &quot;speed&quot;: &quot;.2&quot;}" style="background-image: url(assets/media/content/bg/1.jpg)" class="section-default section-bg section-bg_dark jarallax">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="section__inner">
                      <div id="slider-1" class="slider-pro slider-thumbnails">
                        <div class="sp-slides">
                          <div class="sp-slide">
                            <article class="post post-2 post-2_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                                  </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-slide">
                            <article class="post post-2 post-2_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                                  </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-slide">
                            <article class="post post-2 post-2_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                                  </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-slide">
                            <article class="post post-2 post-2_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                                  </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-slide">
                            <article class="post post-2 post-2_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                                  </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-slide">
                            <article class="post post-2 post-2_mod-a clearfix">
                              <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                                  </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                  <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                                </div>
                              </div>
                            </article>
                          </div>
                        </div>
                        <div class="sp-thumbnails">
                          <div class="sp-thumbnail">
                            <article class="post post-2 post-2_mod-b clearfix">
                              <div class="entry-media"><img src="assets/media/content/post-slider/thumb/1.jpg" alt="Foto" class="img-responsive"/><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-thumbnail">
                            <article class="post post-2 post-2_mod-b clearfix">
                              <div class="entry-media"><img src="assets/media/content/post-slider/thumb/2.jpg" alt="Foto" class="img-responsive"/><span class="label bg-5">world</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-thumbnail">
                            <article class="post post-2 post-2_mod-b clearfix">
                              <div class="entry-media"><img src="assets/media/content/post-slider/thumb/3.jpg" alt="Foto" class="img-responsive"/><span class="label bg-13">sports</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-thumbnail">
                            <article class="post post-2 post-2_mod-b clearfix">
                              <div class="entry-media"><img src="assets/media/content/post-slider/thumb/1.jpg" alt="Foto" class="img-responsive"/><span class="label bg-6">travel</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-thumbnail">
                            <article class="post post-2 post-2_mod-b clearfix">
                              <div class="entry-media"><img src="assets/media/content/post-slider/thumb/2.jpg" alt="Foto" class="img-responsive"/><span class="label bg-5">world</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                              </div>
                            </article>
                          </div>
                          <div class="sp-thumbnail">
                            <article class="post post-2 post-2_mod-b clearfix">
                              <div class="entry-media"><img src="assets/media/content/post-slider/thumb/3.jpg" alt="Foto" class="img-responsive"/><span class="label bg-13">sports</span>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="section-downloads section-downloads_mod-a wow">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-2">
                  <div class="downloads downloads_mod-a section__inner clearfix">
                    <div class="downloads__wrap-text">
                      <h2 class="downloads__title ui-title-block"><span class="ui-title-block__subtitle">Stay Updated With News</span><span class="text-uppercase">ANYtime anywhere</span></h2>
                      <div class="downloads__info">get free mobile app & enjoy reading news!</div>
                    </div>
                    <div class="downloads__btns-group"><a href="home.html" class="downloads__btn"><i class="icon fa fa-apple"></i>for Apple iOS</a><a href="home.html" class="downloads__btn"><i class="icon fa fa-android"></i>for Apple iOS</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-default">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-6 wow">
                      <div class="title-category clearfix">
                        <h2 class="title-category__title ui-title-inner color-4">entertainment</h2><span class="title-category__category">fashion, movies, ...</span>
                      </div>
                      <div class="decor-right bg-4"></div>
                      <article class="post post-2 post-2_mod-c clearfix">
                        <div class="entry-media"><a href="assets/media/content/post/360x240/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x240/1.jpg" alt="Foto" class="img-responsive"/></a>
                        </div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title text-uppercase">Incididunt labore et magna</h2>
                          </div>
                          <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                          <div class="entry-content">
                            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim ...</p>
                          </div>
                          <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-6 wow">
                      <div class="title-category clearfix">
                        <h2 class="title-category__title ui-title-inner color-5">world news</h2><span class="title-category__category">Asia, europe, ...</span>
                      </div>
                      <div class="decor-right bg-5"></div>
                      <article class="post post-2 post-2_mod-c clearfix">
                        <div class="entry-media"><a href="assets/media/content/post/360x240/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x240/2.jpg" alt="Foto" class="img-responsive"/></a>
                        </div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title text-uppercase">dolor amt elit sed tempor</h2>
                          </div>
                          <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                          <div class="entry-content">
                            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim ...</p>
                          </div>
                          <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                        </div>
                      </article>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section-type-d wow"><a href="home.html" class="banner"><img src="assets/media/content/banners/2.jpg" alt="banner" class="img-responsive center-block"></a></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 wow">
                      <article class="post post-3 post-3_mod-c clearfix">
                        <div class="entry-media"><a href="assets/media/content/post/100x100/6.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/6.jpg" alt="Foto" class="img-responsive"/></a></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                          </div>
                          <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                        </div>
                      </article>
                      <article class="post post-3 post-3_mod-c clearfix">
                        <div class="entry-media"><a href="assets/media/content/post/100x100/8.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/8.jpg" alt="Foto" class="img-responsive"/></a></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                          </div>
                          <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                        </div>
                      </article>
                      <article class="post post-3 post-3_mod-c clearfix">
                        <div class="entry-media"><a href="assets/media/content/post/100x100/10.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/10.jpg" alt="Foto" class="img-responsive"/></a></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                          </div>
                          <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">78</a></span></div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-6 wow">
                      <article class="post post-3 post-3_mod-c clearfix">
                        <div class="entry-media"><a href="assets/media/content/post/100x100/7.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/7.jpg" alt="Foto" class="img-responsive"/></a></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                          </div>
                          <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">51</a></span></div>
                        </div>
                      </article>
                      <article class="post post-3 post-3_mod-c clearfix">
                        <div class="entry-media"><a href="assets/media/content/post/100x100/9.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/9.jpg" alt="Foto" class="img-responsive"/></a></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nasek euat duis</a></h2>
                          </div>
                          <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">14</a></span></div>
                        </div>
                      </article>
                      <article class="post post-3 post-3_mod-c clearfix">
                        <div class="entry-media"><a href="assets/media/content/post/100x100/11.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/11.jpg" alt="Foto" class="img-responsive"/></a></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit</a></h2>
                          </div>
                          <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">3</a></span></div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <aside class="sidebar">
                    <section class="widget wow">
                      <h2 class="widget-title ui-title-inner text-right">categories</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <ul class="list list-mark-1 list-mark-1_mod-a">
                          <li><a href="category.html">fashion & lifestyle</a></li>
                          <li><a href="category.html">World politics</a></li>
                          <li><a href="category.html">entertainment News</a></li>
                          <li><a href="category.html">music & videos</a></li>
                          <li><a href="category.html">fun & funny moments</a></li>
                        </ul>
                      </div>
                    </section>
                    <section class="widget wow">
                      <h2 class="widget-title ui-title-inner text-right">Latest videos</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <div id="accordion" class="panel-group acc-type-a acc-type-a_mod-a">
                          <div class="panel panel-default">
                            <div id="vi-ac_1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                <iframe width="100%" height="240" src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1" frameborder="0" allowfullscreen></iframe>
                              </div>
                            </div>
                            <div class="panel-heading">
                              <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#vi-ac_1"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Journey into west sea</span><span class="acc-type-a__author">BY anderson</span></a></div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div id="vi-ac_2" class="panel-collapse collapse">
                              <div class="panel-body">
                                <iframe width="100%" height="240" src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1" frameborder="0" allowfullscreen></iframe>
                              </div>
                            </div>
                            <div class="panel-heading">
                              <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#vi-ac_2"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Aliquic exea comod rureduis</span><span class="acc-type-a__author">BY sofia</span></a></div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div id="vi-ac_3" class="panel-collapse collapse">
                              <div class="panel-body">
                                <iframe width="100%" height="240" src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1" frameborder="0" allowfullscreen></iframe>
                              </div>
                            </div>
                            <div class="panel-heading">
                              <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#vi-ac_3"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Dolore magna aliqua ut enim nim</span><span class="acc-type-a__author">BY clarkson</span></a></div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div id="vi-ac_4" class="panel-collapse collapse">
                              <div class="panel-body">
                                <iframe width="100%" height="240" src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1" frameborder="0" allowfullscreen></iframe>
                              </div>
                            </div>
                            <div class="panel-heading">
                              <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#vi-ac_4"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Slamco laboris nisi ute aliquip</span><span class="acc-type-a__author">BY zedan</span></a></div>
                            </div>
                          </div>
                        </div>
                        <div class="text-right"><a href="home.html" class="acc-type-a__link btn-link">all videos</a></div>
                      </div>
                    </section>
                  </aside>
                </div>
              </div>
            </div>
          </div>
          <div class="container wow">
            <div class="row">
              <div class="col-xs-12">
                <section class="section-type-c">
                  <div class="wrap-title-bg">
                    <h2 class="ui-title-bg">editor’s pick</h2>
                  </div>
                  <div data-min480="1" data-min768="2" data-min992="4" data-min1200="4" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                    <article class="post post-4 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/285x300/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title">Lorem ipsum dolor sit amet sed do eiusmod tempor</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sander</a></span></div>
                      </div>
                    </article>
                    <article class="post post-4 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/285x300/6.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/6.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title">elit sed eiusmod tempor incididunt labore et</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link">  adam cowie</a></span></div>
                      </div>
                    </article>
                    <article class="post post-4 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/285x300/7.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/7.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title">dolore magna aliqua Ut enim Lorem ipsum dolor sit amet</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link">  thomas ken</a></span></div>
                      </div>
                    </article>
                    <article class="post post-4 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/285x300/8.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/8.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title">ullamco laboris nisi aliquip exercitation ullamco</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link">  saler ricky</a></span></div>
                      </div>
                    </article>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <div class="section-type-g wow">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <article class="post post-3 post-3_mod-d clearfix">
                    <div class="entry-media"><a href="assets/media/content/post/100x100/12.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/12.jpg" alt="Foto" class="img-responsive"/></a></div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit ipsum dolor sit amep consectetur elit ...</a></h2>
                      </div>
                      <div class="entry-meta"><span class="category color-13">Sports</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">47</a></span></div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <article class="post post-3 post-3_mod-d clearfix">
                    <div class="entry-media"><a href="assets/media/content/post/100x100/13.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/13.jpg" alt="Foto" class="img-responsive"/></a></div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h2 class="entry-title"><a href="news_details-1.html">Aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate ...</a></h2>
                      </div>
                      <div class="entry-meta"><span class="category color-2">technology</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">31</a></span></div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <article class="post post-3 post-3_mod-d clearfix">
                    <div class="entry-media"><a href="assets/media/content/post/100x100/14.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/14.jpg" alt="Foto" class="img-responsive"/></a></div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam ...</a></h2>
                      </div>
                      <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">74</a></span></div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <article class="post post-3 post-3_mod-d clearfix">
                    <div class="entry-media"><a href="assets/media/content/post/100x100/15.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/15.jpg" alt="Foto" class="img-responsive"/></a></div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h2 class="entry-title"><a href="news_details-1.html">Ficia deserunt mollit anim aidu est laborum sed ut erspiciatis unde omnis iste ...</a></h2>
                      </div>
                      <div class="entry-meta"><span class="category color-7">health</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">17</a></span></div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <section class="section-default wow">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="clearfix">
                    <h2 class="ui-title-block"><span class="ui-title-block__subtitle">Read the</span><span class="text-uppercase">Latest Articles</span></h2><a href="category.html" class="btn-link btn-link_under-title">view more articles</a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="wrap-posts">
                    <article class="post post-2 post-2_mod-e clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/360x200/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x200/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-3">lifestyle</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">nostrud sed exercitation dolore ullamco laboris</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                      </div>
                    </article>
                    <article class="post post-2 post-2_mod-e clearfix">
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">Lorem ipsum dolor amtu elit duis sed tempor incididunt</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                      </div>
                      <div class="entry-media"><a href="assets/media/content/post/360x200/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x200/2.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                    </article>
                    <article class="post post-2 post-2_mod-e clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/360x200/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x200/3.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-13">Sports</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">irure dolor nsed ut reprehenderit voluptate velit esse</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                      </div>
                    </article>
                    <article class="post post-2 post-2_mod-e clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/360x200/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x200/4.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-5">world</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">nisi ut aliquip exuead commodo consequat Duis aute</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                      </div>
                    </article>
                    <article class="post post-2 post-2_mod-e clearfix">
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">cupidatat non sed proident sunt mollit anim id est</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                      </div>
                      <div class="entry-media"><a href="assets/media/content/post/360x200/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x200/5.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-7">health</span>
                      </div>
                    </article>
                    <article class="post post-2 post-2_mod-e clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/360x200/6.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x200/6.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-4">entertainment</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">proident sunt inpa culpa qui irure officia deserunt</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="container wow">
            <div class="row">
              <div class="col-xs-12">
                <section class="section-soc-slider">
                  <div class="wrap-title-bg wrap-title-bg_mod-a">
                    <h2 class="ui-title-bg">instagram images<span class="ui-title-bg__subtitle">follow us @ instagram</span></h2>
                  </div>
                  <div data-min480="1" data-min768="5" data-min992="5" data-min1200="5" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel"><a href="assets/media/content/social-slider/1.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/1.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/2.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/2.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/3.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/3.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/4.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/4.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/5.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/5.jpg" alt="foto" class="img-responsive"></a></div>
                </section>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="footer__first-section"><a href="home.html" class="footer__logo"><img src="assets/media/general/logo_mod-b.png" alt="logo" class="img-responsive"></a>
                    <div class="footer__info">Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt labore et dolore magna aliqua.</div>
                    <div class="decor-right decor-right_sm"></div>
                    <div class="footer-contacts">
                      <div class="footer-contacts__item"><i class="icon fa fa-location-arrow"></i>380 Canal Society, Victoria ML 00789</div>
                      <div class="footer-contacts__item"><i class="icon fa fa-phone"></i>0800.123.9876  /  0800.123.9899</div>
                      <div class="footer-contacts__item"><i class="icon fa fa-envelope"></i>contact.us@domain.com</div>
                      <div class="footer-contacts__item"><i class="icon fa fa-print"></i>123.456.0000</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="clearfix">
                    <div class="footer-wrap-section">
                      <section class="footer-section">
                        <h3 class="footer__title ui-title-inner">categories</h3>
                        <div class="decor-right decor-right_sm bg-7"></div>
                        <ul class="footer-list list list-mark-2">
                          <li><a href="category.html">fashion & lifestyle</a></li>
                          <li><a href="category.html">World politics</a></li>
                          <li><a href="category.html">entertainment News</a></li>
                          <li><a href="category.html">music & videos</a></li>
                          <li><a href="category.html">fun & funny moments</a></li>
                          <li><a href="category.html">photography</a></li>
                        </ul>
                      </section>
                      <section class="footer-section">
                        <h3 class="footer__title ui-title-inner">our partners</h3>
                        <div class="decor-right decor-right_sm bg-13"></div>
                        <ul class="footer-list list list-mark-2">
                          <li><a href="category.html">Abc media</a></li>
                          <li><a href="category.html">correspondents</a></li>
                          <li><a href="category.html">Advertise with us</a></li>
                          <li><a href="category.html">terms & conditions</a></li>
                          <li><a href="category.html">work for us</a></li>
                          <li><a href="category.html">general inquiries</a></li>
                        </ul>
                      </section>
                      <section class="footer-section">
                        <h3 class="footer__title ui-title-inner">get Connect</h3>
                        <div class="decor-right decor-right_sm bg-3"></div>
                        <ul class="footer-list list list-mark-2">
                          <li><a href="contacts.html">Contact Us</a></li>
                          <li><a href="category.html">Download apps</a></li>
                          <li><a href="category.html">podcasts</a></li>
                          <li><a href="category.html">newsletter signup</a></li>
                          <li><a href="category.html">breaking news alerts</a></li>
                        </ul>
                      </section>
                    </div>
                  </div>
                  <form class="footer-form">
                    <div class="form-group has-feedback">
                      <input type="email" placeholder="Search any news, article or review ..." class="form-control">
                      <button class="icon pe-7s-search form-control-feedback bg-primary"></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="footer-posts">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <section class="section-area">
                      <h3 class="footer__title ui-title-inner">featured posts</h3>
                      <div class="decor-right decor-right_sm"></div>
                                <article class="post post-3 post-3_mod-b clearfix">
                                  <div class="entry-media"><a href="assets/media/content/post/100x100/16.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/16.jpg" alt="Foto" class="img-responsive"></a></div>
                                  <div class="entry-main">
                                    <div class="entry-header">
                                      <h2 class="entry-title"><a href="news_details-1.html">Equip exea comod rure nsew uat duis ipsum</a></h2>
                                    </div>
                                    <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">34</a></span></div>
                                  </div>
                                </article>
                                <article class="post post-3 post-3_mod-b clearfix">
                                  <div class="entry-media"><a href="assets/media/content/post/100x100/17.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/17.jpg" alt="Foto" class="img-responsive"></a></div>
                                  <div class="entry-main">
                                    <div class="entry-header">
                                      <h2 class="entry-title"><a href="news_details-1.html">Lorem ipsum dolor sit amet elit sed do eiusmod</a></h2>
                                    </div>
                                    <div class="entry-meta"><span class="category color-6">travel</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">16</a></span></div>
                                  </div>
                                </article>
                                <article class="post post-3 post-3_mod-b clearfix">
                                  <div class="entry-media"><a href="assets/media/content/post/100x100/18.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/18.jpg" alt="Foto" class="img-responsive"></a></div>
                                  <div class="entry-main">
                                    <div class="entry-header">
                                      <h2 class="entry-title"><a href="news_details-1.html">Exercitation ullamco laboris nisi ut aliquip ex ea</a></h2>
                                    </div>
                                    <div class="entry-meta"><span class="category color-1">politics</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">89</a></span></div>
                                  </div>
                                </article>
                    </section>
                  </div>
                  <div class="col-md-4">
                    <section class="section-area">
                      <h3 class="footer__title ui-title-inner">twitter feed</h3>
                      <div class="decor-right decor-right_sm"></div>
                      <div class="social-feed">
                        <div class="social-feed__icon fa fa-twitter"></div>
                        <div class="social-feed__inner">
                          <div class="social-feed__content">Elit sed eiusmod tempor incididunt labore dolore magna aliqua enimad</div>
                          <div class="social-feed__footer">
                            <cite><a href="home.html" class="social-feed__author">@newsagency</a></cite>
                            <time datetime="2016-05-03T08:23:11+07:00" class="social-feed__date">2 hours ago</time>
                          </div>
                        </div>
                      </div>
                      <div class="social-feed">
                        <div class="social-feed__icon fa fa-twitter"></div>
                        <div class="social-feed__inner">
                          <div class="social-feed__content">Lorem ipsum dolors amet consectetur elit sed do eiusmod tempor incididunt.</div>
                          <div class="social-feed__footer">
                            <cite><a href="home.html" class="social-feed__author">@newsagency</a></cite>
                            <time datetime="2016-05-03T08:23:11+07:00" class="social-feed__date">2 hours ago</time>
                          </div>
                        </div>
                      </div>
                      <div class="social-feed">
                        <div class="social-feed__icon fa fa-twitter"></div>
                        <div class="social-feed__inner">
                          <div class="social-feed__content">Elit sed eiusmod tempor incididunt labore dolore magna aliqua enimad</div>
                          <div class="social-feed__footer">
                            <cite><a href="home.html" class="social-feed__author">@newsagency</a></cite>
                            <time datetime="2016-05-03T08:23:11+07:00" class="social-feed__date">2 hours ago</time>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="col-md-4">
                    <section class="section-area">
                      <h3 class="footer__title ui-title-inner">recent reviews</h3>
                      <div class="decor-right"></div>
                                <article class="post post-3 post-3_mod-b clearfix">
                                  <div class="entry-media"><a href="assets/media/content/post/100x100/19.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/19.jpg" alt="Foto" class="img-responsive"></a></div>
                                  <div class="entry-main">
                                    <div class="entry-header">
                                      <h2 class="entry-title"><a href="news_details-1.html">Equip exea comod rure nsew uat duis ipsum</a></h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link">  john sina</a></span><span class="entry-meta__item"><span class="rainting"><i class="icon fa fa-star"></i><span class="entry-meta__link">x 4</span></span></span></div>
                                  </div>
                                </article>
                                <article class="post post-3 post-3_mod-b clearfix">
                                  <div class="entry-media"><a href="assets/media/content/post/100x100/20.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/20.jpg" alt="Foto" class="img-responsive"></a></div>
                                  <div class="entry-main">
                                    <div class="entry-header">
                                      <h2 class="entry-title"><a href="news_details-1.html">Lorem ipsum dolor sit amet elit sed do eiusmod</a></h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link">  john sina</a></span><span class="entry-meta__item"><span class="rainting"><i class="icon fa fa-star"></i><span class="entry-meta__link">x 5</span></span></span></div>
                                  </div>
                                </article>
                                <article class="post post-3 post-3_mod-b clearfix">
                                  <div class="entry-media"><a href="assets/media/content/post/100x100/21.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/21.jpg" alt="Foto" class="img-responsive"></a></div>
                                  <div class="entry-main">
                                    <div class="entry-header">
                                      <h2 class="entry-title"><a href="news_details-1.html">Exercitation ullamco laboris nisi ut aliquip ex ea</a></h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link">  john sina</a></span><span class="entry-meta__item"><span class="rainting"><i class="icon fa fa-star"></i><span class="entry-meta__link">x 5</span></span></span></div>
                                  </div>
                                </article>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="footer-bottom__link bg-primary">
                      <div class="footer-bottom__wrap-link">we are social<i class="icon fa fa-caret-right"></i></div>
                    </div>
                    <div class="footer-bottom__inner">
                                <ul class="social-links list-inline">
                                  <li><a href="twitter.com" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
                                  <li><a href="facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
                                  <li><a href="instagram.com" class="social-links__item_link"><i class="icon fa fa-instagram"></i></a></li>
                                  <li><a href="linkedin.com" class="social-links__item_link"><i class="icon fa fa-linkedin"></i></a></li>
                                  <li><a href="pinterest.com" class="social-links__item_link"><i class="icon fa fa-pinterest-p"></i></a></li>
                                  <li><a href="youtube.com" class="social-links__item_link"><i class="icon fa fa-youtube-play"></i></a></li>
                                  <li><a href="rss.com" class="social-links__item_link"><i class="icon fa fa-rss"></i></a></li>
                                </ul>
                    </div>
                    <div class="copyright">© 2016<a href="home.html"> NEWS AGENCY.</a> All rights reserved.</div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!-- end wrap-content-->
        </div>
      </div>
    </div>
    <nav id="cd-nav" class="cd-nav-container"><a href="#0" class="cd-close-nav">Close</a>
      <nav class="sidebar-nav">
        <ul class="sidebar-nav__list list-unstyled">
          <li><a href="#" data-toggle="dropdown">world</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">Health</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">technology</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">politics</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">entertainment</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">lifestyle</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">Sports</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">travel</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- end layout-theme-->



    </nav>


    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <script src="{{URL::asset('assets/js/separate-js/custom.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/3d-bold-navigation/main.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/slider-pro/jquery.sliderPro.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/prettyphoto/jquery.prettyPhoto.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-select/bootstrap-select.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/doubletaptogo.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/news-ticker/js/endlessRiver.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datetimepicker/jquery.datetimepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jarallax/jarallax.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/scrollreveal/scrollreveal.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/classie.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/switcher/js/dmss.js')}}"></script>

@endsection