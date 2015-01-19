<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
      <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>
      <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>
      <!-- Site name for smallar screens -->
      <a href="/" class="navbar-brand"><img src="stylesMds/img/logo_administrador.png" width="152" height="25" alt="Logo Administrador"></span></a>
    </div>




  <style type="text/css">
      @import "grid/media/css/demo_page.css"; @import "grid/media/css/header.ccss";
      @import "//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css";
      @import "http://datatables.github.com/Plugins/integration/bootstrap/2/dataTables.bootstrap.css";
    </style>

    <script type="text/javascript" charset="utf-8" src="grid/media/js/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="grid/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" src="grid/css/ZeroClipboard.js"></script>
    <script type="text/javascript" charset="utf-8" src="grid/css/TableTools.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://datatables.github.com/Plugins/integration/bootstrap/2/dataTables.bootstrap.js"></script>
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


      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         
        
        <!-- Links -->
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right user-data">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <img src="stylesMds/img/user1.png"> Administrador <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
              <li><a href="#"><i class="fa fa-cogs"></i> Opciones</a></li>
              <li><a href="index.html"><i class="fa fa-key"></i> Salir</a></li>
            </ul>
          </li>
          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          

          <!-- Sync to server link -->
          
          
            
            <!-- Message button with number of latest messages count-->

            <!-- Members button with number of latest members count -->
        </nav>
    </div>
  </div>