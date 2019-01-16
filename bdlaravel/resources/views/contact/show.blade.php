@extends('base')

@section('content')
	<style>
			div {color:#04B404;}
	</style>
	<div class="col-sm-8">
		
		<h5><h3>Nombre: {{ $contact->nombre}}</h3>
			
			<a href="{{route('contacts.index')}}" class="btn btn-info pull-right">
				<span class="glyphicon glyphicon-share-alt"></span> Volver
			</a>
			
		</h5>
			<h3>Telefono : 
				{{ $contact->telefono}}
			</h3>

	</div>
	<div class="col-sm-4">
		
	</div>
@endsection