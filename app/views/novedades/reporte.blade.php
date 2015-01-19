

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>titulo</th>
		</tr>
	</thead>
	<tbody>
		
		@foreach($novedades as $novedad)
<tr>
<td>
{{ $novedad->titulo }}
</td>
	</tr>
@endforeach

	
	</tbody>
</table>

