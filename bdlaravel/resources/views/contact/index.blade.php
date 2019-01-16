@extends('base')
@section('content')
	<div class="col-sm-8">
		<style>
			h2{
				color:#0000FF;
			}
		</style>
		<h2>
			Lista de Contactos
			<a href="{{route('contacts.create')}}" class="btn btn-primary pull-right">
				<span class="glyphicon glyphicon-plus"></span> Nuevo
			</a>

		</h2>
		@include('partials.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<style>
						th{
							color:green;
						}
					</style>
				<th width="20px">ID</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
					<tbody>
			@foreach($contacts as $contact)
			<tr>
				
					<style>
					td{
						color: #0A2A12;
					}
					</style>
					<td>{{ $contact->id}}</td>
					<td>{{ $contact->nombre}}</td>
					<td>{{ $contact->telefono}}</td>
					<td>
					<a href="{{route('contacts.show', $contact->id)}}" title="">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>

				</td>
				
				<td>
					<a href="{{route('contacts.edit',$contact->id)}}" title="Editar" class="btn btn-link">
						<span class="glyphicon glyphicon-edit"></span>
					</a>


				</td>
				<td>
					<form action="{{route('contacts.destroy',$contact->id)}}" method="POST">
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
		{!! $contacts->render()!!}

	</div>
	<div class="col-sm-4">
		@include('partials.aside')
		
	</div>
	@endsection