@extends('base')
@section('content')
<div class="col-sm-8">
	<h2>
		Listas de Estudiantes
		<a href="{{ route('students.create') }}" class="btn btn-success pull-right">
			<span class="glyphicon glyphicon-plus"></span> Nuevo
		</a>
	</h2>
	@include('partials.info')
	<table class="table table-hover table-striped">
		<thead>
			<style>
				th{
					color: #31B404
				}
			</style>
			<tr>
				<th width="20px">ID</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Nota1</th>
				<th>Nota2</th>
				<th colspan="2">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($students as $student)
			<style>
				tr{
					color:yellow;
				}
			</style>
			<tr>
				<style>
					td{
						color:blue;
					}
				</style>
				<td>{{ $student->id }}</td>
				<td>{{ $student->nombres }}</td>
				<td>{{ $student->apellidos }}</td>
				<td>{{ $student->nota1 }}</td>
				<td>{{ $student->nota2 }}</td>
				<td>
					<a href="{{route('students.show', $student->id)}}" title="">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>

				</td>
				<td>
					<a href="{{ route('students.edit',$student->id) }}" title="Editar" class="btn btn-link">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<form action="{{ route('students.destroy', $student->id) }}" method="POST">
						@csrf
						@method('DELETE')
						<button class="btn btn-link" title="Eliminar">
							<span class="glyphicon glyphicon-remove"></span>
						</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $students->render() !!}	
</div>
<div class="col-sm-4">
	@include('partials.aside')
</div>
@endsection