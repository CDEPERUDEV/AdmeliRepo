@extends('base')

@section('content')

	<div class="col-sm-8">
		<h5> Nombre: 	
			{{ $student->nombres}}
			<a href="{{route('students.index')}}" class="btn btn-info pull-right">
				<span class="glyphicon glyphicon-share-alt"></span> Volver
			</a>
			
		</h5>
		<style>
			h5{color:blue;}
		</style>
		<style> h3{color:red;}</style>
			<h3> 
				<h5> Apellidos: {{ $student->apellidos}}</h5>
			</h3>
			<h5> Nota1:
				{{ $student->nota1}}
			</h5>
			<h5> Nota2: 
				{{ $student->nota2}}
			</h5>
			<h5> Promedio:
				{{ (($student->nota2)+($student->nota1))/2}}
			</h5>





	</div>
	<div class="col-sm-4">
		
	</div>
@endsection