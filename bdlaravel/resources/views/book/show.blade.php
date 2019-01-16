@extends('base')

@section('content')

	<div class="col-sm-8">
		<style>
			h3{color:blue;}
		</style>
		<h3> TITULO: 	
			{{ $book->titulo}}
			<a href="{{route('books.index')}}" class="btn btn-info pull-right">
				<span class="glyphicon glyphicon-share-alt"></span> Volver
			</a>
			
		</h3>
			<style>
				h5{color:blue;}
			</style>
			
			<caption><img src="/images/{{$book->imagen}}" class="imag-thumbnail" title="$book->titulo"></caption>

			<cite>
				<h5> 
					EDICION:   {{ $book->edicion}} 
				</h5>
				<h5>
					TIPO:       {{ $book->tipo}}
				</h5>

				<h5>
					DISPONIBLE: {{ $book->disponible}}
				</h5>

				<h5>
					EJEMPLARES: {{$book->ejemplares}}
				</h5>
				<h5>
				
					@foreach($authors as $author)
						@if($book->author_id==$author->id)
						<h5>AUTOR: {{ $author->nombres }}</h5>
						@endif
					@endforeach
				
				</h5>

				<h5>
				
					@foreach($bookstores as $bookstore)
						@if($book->bookstore_id==$bookstore->id)
						<h5>EDITORIAL: {{ $bookstore->razon_social }}</h5>
						@endif
					@endforeach
				
				</h5>
			</cite>


			
			




	</div>
	<div class="col-sm-4">
		
	</div>
@endsection