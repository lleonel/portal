


<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Modulo</th>
			
			<th>Crear</th>

			<th>Borrar</th>

			<th>Editar</th>

			<th>Listar</th>

		</tr>
	</thead>
	<tbody>
		<tr>

		@foreach($profilesmodulos as $perfil)

			@foreach($modulo as $modulos)

				@if($perfil->modulos_id == $modulos->id)

					<td>{{$modulos->modulo}}</td>
			
				@endif

			@endforeach

			<td>{{ $perfil->crear}}</td>
			
			<td>{{ $perfil->eliminar}}</td>

			<td>{{ $perfil->editar}}</td>

			<td>{{ $perfil->listar}}</td>	
			</tr>

		@endforeach


	</tbody>
</table>