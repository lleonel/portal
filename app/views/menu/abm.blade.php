@extends('vistaBase')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="widget">
      
      <div class="widget-head">
        <div class="pull-left">{{ $title }}</div>
        <div class="widget-icons pull-right"></div>
        <div class="clearfix"></div>
      </div>


      <div class="widget-content">
        <div class="padd">

          <hr />
                  <!-- Form starts.  -->
					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
						@if (count($errors) > 0)
						<div class="alert alert-danger">{{ $errors->first() }}</div>
						@endif
						@if (Session::has('success'))
						<div class="alert alert-success">{{ Session::get('success') }}</div>
						@endif
					<div class="form-group">
						<label class="col-lg-2 control-label">Titulo Documento:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" placeholder="Titulo Principal" name="titulo" >
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">link</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" placeholder="link" name="link" >
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Archivo:</label>
						<div class="col-lg-10">
							<input type="file" id="exampleInputFile" name="file" >
						</div>
					</div>


					<div class="form-group">
						<label class="col-lg-2 control-label">Fecha de Alta:</label>
						<div class="col-lg-10">
							<div id="datetimepicker1" class="input-append">
								<input data-format="dd-MM-yyyy" type="text" class="form-control dtpicker" name="fecha" >
								<span class="add-on">
									<i data-time-icon="fa fa-time" data-date-icon="fa fa-calendar" class="btn btn-info"></i>
								</span>
							</div>
						</div>
					</div>    

					                 

					<hr />
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-9">
							
							<button type="submit" class="btn btn-default">Grabar</button>
							<button type="button" class="btn btn-danger">Cancelar</button>
						</div>
					</div>

					</form>
        </div>
      </div>
      
    </div>
  </div>
</div>
@stop