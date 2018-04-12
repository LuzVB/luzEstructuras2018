@extends('master')


@section('contenido')
            <h2>Listas</h2> 
               <form action="{{url('lista')}}" method="POST">
                   {{csrf_field()}}
                  <div class="form-row">
                    <div class="col-7">
                    <label for="inputEmail4">Ingrese un nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    <label for="inputEmail4">Ingrese un apellido</label>
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                    <label for="inputEmail4">Ingrese una edad</label>
                    <input type="text" class="form-control" placeholder="Edad" name="edad">
                    <label for="inputEmail4">Ingrese una estatura</label>
                    <input type="text" class="form-control" placeholder="Estatura" name="estatura">
                    <label for="inputEmail4">Ingrese un numero</label>
                    <input type="text" class="form-control" placeholder="Numero" name="numero">
                 </div>
                </div>

                <br><button type="submit" class="btn btn-outline-primary">Enviar</button>
   </form> 
@stop