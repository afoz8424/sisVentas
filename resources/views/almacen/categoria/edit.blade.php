@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div.col-lg-8 col-md-8 col-sm-8 col-xs-12>
			<h3>Editar Categoria:{{$categoria->nombre}}</h3>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			{!! Form::model($categoria,['route'=>['categoria.update',$categoria->idcategoria],'method'=>'PUT'])!!}
				{{Form::token()}}
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" value="{{$categoria->nombre}}" class="form-control" placeholder="Nombre...">
				</div>
				<div class="form-group">
					<label for="nombre">Descripcion</label>
					<input type="text" name="descripcion" value="{{$categoria->descripcion}}" class="form-control" placeholder="Descripcion...">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>

				</div>
			{!! Form::close()!!}
		</div>
	</div>
@endsection