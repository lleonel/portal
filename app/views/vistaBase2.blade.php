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
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


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
					<li><a href="{{route('admin_get_novedades')}}">Novedades</a></li>
					<li><a href="{{route('admin_get_documentos')}}">Documentos</a></li>
					<li><a href="{{route('admin_get_areas')}}">Areas</a></li>
					<li><a href="{{route('admin_get_protocolo')}}">Protocolo Tel.</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Configuracion Web <b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li><a href="{{route('admin_get_menu_web')}}">Menu Web</a></li>
							<li><a href="{{route('admin_get_slider_web')}}">Slider</a></li>
							<li><a href="{{route('admin_get_banner_web')}}">Banner</a></li>
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

			

		<div class="container">
			@include('partials.msgs')
			@yield('content')
		</div>
		


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		 <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


	
		<script type="text/javascript">

			//todos los checked 
			$('#del').on('click',function(){

				if(confirm("Desde Eliminar el registro seleccionado?")){
					$("input:checkbox:checked").each(function(){
						//cada elemento seleccionado
						var id = $(this).attr('data-id');

						//$.ajax({  url: url,  data: data,  success: success,  dataType: dataType});

						$.get("admin/ws/documentos/delete/"+ id  , function(data){
							if( data == "false" )
							{
								alert('Error al eliminar registro');
							}else{
								window.location.href = window.location.href;
							}
						});
					});
				}else{
					return false;
				}
				
			});


			//confirm delete item
			$('.delete').on('click',function(){
				if(confirm("Desde Eliminar el registro seleccionado?")){
					return true;
				}else{
					return false;
				}
			});	

			//jquery datepicker
			$(".datepicker").datepicker({dateFormat: 'dd-mm-yy'});

		</script>

		<script type="text/javascript" src="packages/wys/js/tinymce/tinymce.min.js"></script>
			<script type="text/javascript">
				tinymce.init({
				selector: "textarea",
				menubar: false,
				statusbar: false,
				theme: "modern",
				height: 200,
				plugins: [
				     "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
				     "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
				     "save table contextmenu directionality emoticons template paste textcolor"
				],
				content_css: "css/content.css",
				toolbar: "  styleselect formatselect fontselect fontsizeselect  | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor emoticons | insertfile undo redo |", 
				style_formats: [
				    {title: 'Bold text', inline: 'b'},
				    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
				    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
				    {title: 'Example 1', inline: 'span', classes: 'example1'},
				    {title: 'Example 2', inline: 'span', classes: 'example2'},
				    {title: 'Table styles'},
				    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
				]
				}); 
			</script>

	</body>
</html>