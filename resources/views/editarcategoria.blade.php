@extends('layout.app', ["current" => "categorias"])

@section('body')

<div class="card border">
	<div class="card-body">		
		<form action="{{route('categorias.update', $cat->id)}}" method="POST">
			<div class="form-group">
				@csrf
				<label>Editar a Categoria</label>
					<input type="text" for="form-control" value="{{$cat->nome}}" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria">				
			</div>
			<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
			<button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
			
		</form>
		
	</div>
	
</div>

@endsection