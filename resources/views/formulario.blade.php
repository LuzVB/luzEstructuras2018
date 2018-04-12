@extends('master')


@section('contenido')

  <h2>Buscar Dato en Matriz</h2>
  <form action="{{url('formulario')}}" method="POST">
  	{{csrf_field()}}
  <div class="form-row">
    <div class="col-7">
      <label for="inputEmail4">Ingrese un nombre</label>
      <input type="text" class="form-control" placeholder="Nombre" name="nombre">
    </div>
   </div>

   <br><button type="submit" class="btn btn-outline-primary">Enviar</button>
   </form> 
   
 @stop  