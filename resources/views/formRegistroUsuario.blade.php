@extends('master')

@section('content')
    

    <div class="row">
	  <div class="col-6 col-md-4"></div>
	  <div class="col-6 col-md-4 text-center">
	  	<br><br><br>
	  	<h2>Formulario Registro de Usuario</h2>
	  </div>
	  <div class="col-6 col-md-4"></div>
	</div>

	<div class="row">
	  <div class="col-6 col-md-3"></div>
	  <div class="col-6 col-md-3 text-center">Registro de usuario</div>
	  <div class="col-6 col-md-3 text-center">Inicio de Sesion</div>
	  <div class="col-6 col-md-3"></div>
	</div>

	<div class="row">
	  <div class="col-6 col-md-3"></div>
	  <div class="col-6 col-md-3">
	  	<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#idRegistroUsuario">
	  		Registro
	  	</button>
	  </div>
	  <div class="col-6 col-md-3">
	  	<button type="button" class="btn btn-success btn-lg btn-block">Login</button>
	  </div>
	  <div class="col-6 col-md-3"></div>
	</div>
	<!-- Los errores los retorna a la vista, a esta!! -->
	<!-- Vamos a mostrar los errores que retorna-->

	@if($errors->any())
		<div class="alert alert-danger" role="alert">
		 	<!-- voy hacer un foreach para imprimir todos los errores -->
		 	@foreach($errors->all() as $error)
		 		<div>{{$error}}</div>
		 	@endforeach
		</div>
	@endif

	<!-- Creacion de un modal -->
	<!-- Modal -->
	<div class="modal fade" id="idRegistroUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Registro de usuario</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        
	        <!-- El contenido o form va en el modal-body -->

	        <!-- Form con laravel Collective, vamos a installar -->
	        {!! Form::open(['url' => 'registro']) !!}

			  <div class="row">
			  	
			  	<!--12 son el numero de grillas -->
			  	<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Cedula</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cedula del usuario">
				  </div>
				</div>
				<div class="col-6 col-md-6"></div>



				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Nombre</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="nombre" placeholder="Nombre de usuario">
				  </div>
				</div>

				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Apellido</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="apellido" placeholder="Apellido de usuario">
				  </div>
				</div>


				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Direccion</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="direccion" placeholder="Direccion de usuario">
				  </div>
				</div>

				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Telefono</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="telefono" placeholder="Telefono de usuario">
				  </div>
				</div>


				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Email</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email de usuario">
				  </div>
				</div>

				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Edad</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="edad" placeholder="Edad de usuario">
				  </div>
				</div>

				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Usuario</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="usuario" placeholder="Usuario de usuario">
				  </div>
				</div>

				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Contraseña</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena" placeholder="Contraseña de usuario">
				  </div>
				</div>

			  </div>
			

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Registrar</button>
	      </div>
	      {!! Form::close() !!}


	    </div>
	  </div>
	</div>

@stop