<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Ministerio de Desarrollo Social</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<base href="{{ asset('') }}">


		<link rel="stylesheet" href="packages/bootstrap/css/bootstrap.css" >
        <link rel="stylesheet" href="css/web/main.css">
        <link rel="stylesheet" href="css/web/core.css">
        <link rel="stylesheet" href="css/web/color-blue.css">
		<!-- Le styles -->
		<link href="packages/bootstrap/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body { padding-top: 60px; padding-bottom: 40px; }
		</style>
		<link href="packages/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="packages/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="packages/bootstrap/css/bootstrap-combined.min.css" rel="stylesheet">
		<link href="css/web/jquery-ui.css" rel="stylesheet" >


		<!--
		<style type="text/css">
		@import "http://datatables.github.com/Plugins/integration/bootstrap/2/dataTables.bootstrap.css";
		</style>
		

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons 
		<link rel="shortcut icon" href="vendor/assets/images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="vendor/assets/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="vendor/assets/images/apple-touch-icon-114x114.png">
		-->

	</head>
	<body>

		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					
					<a href="/" class="brand"><img src="css/img/logo_administrador.png" width="152" height="25" ></a>
					<div class="nav-collapse">
					
						<ul class="nav">
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

						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon icon-user"></i>
									{{ Auth::user()->username }}
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="logout">Cerrar Sesión</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">

				@include('partials.msgs')

			    @yield('content')

		  	<hr>

			<footer>
				<p>&copy; Ministerio de Desarrollo Social</p>
			</footer>
		</div> <!-- /container -->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->


			<script type="text/javascript" charset="utf-8" src="js/web/jquery.js"></script>
			<!--
			<script type="text/javascript" charset="utf-8" src="vendor/js/jquery.dataTables.js"></script>
			<script type="text/javascript" charset="utf-8" src="vendor/js/ZeroClipboard.js"></script>
			<script type="text/javascript" charset="utf-8" src="vendor/js/TableTools.js"></script>
			<script type="text/javascript" charset="utf-8" src="vendor/js/dataTables.bootstrap.js"></script>
			-->
			<script type="text/javascript" charset="utf-8" src="packages/bootstrap/js/bootstrap.js"></script>
			<script src="js/web/jquery-ui.js"></script>
 			

			<script>

			$(function () {

				$(".datepicker").datepicker({dateFormat: 'dd-mm-yy'});
			});

			</script>

			<script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				$('#grid').dataTable( {
					"bLengthChange": true,
					"oLanguage": {
					"sLengthMenu": "Mostrar _MENU_ por pagina",
					"sZeroRecords": "Sin Coincidencia",
					"sInfo": " _START_ a _END_ de _TOTAL_ registros",
					"sInfoEmpty": " 0 a 0 de 0 registros",
					"sInfoFiltered": "(filtrado de _MAX_ total registros)",
					"sSearch":"Filtro :",
							"oPaginate": {
							"sNext": "Sig.",
							"sPrevious": "Ant.",
							"sFirst":"Primero",
							"sLast":"Ultimo",
							}
					},

					"sDom": "<'row-fluid'<'span3'f><'span6'l><'span3'T>r>t<'row-fluid'<'span6'i><'span6'p>>",
					
					"oTableTools": {
						"sSwfPath": "vendor/swf/copy_csv_xls_pdf.swf",
						"aButtons": [
							{
								"sExtends":    "collection",
								"sButtonText": 'Exportar <span class="caret" />',
								"aButtons":    [ "xls", "pdf" ]
							}
						]
					}
				} );
			} );
			</script>


			<!-- Place inside the <head> of your HTML -->
			<script type="text/javascript" src="packages/wys/js/tinymce/tinymce.min.js"></script>
			<script type="text/javascript">
				tinymce.init({
				selector: "textarea",
				menubar: false,
				statusbar: false,
				theme: "modern",
				width: 500,
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


	


    

		
		
		

		