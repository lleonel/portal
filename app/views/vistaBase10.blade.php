<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<base href="{{ asset('') }}">

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

  </head>

