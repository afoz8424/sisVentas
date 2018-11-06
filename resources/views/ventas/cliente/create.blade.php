@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Persona</h3>
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
	{!!Form::open(array('url'=>'ventas/cliente','method'=>'post','autocomplete'=>'off'))!!}
	{{Form::token()}}
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Tipo Documento</label>
					<select name="tipo_documento" class="form-control">
						<option value="MS">Menor sin Identificacion</option>
						<option value="RC">Registro Civil</option>
						<option value="TI">Tarjeta de Identidad</option>
						<option value="CC">Cedula de Ciudadania</option>
						<option value="AS">Adulto sin Identificacion</option>
						<option value="NIT">Nit</option>
						<option value="PA">Pasaporte</option>
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Numero Documento</label>
					<input type="text" name="num_documento" required value="{{old('num_documento')}}" class="form-control" placeholder="Numero Documento...">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Direccion</label>
					<input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Direccion...">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Telefono</label>
					<input type="text" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="Telefono...">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Email</label>
					<input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email...">
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