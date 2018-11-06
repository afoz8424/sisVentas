@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Editar Proveedor:{{$persona->nombre}}</h3>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</div>
	</div>
			
	{!! Form::model($persona,['route'=>['proveedor.update',$persona->idpersona],'method'=>'PUT'])!!}
	{{Form::token()}}
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" required value="{{$persona->nombre}}" class="form-control">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Tipo Documento</label>
					<select name="tipo_documento" class="form-control">
						<option value="MS" {{($persona->tipo_documento == 'MS') ? 'selected' : ''}}>Menor sin Identificacion</option>
						<option value="RC" {{($persona->tipo_documento == 'RC') ? 'selected' : ''}}>Registro Civil</option>
						<option value="TI" {{($persona->tipo_documento == 'TI') ? 'selected' : ''}}>Tarjeta de Identidad</option>
						<option value="CC" {{($persona->tipo_documento == 'CC') ? 'selected' : ''}}>Cedula de Ciudadania</option>
						<option value="AS" {{($persona->tipo_documento == 'AS') ? 'selected' : ''}}>Adulto sin Identificacion</option>
						<option value="NIT"{{($persona->tipo_documento == 'NIT') ? 'selected' : ''}}>Nit</option>
						<option value="PA" {{($persona->tipo_documento == 'PA') ? 'selected' : ''}}>Pasaporte</option>
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Numero Documento</label>
					<input type="text" name="num_documento" required value="{{$persona->num_documento}}" class="form-control">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Direccion</label>
					<input type="text" name="direccion" value="{{$persona->direccion}}" class="form-control">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Telefono</label>
					<input type="text" name="telefono" value="{{$persona->telefono}}" class="form-control">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Email</label>
					<input type="email" name="email" value="{{$persona->email}}" class="form-control">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>

				</div>
			</div>		
		</div>	
	{!! Form::close()!!}
@endsection