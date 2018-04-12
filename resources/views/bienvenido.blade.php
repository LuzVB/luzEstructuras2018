@extends('master')


@section('contenido')


  @if(Session::has('matrizUsuario'))
   
    <br><br><br><br>  
    <div class="container">
      <div class="row">
       <div class="col">
        </div>
        <div class="col">
           <h2>BIENVENIDO</h2>
        </div>
        <div class="col">
        </div>
      </div>

        

    </div>
      
  @endif

   
@stop  