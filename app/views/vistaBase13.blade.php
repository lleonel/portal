<!DOCTYPE html>
<html lang="es">
	<head>
		<base href="{{ asset('') }}">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 

	   <style type="text/css">
			@import "grid/media/css/demo_page.css"; 
			@import "grid/media/css/header.ccss";
			@import "//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css";
			@import "http://datatables.github.com/Plugins/integration/bootstrap/2/dataTables.bootstrap.css";
		</style>

	
		<title>Acceso Administrador Portal Desarrollo Social</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">

		<link rel="stylesheet" 		href="stylesMds/style/bootstrap.css" >
		<link rel="stylesheet" 		href="stylesMds/style/font-awesome.css"> 
		<link rel="stylesheet" 		href="stylesMds/style/jquery-ui-1.9.2.custom.min.css"> 
		<link rel="stylesheet" 		href="stylesMds/style/fullcalendar.css">
		<link rel="stylesheet" 		href="stylesMds/style/prettyPhoto.css">  
		<link rel="stylesheet" 		href="stylesMds/style/rateit.css">
		<link rel="stylesheet" 		href="stylesMds/style/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" 		href="stylesMds/style/jquery.cleditor.css"> 
		<link rel="stylesheet" 		href="stylesMds/style/uniform.default.html"> 
		<link rel="stylesheet" 		href="stylesMds/style/daterangepicker-bs3.css" />
		<link rel="stylesheet" 		href="stylesMds/style/bootstrap-switch.css">
		<link rel="stylesheet" 		href="stylesMds/style/style.css" >
		<link rel="stylesheet" 		href="stylesMds/style/widgets.css" >   
		<link rel="stylesheet" 		href="stylesMds/style/jquery.gritter.css" >   
		<link rel="shortcut icon" 	href="stylesMds/img/favicon/favicon.png">
	</head>
	

	<body>
		<header>
			@include('nav')	
		</header>

			<div class="content">
					@include('slide')  
				<div class="mainbar">
						@include('bread')
					<!-- Page heading -->
					<div class="matter">
						<div class="container">
						<!-- Today status. jQuery Sparkline plugin used. -->
						
							@yield('content')


						</div>
					</div>
				</div>
			</div>

		<!-- Footer starts -->
		<footer>
		@include('footer')
		</footer>   
		<!-- Footer ends -->

		<!-- JS -->
		<script src="stylesMds/js/jquery.js"></script> <!-- Bootstrap -->
		<script src="stylesMds/js/bootstrap.js"></script> <!-- Bootstrap -->
		<script src="stylesMds/js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
		<script src="stylesMds/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
		<script src="stylesMds/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
		<script src="stylesMds/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

		<!-- Morris JS -->
		<script src="stylesMds/js/raphael-min.js"></script>
		<script src="stylesMds/js/morris.min.js"></script>

		<!-- jQuery Flot -->
		<script src="stylesMds/js/excanvas.min.js"></script>
		<script src="stylesMds/js/jquery.flot.js"></script>
		<script src="stylesMds/js/jquery.flot.resize.js"></script>
		<script src="stylesMds/js/jquery.flot.pie.js"></script>
		<script src="stylesMds/js/jquery.flot.stack.js"></script>

		<!-- jQuery Notification - Noty -->
		<script src="stylesMds/js/jquery.noty.js"></script> <!-- jQuery Notify -->
		<script src="stylesMds/js/themes/default.js"></script> <!-- jQuery Notify -->
		<script src="stylesMds/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
		<script src="stylesMds/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
		<script src="stylesMds/js/layouts/top.js"></script> <!-- jQuery Notify -->
		<!-- jQuery Notification ends -->

		<!-- Daterangepicker -->
		<script src="stylesMds/js/moment.min.js"></script>
		<script src="stylesMds/js/daterangepicker.js"></script>
		<script src="stylesMds/js/sparklines.js"></script> <!-- Sparklines -->
		<script src="stylesMds/js/jquery.gritter.min.js"></script> <!-- jQuery Gritter -->
		<script src="stylesMds/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
		<script src="stylesMds/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
		<script src="stylesMds/js/jquery.uniform.min.html"></script> <!-- jQuery Uniform -->
		<script src="stylesMds/js/jquery.slimscroll.min.js"></script> <!-- jQuery SlimScroll -->
		<script src="stylesMds/js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
		<script src="stylesMds/js/filter.js"></script> <!-- Filter for support page -->
		<script src="stylesMds/js/custom.js"></script> <!-- Custom codes -->
		<script src="stylesMds/js/charts.js"></script> <!-- Charts & Graphs -->
		<script src="stylesMds/js/index.js"></script> <!-- Index Javascripts -->



		<script type="text/javascript" charset="utf-8" src="grid/media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" src="grid/css/ZeroClipboard.js"></script>
		<script type="text/javascript" charset="utf-8" src="grid/css/TableTools.js"></script>
		<script type="text/javascript" charset="utf-8" src="grid/media/js/dataTables.bootstrap.js"></script>
		

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
						"sSwfPath": "swf/copy_csv_xls_pdf.swf",
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

	</body>
</html>