<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<link rel="icon" type="image/x-icon" href="{{ asset('/assets/home/img/frame-3.png') }}" style="object-fit: cover;" />
		<title>Talenta</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{ asset('/assets/blog/scripts/bootstrap/bootstrap.min.css') }}">
		<!-- IonIcons -->
		<link rel="stylesheet" href="{{ asset('/assets/blog/scripts/ionicons/css/ionicons.min.css') }}">
		<!-- Toast -->
		<link rel="stylesheet" href="{{ asset('/assets/blog/scripts/toast/jquery.toast.min.css') }}">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="{{ asset('/assets/blog/scripts/owlcarousel/dist/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/blog/scripts/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ asset('/assets/blog/scripts/magnific-popup/dist/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/blog/scripts/sweetalert/dist/sweetalert.css') }}">
		<!-- iCheck -->
		<link rel="stylesheet" href="{{ asset('/assets/blog/scripts/icheck/skins/all.css') }}">
		<!-- Custom style -->
		<link rel="stylesheet" href="{{ asset('/assets/blog/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/blog/css/skins/all.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/blog/css/demo.css') }}">
        @yield('css')
	</head>

	<body>
		@yield('content')
		<script src="{{ asset('/assets/blog/js/jquery.js') }}"></script>
		<script src="{{ asset('/assets/blog/js/jquery.migrate.js') }}"></script>
		<script src="{{ asset('/assets/blog/scripts/bootstrap/bootstrap.min.js') }}"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="{{ asset('/assets/blog/scripts/jquery-number/jquery.number.min.js') }}"></script>
		<script src="{{ asset('/assets/blog/scripts/owlcarousel/dist/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('/assets/blog/scripts/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('/assets/blog/scripts/easescroll/jquery.easeScroll.js') }}"></script>
		<script src="{{ asset('/assets/blog/scripts/sweetalert/dist/sweetalert.min.js') }}"></script>
		<script src="{{ asset('/assets/blog/scripts/icheck/icheck.min.js') }}"></script>
		<script src="{{ asset('/assets/blog/scripts/toast/jquery.toast.min.js') }}"></script>
		<script src="{{ asset('/assets/blog/js/demo.js') }}"></script>
		<script>
            $("input").iCheck({
                checkboxClass: 'icheckbox_square-red',
                radioClass: 'iradio_square-red',
                cursor: true
		    });
        </script>
		<script src="{{ asset('/assets/blog/js/e-magz.js') }}"></script>
        @yield('js')
	</body>
</html>