<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Desarrollo Social de la Nacion - Portal Interno</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <base href="{{ asset('') }}">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="packages/bootstrap/css/bootstrap.css" >
        <link rel="stylesheet" href="css/web/normalize.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pontano+Sans&amp;subset=latin,latin-ext">
        <link rel="stylesheet" href="css/web/main.css">
        <link rel="stylesheet" href="css/web/core.css">
        <link rel="stylesheet" href="css/web/color-blue.css">
        
         @yield('css')

        <style type="text/css"> 
            .image-cropper 
            {
                position: relative;
                width: 355px;
                height: 232px;
                overflow: hidden;
            }

            .bottom 
            {
               position: absolute;
            }

            .cont-banner
            { 
                background-color: white;
                padding: 8px 5px 5px 5px;
            }

            .cont-banner img 
            { 
                box-shadow: 0px 5px 5px 0px rgba(50, 50, 50, 0.75);
                -webkit-box-shadow: 0px 5px 5px 0px rgba(50, 50, 50, 0.75);
                -moz-box-shadow: 0px 5px 5px 0px rgba(50, 50, 50, 0.75);
                -o-box-shadow: 0px 5px 5px 0px rgba(50, 50, 50, 0.75);
                margin-bottom: 8px;
                width: 400px; height:100px;
            }

            .cont-banner ul 
            {
                padding: 0;
                margin: 0;
            }
        </style>

        <!--[if IE 8]> <link rel="stylesheet" href="css/ie8.css"> <![endif]-->        


    </head>
    <body class="theme-orange">

	    
        <header id="page-header">
        	<div class="container">
        		<div class="row-fluid">
        			<div class="span12">
						<a href="#" id="logotype">Ministerio de Desarrollo Social de la Nacion</a><!-- /primary nav -->
						  <nav id="primary-nav-mobile">
							<form method="post" action="#" name="mobile-menu">
								<select id="mobileSelect" onChange="$(this).submit();">
									<option value="#">Inicios</option>
									<option value="#">Noticias</option>
									<option value="#">Eventos</option>
									<option value="#">Avisos Clasificados</option>
									<option value="#">Novedades</option>
									<option value="#">Contacto</option>
								</select>
							</form>
						  </nav>
        			</div>
        		</div><!-- /row-fluid -->
        	</div>
        </header><!-- /page-header -->
        
        <section id="slider">
        	
        	@include('web.slider')
	        
	    </section><!-- /slider -->

		@include('web.menu')

		<br>
       		
	    <section id="content-container" class="container" >

  
        <section id="slider">
        	
        	        
	    </section>
	    
	    	@yield('content')

	    </section><!-- content-container -->
	    

	    <footer id="page-footer">

	    	
	    
		<div class="copyright">2014 @ Dirección de Servicios Digitales informáticos y de  Telecomunicaciones.<br>
	      Ministerio de Desarrollo Social.
        </div>
	    </footer>

        <script src="js/web/vendor/modernizr-2.6.2.min.js"></script>
		<script src="js/web/jquery.js" type="text/javascript" charset="utf-8" ></script>
	    <script src="packages/bootstrap/js/bootstrap.js" type="text/javascript" charset="utf-8" ></script>

        <script src="js/web/plugins.js"></script>
        <script src="js/web/jquery.flexslider.js"></script>
        <script src="js/web/jquery.nivo.slider.js"></script>
        <script src="js/web/jquery.cookie.js"></script>
        <script src="js/web/jquery.easing-1.3.pack.js"></script>
        <script src="js/web/jquery.fancybox1.3.4.js"></script>
        <script src="js/web/jquery.player.js"></script>
        <script src="js/web/jquery.event-calendar.js"></script>

        <script src="js/web/main.js"></script>
        @yield('js')


        <script type="text/javascript">

             
            $(document).on('click', '.button-qr', function() {
                var remote = $(this).data('href');
                var html = 'cargando...';
                     $($(this).data('target')).html(html);
                     $($(this).data('target')).load(remote);
                     $('#mdlQr').modal('show');
            });

           // $("#openQr").each(function(){     
           //     alert($(this).attr('data-cel'));
           // });
                
            /*
                $('#openQr').on('click',function(){

                   // $('#modal-id').removeData();
                    alert($(this).attr('data-cel'));

                   // $('#modal-id .modal-body').html(id);
                });
            */
        </script>
                
    </body>
</html>