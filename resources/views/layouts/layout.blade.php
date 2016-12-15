
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
	============================================ -->
	<title>@yield('title')</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::to('ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::to('ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::to('ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::to('ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ URL::to('ico/favicon.png') }}">

	<!-- Google web fonts
	============================================ -->
    <link href="{{ URL::to('https://fonts.googleapis.com/css?family=Open+Sans:400,700,300') }}" rel="stylesheet" type="text/css">

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap/css/bootstrap.min.css') }}">
	<link href="{{ URL::to('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ URL::to('js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ URL::to('css/themecss/lib.css') }}" rel="stylesheet">
	<link href="{{ URL::to('js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">

	<!-- Theme CSS
	============================================ -->
   	<link href="{{ URL::to('css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/themecss/so-categories.css') }}" rel="stylesheet">
	<link href="{{ URL::to('css/themecss/so-listing-tabs.css') }}" rel="stylesheet">

	<link id="color_scheme" href="{{ URL::to('css/home3.css') }}" rel="stylesheet">
	<link href="{{ URL::to('css/responsive.css') }}" rel="stylesheet">

</head>

<body class="common-home res layout-home3">
    <div id="wrapper" class="wrapper-full banners-effect-8">

    @include('subviews.header')

	@include('subviews.banner')

	<!-- Main Container  -->
	<div class="main-container container">
        @yield('content')


	</div>
	<!-- //Main Container -->
	@include('subviews.hotcategory')

<script type="text/javascript">
<!--
var $typeheader = 'header-home3';
//-->
</script>

	@include('subviews.footer')

    </div>
	@include('subviews.socialwidget')

	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
	<i class="fa fa-cog"></i>
</div>

<div id="sp-cpanel" class="sp-delay">
	<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
	<div id="sp-cpanel_settings">
		<div class="panel-group">
			<label>Color Scheme</label>
			<div class="group-schemes" >
				<span data-scheme="default"  class="item_scheme selected"><span style="background: #e8622d;"></span></span>
				<span data-scheme="blue" class="item_scheme"><span style="background: #478bca;"></span></span>
				<span data-scheme="boocdo"  class="item_scheme"><span style="background: #e54e4e;"></span></span>
				<span data-scheme="cyan" class="item_scheme"><span style="background: #1ea181;"></span></span>
				<span data-scheme="green" class="item_scheme "><span style="background: #52a633;"></span></span>

			 </div>
		</div>

		<div class="panel-group ">
			<label>Header style</label>
			<div class="group-boxed">
				<select id="change_header_type" name="cpheaderstype" class="form-control" onchange="headerTypeChange(this.value);">
					<option value="header-home1" >Header 1</option>
					<option value="header-home2" >Header 2</option>
					<option value="header-home3" >Header 3</option>
					<option value="header-home4" >Header 4</option>
				</select>
			</div>
		</div>


		<div class="panel-group ">
			<label>Layout Box</label>
			<div class="group-boxed">
				<select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
					<option value="full">Wide</option>
					<option value="boxed">Boxed</option>
					<option value="iframed">Iframed</option>
					<option value="rounded">Rounded</option>
				</select>
			</div>
		</div>

        <div class="panel-group">
			<label>Body Image</label>

			<div class="group-pattern">
								<div data-pattern="28"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/28.png" alt="pattern 28"></div>
								<div data-pattern="29"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/29.png" alt="pattern 29"></div>
								<div data-pattern="30"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/30.png" alt="pattern 30"></div>
								<div data-pattern="31"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/31.png" alt="pattern 31"></div>
								<div data-pattern="32"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/32.png" alt="pattern 32"></div>
								<div data-pattern="33"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/33.png" alt="pattern 33"></div>
								<div data-pattern="34"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/34.png" alt="pattern 34"></div>
								<div data-pattern="35"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/35.png" alt="pattern 35"></div>
								<div data-pattern="36"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/36.png" alt="pattern 36"></div>
								<div data-pattern="37"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/37.png" alt="pattern 37"></div>
								<div data-pattern="38"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/38.png" alt="pattern 38"></div>
								<div data-pattern="39"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/39.png" alt="pattern 39"></div>
								<div data-pattern="40"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/40.png" alt="pattern 40"></div>
								<div data-pattern="41"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/41.png" alt="pattern 41"></div>
								<div data-pattern="42"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/42.png" alt="pattern 42"></div>
								<div data-pattern="43"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/43.png" alt="pattern 43"></div>
								<div data-pattern="44"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/44.png" alt="pattern 44"></div>
								<div data-pattern="45"  class="img-pattern"><img src="{{ URL::to('') }}image/theme/patterns/45.png" alt="pattern 45"></div>
							</div>
			<p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
		</div>

		<div class="reset-group">
		    <a href="index.html" class="btn btn-success " onclick="ResetAll()">Reset</a>
		</div>

	</div>

</div>



<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />

	<!-- Preloading Screen -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	 </div>
	<!-- End Preloading Screen -->


<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ URL::to('js/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/owl-carousel/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/themejs/libs.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/unveil/jquery.unveil.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/countdown/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/datetimepicker/moment.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Theme files
============================================ -->
<script type="text/javascript" src="{{ URL::to('js/themejs/application.js') }}"></script>

<script type="text/javascript" src="{{ URL::to('js/themejs/so_megamenu.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/themejs/addtocart.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/themejs/cpanel.js') }}"></script>

</body>
</html>