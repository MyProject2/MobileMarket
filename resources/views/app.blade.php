<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mobile Market</title>
        <link rel="icon" href="{{ asset('image/icon_logo.jpg') }}">

		{{-- font awesome --}}
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<!-- Include Cloud Zoom CSS -->
		<link href="{{ asset('css/cloudzoom.css') }}" type="text/css" rel="stylesheet" />
		<!-- Include Thumbelina CSS -->
		<link href="{{ asset('css/thumbelina.css') }}" type="text/css" rel="stylesheet" />
		{{-- mystyle CSS --}}
		<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
        {{--google font--}}
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">


	</head>
	<body >
		<script>
				window.fbAsyncInit = function() {
					FB.init({
					appId      : '1408460849458284',
					xfbml      : true,
					version    : 'v2.2'
					});
				};
				(function(d, s, id){
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) {return;}
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="container-fluid" style="background-color: #e0f2f6">
			<div class="top-bar">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="#">Tài Khoản</a>
							</li>
							<li>
								<a href="#">Thông tin</a>
							</li>
							<li>
								<a href="#">Liên hệ</a>
							</li>
						</ul>

					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
                        <ul class="nav navbar-nav pull-right" >
                            @if(is_null($user))
                                <li class="active">
                                    <a href="{{url('/auth','login')}}"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a>
                                </li>
                                <li>
                                    <a href="{{url('/auth','register')}}"><span class="glyphicon glyphicon-lock"></span> Đăng ký</a>
                                </li>
                            @else
                                <li>
                                    <a href="#">Xin chào: {{$user->name}}</a>
                                </li>
                                <li>
                                    <a href="{{url('/auth','logout')}}">Thoát</a>
                                </li>
                            @endif
                        </ul>
					</div>
				</div>
			</div>
			<!-- header -->
			<header id="header" class="myheader">
				<a href="{{url('/','home')}}"><img src="{{asset('image\mobilemarket.jpg')}}" height="120" width="180" alt="logo"></a>
			</header>
			<!-- navigation bar -->
			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{url('/','home')}}"><big><span class="glyphicon glyphicon-home"></span></big></a>
				</div>
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">DANH MỤC SẢN PHẨM<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" >
								<li><a href="#">LG</a></li>
								<li class="divider"></li>
								<li><a href="#">IPHONE</a></li>
								<li class="divider"></li>
								<li><a href="#">SAMSUNG</a> </li>
							</ul>
						</li>
						<li>
							<a href="#">KHUYẾN MÃI</a>
						</li>
						<li>
							<a href="#" title="">MÁY CŨ</a>
						</li>
						<li>
							<a href="#" title="">TUYỂN DỤNG</a>
						</li>
						<li>
							<a href="#" title="">TIN TỨC</a>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role = "search" style="margin-right: 10px">
						<input type="text" class="form-control" placeholder="Search">
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
					</form>
				</div>
			</nav>
@yield('content')
			<footer class="white footer">
				<div class="container-fluid">
					<div class=" col-sm-4 col-md-4 col-lg-4">
						<h3 ><big><i class="fa fa-facebook"></i></big> FACEBOOK</h3>
						<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmobilemarket0605&amp;width=270&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=false&amp;appId=1408460849458284" scrolling="no" frameborder="0" style="border:none; overflow:hidden;  height:290px;" allowTransparency="true"></iframe>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<h3><big><i class="fa fa-list"></i></big> THÔNG TIN </h3>
						<ul class="information-footer ">
							<li><h4><a href="#"><i class="fa fa-caret-right"></i> Công ty</a></h4></li>
							<li><h4><a href="#"><i class="fa fa-caret-right"></i> Các nhà sản xuất</a></h4></li>
							<li><h4><a href="#"><i class="fa fa-caret-right"></i> Bán chạy nhất</a></h4></li>
							<li><h4><a href="#"><i class="fa fa-caret-right"></i> Điều khoản hợp đồng</a></h4></li>
						</ul>
					</div>
					<div class=" col-sm-4 col-md-4 col-lg-4">
						<h3><big><i class="fa fa-phone contact"></i></big> LIÊN HỆ</h3>
						<ul class="information-footer">
							<li><h4><i class="fa fa-map-marker"></i><pre> 20 Nguyễn Khoái - Hoàng Mai - Hà Nội</pre></h4></li>
							<li><h4><i class="fa fa-envelope-o"></i><pre> dinhduc0605@gmail.com</pre></h4></li>
							<li><h4><i class="fa fa-phone"></i><pre> 01694949947</pre></h4></li>
						</ul>
					</div>
				</div>
			</footer>
			<p>Copyright 2014 MobileMarket. All Rights Reserved.</p>
		</div>
		<!-- jQuery library -->
		<script src="{{ asset('script/jquery-1.11.2.js') }}"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="{{ asset('script/bootstrap.min.js') }}"></script>
		<!-- Include Cloud Zoom JavaScript -->
		<script type="text/javascript" src="{{ asset('script/cloudzoom.js') }}"></script>
		<!-- Include Thumbelina JavaScript -->
		<script type="text/javascript" src="{{ asset('script/thumbelina.js') }}"></script>
        {{--Include jcaroudel--}}
        <script type="text/javascript" src="{{ asset('script/jquery.jcarousel.min.js')}}"></script>
		{{-- myscript  --}}
		<script type="text/javascript" src="{{ asset('script/myscript.js') }}"></script>
	</body>
</html>