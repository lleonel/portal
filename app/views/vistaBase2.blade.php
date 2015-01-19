<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ministerio de desarrollo social</title>
		<base href="{{ asset('') }}">


		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<nav class="navbar navbar-static-top navbar-inverse" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="css/img/logo_administrador.png" width="152" height="25" ></a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">

				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Inicio</a></li>
					<li><a href="admin/novedades">Novedades</a></li>
					<li><a href="admin/documentos">Documentos</a></li>
					<li><a href="admin/areas">Areas</a></li>
					<li><a href="admin/protocolo">Protocolo Tel.</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Configuracion Web <b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li><a href="admin/menu">Menu Web</a></li>
							<li><a href="admin/slider">Slider</a></li>
							<li><a href="admin/banner">Banner</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon icon-user"></i>
							{{ Auth::user()->username }}<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="logout">Cerrar Sesión</a></li>
						</ul>
					</li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</nav>

			@include('partials.msgs')

		<div class="container">
			@yield('content')
		</div>
		


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>