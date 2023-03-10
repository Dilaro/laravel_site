<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/style/images/favicon.png') }}">
    <title>Hygge</title>
    @vite(['resources/css/bootstrap.min.css', 'resources/css/plugins.css', 'resources/css/style.css', 'resources/css/green.css'])
</head>
<body>
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
<div class="body-wrapper">
    <nav class="navbar navbar-default default">
        <div class="container">
            <div class="navbar-header">
                <div class="basic-wrapper"> <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
                    <div class="navbar-brand"> <a href="index.html"><img src="#" srcset="{{ Vite::asset('resources/style/images/logo.png') }} 1x, {{ Vite::asset('resources/style/images/logo@2x.png') }} 2x" class="logo-light" alt="" /><img src="#" srcset="{{ Vite::asset('resources/style/images/logo-dark.png') }} 1x, {{ Vite::asset('resources/style/images/logo-dark@2x.png') }} 2x" class="logo-dark" alt="" /></a>
                    </div>
                    <!-- /.navbar-brand -->
                </div>
                <!-- /.basic-wrapper -->
            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="current dropdown"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Home <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Home Layout 1</a></li>
                            <li><a href="index2.blade.php">Home Layout 2</a></li>
                            <li><a href="index3.html">Home Layout 3</a></li>
                            <li><a href="index4.html">Home Layout 4</a></li>
                            <li><a href="index5.html">Home Layout 5</a></li>
                            <li><a href="index-all.html">Home Layout All</a></li>
                            <li><a href="animation.html">Scroll Animation</a></li>
                            <li><a href="onepage.html">Onepage Layout</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Sliders <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="slider.html">Fullscreen Slider</a></li>
                            <li><a href="slider2.html">Fullwidth Slider</a></li>
                            <li><a href="slider3.html">Boxed Slider</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Headers <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="header.html">Transparent</a></li>
                            <li><a href="header2.html">Solid</a></li>
                            <li><a href="header3.html">Detailed</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Portfolio <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio2.html">Portfolio 2</a></li>
                            <li><a href="portfolio3.html">Portfolio 3</a></li>
                            <li><a href="portfolio-post.html">Portfolio Post </a></li>
                            <li><a href="portfolio-post2.html">Portfolio Post 2</a></li>
                            <li><a href="portfolio-post3.html">Portfolio Post 3</a></li>
                            <li><a href="portfolio-post4.html">Portfolio Post 4</a></li>
                            <li><a href="portfolio-post5.html">Portfolio Post 5</a></li>
                            <li><a href="portfolio-post6.html">Portfolio Post 6</a></li>
                            <li><a href="portfolio-post7.html">Portfolio Post 7</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog 1</a></li>
                            <li><a href="blog2.html">Blog 2</a></li>
                            <li><a href="blog3.html">Blog 3</a></li>
                            <li><a href="blog4.html">Blog 4</a></li>
                            <li><a href="blog5.html">Blog 5</a></li>
                            <li><a href="blog-post.html">Blog Post</a></li>
                            <li><a href="blog-post2.html">Blog Post 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About 1</a></li>
                            <li><a href="about2.html">About 2</a></li>
                            <li><a href="services.html">Services 1</a></li>
                            <li><a href="services2.html">Services 2</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contact2.html">Contact 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Features <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="charts.html">Charts</a></li>
                            <li><a href="pricing.html">Pricing Tables</a></li>
                            <li><a href="headings.html">Headings</a></li>
                            <li><a href="disqus.html">Disqus</a></li>
                            <li><a href="icon-lulu.html">Lulu Icons</a></li>
                            <li><a href="icon-budicon.html">Budicon Icons</a></li>
                            <li><a href="icon-fontello.html">Fontello Icons</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->

    <div class="tp-fullscreen-container revolution">
        <div class="tp-fullscreen">
            <ul>
                <li data-transition="fade"> <img src="{{ Vite::asset('resources/style/images/art/slider-bg1.jpg') }}"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                    <div class="tp-caption large sfb text-center" data-x="center" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Quality. Flexibility. Customizability</div>
                    <div class="tp-caption medium sfb text-center" data-x="center" data-y="348" data-speed="900" data-start="1500" data-easing="Sine.easeOut">great solution for your business, portfolio, blog or any other purpose website</div>
                    <div class="tp-caption sfb" data-x="center" data-y="420" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="#" class="btn btn-large btn-border">Purchase Now</a></div>
                </li>
                <li data-transition="fade"> <img src="{{ Vite::asset('resources/style/images/art/slider-bg2.jpg') }}"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                    <div class="tp-caption large sfl text-center" data-x="center" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Build your professional website</div>
                    <div class="tp-caption medium sfr text-center" data-x="center" data-y="343" data-speed="900" data-start="1500" data-easing="Sine.easeOut">Create a unique website easily with the help of tons of features</div>
                    <div class="tp-caption sfb" data-x="center" data-y="420" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="#" class="btn btn-large">View Features</a></div>
                </li>
                <li data-transition="fade"> <img src="{{ Vite::asset('resources/style/images/art/slider-bg3.jpg') }}"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                    <div class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Free updates & <br />
                        premium support</div>
                    <div class="tp-caption medium sfr" data-x="30" data-y="403" data-speed="900" data-start="1500" data-easing="Sine.easeOut">You will have access to all updates and free support</div>
                    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="#" class="btn btn-large">Purchase Now</a></div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.tp-fullscreen-container -->
    </div>
    <!-- /.revolution -->

    <div class="light-wrapper">
        <div class="container inner">
            <div class="headline text-center">
                <h2>Hello! Welcome to Hygge</h2>
                <p class="lead animated-text letters type"> <span>a multipurpose HTML5 template which is suitable for</span> <span class="animated-text-wrapper waiting"> <b class="is-visible">creative agencies</b> <b>personal blogs</b> <b>digital studios</b> <b>or any business owners</b> </span> </p>
            </div>
            <div class="divide30"></div>
            <div class="row services">
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="{{ Vite::asset('resources/style/images/icons/lulu-web-browser.png') }}" alt="" /> </div>
                        <h4>Responsive Layout</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="{{ Vite::asset('resources/style/images/icons/lulu-paint-palette.png') }}" alt="" /> </div>
                        <h4>Color Palette</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="{{ Vite::asset('resources/style/images/icons/lulu-coding.png') }}" alt="" /> </div>
                        <h4>Clear Coding</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
            <div class="divide30"></div>
            <div class="row services">
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="{{ Vite::asset('resources/style/images/icons/lulu-chats.png') }}" alt="" /> </div>
                        <h4>Personal Support</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="{{ Vite::asset('resources/style/images/icons/lulu-tv.png') }}" alt="" /> </div>
                        <h4>Video Support</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="{{ Vite::asset('resources/style/images/icons/lulu-clipboard.png') }}" alt="" /> </div>
                        <h4>Extensive Documentation</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.light-wrapper -->

    <div class="inverse-wrapper inner bp0">
        <div class="container">
            <div class="thin text-center">
                <div class="headline text-center">
                    <h2>Rich layouts & unlimited combinations</h2>
                    <p class="lead">Create a unique website easily with the help of tons of features</p>
                </div>
                <!-- /.headline -->
                <div class="divide30"></div>
                <figure>
                    <img src="{{ Vite::asset('resources/style/images/art/hygge.png') }}" alt="" />
                </figure>
            </div>
            <!-- /.thin -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.inverse-wrapper -->

    <div class="light-wrapper">
        <div class="container inner">
            <div class="section-title text-center">
                <h3>The Product Gallery</h3>
                <p class="lead">awesome products prepared with creative ideas and great design</p>
            </div>
            <div class="cbp-panel">
                <div id="filters-container" class="cbp-filter-container text-center">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
                    <div data-filter=".print" class="cbp-filter-item"> Print </div>
                    <div data-filter=".web" class="cbp-filter-item"> Web Design </div>
                    <div data-filter=".logo" class="cbp-filter-item"> Logo </div>
                    <div data-filter=".motion" class="cbp-filter-item"> Motion </div>
                </div>
                <div id="grid-container" class="cbp">
                    <div class="cbp-item print motion"> <a href="ajax/project1.html" class="cbp-caption cbp-singlePageInline">
                            <div class="cbp-caption-defaultWrap"> <img src="{{ Vite::asset('resources/style/images/art/p1.jpg') }}" alt="" /> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Malesuada Parturient</div>
                                        <div class="cbp-l-caption-desc">Print, Motion</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <!--/.cbp-item -->
                    <div class="cbp-item web logo"> <a href="ajax/project2.html" class="cbp-caption cbp-singlePageInline">
                            <div class="cbp-caption-defaultWrap"> <img src="{{ Vite::asset('resources/style/images/art/p2.jpg') }}" alt="" /> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Tellus Nibh</div>
                                        <div class="cbp-l-caption-desc">Web Design</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <!--/.cbp-item -->
                    <div class="cbp-item print motion"> <a href="ajax/project3.html" class="cbp-caption cbp-singlePageInline">
                            <div class="cbp-caption-defaultWrap"> <img src="{{ Vite::asset('resources/style/images/art/p3.jpg') }}" alt="" /> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Pellentesque Mattis</div>
                                        <div class="cbp-l-caption-desc">Print, Motion</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <!--/.cbp-item -->
                    <div class="cbp-item web print"> <a href="ajax/project4.html" class="cbp-caption cbp-singlePageInline">
                            <div class="cbp-caption-defaultWrap"> <img src="{{ Vite::asset('resources/style/images/art/p4.jpg') }}" alt="" /> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Euismod Pharetra</div>
                                        <div class="cbp-l-caption-desc">Web Design, Print</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <!--/.cbp-item -->
                    <div class="cbp-item motion logo"> <a href="ajax/project5.html" class="cbp-caption cbp-singlePageInline">
                            <div class="cbp-caption-defaultWrap"> <img src="{{ Vite::asset('resources/style/images/art/p5.jpg') }}" alt="" /> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Fringilla Nullam</div>
                                        <div class="cbp-l-caption-desc">Motion</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <!--/.cbp-item -->
                    <div class="cbp-item print motion"> <a href="ajax/project6.html" class="cbp-caption cbp-singlePageInline">
                            <div class="cbp-caption-defaultWrap"> <img src="{{ Vite::asset('resources/style/images/art/p6.jpg') }}" alt="" /> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Pharetra Sem</div>
                                        <div class="cbp-l-caption-desc">Print, Motion</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <!--/.cbp-item -->
                </div>
                <!--/.cbp -->
                <div class="divide30"></div>
                <div class="text-center">
                    <div id="loadMore-container" class=""> <a href="ajax/loadmore.html" class="cbp-l-loadMore-link btn btn-border dark"> <span class="cbp-l-loadMore-defaultText">LOAD MORE</span> <span class="cbp-l-loadMore-loadingText">LOADING...</span> <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span> </a> </div>
                </div>
                <!--/.text-center -->
            </div>
            <!--/.cbp-panel -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->



    <div class="outer-wrap inverse-wrapper">
        <div id="video-wrap" class="video-wrap">
            <video preload="metadata" playsinline autoplay muted loop id="video-office">
                <source src="{{ Vite::asset('resources/style/video/office.mp4') }}" type="video/mp4">
                <source src="{{ Vite::asset('resources/style/video/office.webm') }}" type="video/webm">
            </video>
            <div class="content-overlay container">
                <div class="headline text-center">
                    <h2>Video Parallax</h2>
                    <p class="lead"> For better visualization of your company </p>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.video-wrap -->
    </div>
    <!-- /.inverse-wrapper -->

    <div class="light-wrapper">
        <div class="container inner">
            <div class="section-title text-center">
                <h3>Timeline Blog</h3>
                <p class="lead">display your journal entries in a timeline fashion</p>
            </div>
            <div class="timeline">
                <div class="date-title"> <span>March 2015</span> </div>
                <div class="row">
                    <div class="col-sm-6 timeline-item">
                        <div class="arrow"></div>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-5">
                                    <figure><a href="#">
                                            <div class="text-overlay">
                                                <div class="info"><span>Read More</span></div>
                                            </div>
                                            <img src="{{ Vite::asset('resources/style/images/art/tb1.jpg') }}" alt="" /></a></figure>
                                </div>
                                <!-- /column -->
                                <div class="col-sm-9 col-md-7">
                                    <h4 class="post-title"><a href="#">Curabitur Blandit Tempus</a></h4>
                                    <div class="meta"><span class="date"><a href="#" class="link-effect">30 March 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                    <a href="#" class="more link-effect">Read More ??</a> </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 timeline-item right">
                        <div class="arrow"></div>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-5">
                                    <figure><a href="#">
                                            <div class="text-overlay">
                                                <div class="info"><span>Read More</span></div>
                                            </div>
                                            <img src="{{ Vite::asset('resources/style/images/art/tb2.jpg') }}" alt="" /></a></figure>
                                </div>
                                <!-- /column -->
                                <div class="col-sm-9 col-md-7">
                                    <h4 class="post-title"><a href="#">Mollis Euismod Fringilla</a></h4>
                                    <div class="meta"><span class="date"><a href="#" class="link-effect">22 March 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                    <a href="#" class="more link-effect">Read More ??</a> </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="date-title"> <span>February 2015</span> </div>
                <div class="row">
                    <div class="col-sm-6 timeline-item">
                        <div class="arrow"></div>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-5">
                                    <figure><a href="#">
                                            <div class="text-overlay">
                                                <div class="info"><span>Read More</span></div>
                                            </div>
                                            <img src="{{ Vite::asset('resources/style/images/art/tb5.jpg') }}" alt="" /></a></figure>
                                </div>
                                <!-- /column -->
                                <div class="col-sm-9 col-md-7">
                                    <h4 class="post-title"><a href="#">Dapibus Quam Ligula</a></h4>
                                    <div class="meta"><span class="date"><a href="#" class="link-effect">11 Februay 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                    <a href="#" class="more link-effect">Read More ??</a> </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 timeline-item right">
                        <div class="arrow"></div>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-5">
                                    <figure><a href="#">
                                            <div class="text-overlay">
                                                <div class="info"><span>Read More</span></div>
                                            </div>
                                            <img src="{{ Vite::asset('resources/style/images/art/tb6.jpg') }}" alt="" /></a></figure>
                                </div>
                                <!-- /column -->
                                <div class="col-sm-9 col-md-7">
                                    <h4 class="post-title"><a href="#">Fusce Malesuada Cursus</a></h4>
                                    <div class="meta"><span class="date"><a href="#" class="link-effect">3 February 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                    <a href="#" class="more link-effect">Read More ??</a> </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.timeline -->
        </div>
        <!-- /.container -->

    </div>
    <!-- /.light-wrapper -->

    <div class="white-wrapper">
        <div class="col-image">
            <div class="bg-wrapper col-md-6">
                <div class="bg-holder" style="background-image: url({{ Vite::asset('resources/style/images/art/about.jpg') }});"></div>
            </div>
            <!--/.bg-wrapper -->
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-7 inner-col">
                        <div class="section-title">
                            <h3>About the Company</h3>
                        </div>
                        <p class="lead">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismod.</p>
                        <ul class="progress-list">
                            <li>
                                <p>Strategy <em>90%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 90%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>Project Management <em>80%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 80%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>Programming <em>85%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 85%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>Analytics & Reporting <em>75%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 50%;"></div>
                                </div>
                            </li>
                        </ul>
                        <!-- /.progress-list -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/.container -->
        </div>
        <!--/.col-image -->

    </div>
    <!-- /.white-wrapper -->

    <div class="light-wrapper">
        <div class="container inner">
            <div class="section-title text-center">
                <h3>Process Model</h3>
                <p class="lead">our process on creating awesome projects</p>
            </div>
            <div class="thin3">
                <div class="row circle-wrapper">
                    <div class="col-sm-6 col-md-3">
                        <div class="circle blue-bg">
                            <div class="text">1. Envisioning</div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="circle red-bg">
                            <div class="text">2. Planning</div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="circle green-bg">
                            <div class="text">3. Development</div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="circle yellow-bg">
                            <div class="text">4. Stabilization</div>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!--/.row -->
                <div class="divide30"></div>
                <p class="text-center">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div>
            <!--/.thin -->
        </div>
        <!--/.container -->
    </div>
    <!-- /.light-wrapper -->

    <div class="light-wrapper">
        <div class="container inner">
            <div class="section-title text-center">
                <h3>Meet Our Team</h3>
            </div>
            <div class="row grid-view">
                <div class="col-sm-3 text-center">
                    <figure><img src="{{ Vite::asset('resources/style/images/art/t1.jpg') }}" alt="" /></figure>
                    <h4 class="post-title">Nikolas Brooten</h4>
                    <div class="meta">Sales Manager</div>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo.</p>
                    <ul class="social">
                        <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-s-gplus"></i></a></li>
                    </ul>
                </div>
                <!-- /column -->
                <div class="col-sm-3 text-center">
                    <figure><img src="{{ Vite::asset('resources/style/images/art/t2.jpg') }}" alt="" /></figure>
                    <h4 class="post-title">Coriss Ambady</h4>
                    <div class="meta">Marketing Specialist</div>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros sed posuere quam.</p>
                    <ul class="social">
                        <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /column -->
                <div class="col-sm-3 text-center">
                    <figure><img src="{{ Vite::asset('resources/style/images/art/t3.jpg') }}" alt="" /></figure>
                    <h4 class="post-title">Barclay Widerski</h4>
                    <div class="meta">Computer Engineer</div>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis.</p>
                    <ul class="social">
                        <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-s-github"></i></a></li>
                        <li><a href="#"><i class="icon-s-gplus"></i></a></li>
                    </ul>
                </div>
                <!-- /column -->
                <div class="col-sm-3 text-center">
                    <figure><img src="{{ Vite::asset('resources/style/images/art/t4.jpg') }}" alt="" /></figure>
                    <h4 class="post-title">Elsie Spear</h4>
                    <div class="meta">Strategy Director</div>
                    <p>Maecenas faucibus mollis interdum. Aenean eu leo quam ornare sem lacinia.</p>
                    <ul class="social">
                        <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!--/.container -->
    </div>
    <!-- /.light-wrapper -->

    <footer class="inverse-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="section-title widget-title">Elsewhere</h3>
                    <p>Vestibulum id ligula porta felis euismod semper.</p>
                    <ul class="social">
                        <li><a href="#"><i class="icon-s-rss"></i></a></li>
                        <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-s-forrst"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="section-title widget-title">Subscribe</h3>
                    <p> Cum sociis natoque penatibus et magnis dis parturient.</p>
                    <div class="newsletter-wrapper">
                        <div id="mc_embed_signup2" class="newsletter-form">
                            <form action="http://elemisfreebies.us3.list-manage1.com/subscribe/post?u=ddc180777a163e0f9f66ee014&amp;id=056957de28" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL2" placeholder="Enter email" required="">
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;">
                                    <input type="text" name="b_ddc180777a163e0f9f66ee014_056957de28" value="">
                                </div>
                                <div class="clear">
                                    <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn">
                                </div>
                            </form>
                        </div>
                        <!-- /#mc_embed_signup2 -->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <div class="col-sm-4">
                    <h3 class="section-title widget-title">Tags</h3>
                    <div class="tagcloud"> <a href="#" style="font-size: 9pt;">blogroll</a> <a href="#" style="font-size: 19pt;">daily</a> <a href="#" style="font-size: 9pt;">dialog</a> <a href="#" style="font-size: 9pt;">gallery</a> <a href="#" style="font-size: 10pt;">journal</a> <a href="#" style="font-size: 9pt;">link</a> <a href="#" style="font-size: 12pt;">motion</a> <a href="#" style="font-size: 9pt;">music</a> <a href="#" style="font-size: 20pt;">photo</a> <a href="#" style="font-size: 13pt;">professional</a> <a href="#" style="font-size: 16pt;">quotation</a> <a href="#" style="font-size: 9pt;">show</a> <a href="#" style="font-size: 15pt;">sound</a> </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget"> <img src="{{ Vite::asset('resources/style/images/art/logo.png') }}" data-at2x="{{ Vite::asset('resources/style/images/logo@2x.png') }}" alt="" />
                        <div class="divide20"></div>
                        <p>Aenean lacinia bibendum nulla sed leo posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper metus auctor fringi. Nullam quis risus. </p>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->

                <div class="col-sm-3">
                    <div class="widget">
                        <h3 class="section-title widget-title">Popular Posts</h3>
                        <ul class="post-list">
                            <li>
                                <h6><a href="blog-post.html">Vivamus sagittis lacus vel augue metus</a></h6>
                                <span class="meta date">3th Oct 2012</span> </li>
                            <li>
                                <h6><a href="blog-post.html">Scelerisque nisl consectetur et</a></h6>
                                <span class="meta date">28th Sep 2012</span> </li>
                        </ul>
                        <!-- /.post-list -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->

                <div class="col-sm-3">
                    <div class="widget">
                        <h3 class="section-title widget-title">Get In Touch</h3>
                        <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum.</p>
                        <div class="contact-info"> <i class="icon-location"></i> Moonshine St. 14/05 Light City <br />
                            <i class="icon-phone"></i>+00 (123) 456 78 90 <br />
                            <i class="icon-mail"></i> <a href="first.last@email.com">first.last@email.com</a> </div>
                    </div>
                </div>
                <!-- /column -->

                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="circled">
                            <li><a href="#">Web Design (21)</a></li>
                            <li><a href="#">Photography (19)</a></li>
                            <li><a href="#">Graphic Design (16)</a></li>
                            <li><a href="#">Manipulation (15)</a></li>
                            <li><a href="#">Motion Graphics (12)</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->

                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->

            <hr />
            <p class="copyright pull-left">?? 2015 Hygge. All rights reserved. Theme by <a href="http://elemisfreebies.com">elemis</a>.</p>
            <ul class="footer-menu pull-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- .container -->

    </footer>
    <!-- /footer -->
    <div id="share-bar"></div>
</div>
<!--/.body-wrapper -->
</body>
<script src="{{ Vite::asset('resources/js/app.js') }}"></script>
<script src="{{ Vite::asset('resources/js/jquery.min.js') }}"></script>
<script src="{{ Vite::asset('resources/js/bootstrap.min.js') }}"></script>
<script src="{{ Vite::asset('resources/js/plugins.js') }}"></script>
<script src="{{ Vite::asset('resources/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ Vite::asset('resources/js/scripts.js') }}"></script>
</html>
