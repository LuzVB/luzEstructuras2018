@extends('master')


@section('contenido')

  
  <form action="{{url('datos')}}" method="POST">
  	{{csrf_field()}}

<div class="container">
<div class="row">
 <div class="col-6">
      <br>
      <h2>Parqueadero Virtual</h2>
      <label for="inputEmail4">Ingrese la placa</label>
      <input type="text" class="form-control" placeholder="placa" name="salir">
      <br><button type="submit" class="btn btn-outline-primary">Enviar</button>
      
 <!-- html comment -->
     
        <br><br> <div class="alert alert-warning" role="alert">
         Error en la entrada de datos , vuelva a ingresar
        </div>
    
  </div>
 
</form> 



 
  <!-- mostrar los carros en el parqueadero -->
<div class="col">
  <br><h3>Cupos</h3>
    <table class="table">
         <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Placa</th>
          </tr>
         </thead>      
      <?php $cont=1;  
      ?>
         <?php if(Session::has('matriz')){?>
      <tr>
                <?php foreach (Session::get('matriz') as $key => $array) {?>   
                 <th scope="row">{{$cont++}}</th>             
                      <?php foreach ($array as $key => $value) {?>
                      <td>{{$value}}</td>
                  <?php } ?>
                  </tr>
                  <?php } ?>

        <?php } ?>
</tbody>
</table>

    </div>
</div> 

<!-- Pedir al usuario que carro va a salir -->

  
<form action="{{url('salida')}}" method="POST">
    {{csrf_field()}}
<br>
  <h3>Salida de Vehiculos </h3>
  <label for="inputEmail4">Ingrese el Nombre</label>
  <input type="text" class="form-control" placeholder="Nombre" name="salir">
  <br><button type="submit" class="btn btn-outline-primary">Enviar</button>
</form> 


 <!-- html comment 
  <div class="col">
   <br><h3>Pila organizada</h3>-->
   <br><br>
    <table class="table">
         <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Placa</th>
            <th scope="col">N° Salidas</th>
          </tr>
         </thead>      
      <?php $cont=1;  
      ?>
         <?php if(Session::has('pila')){?>
      <tr>
                <?php foreach (Session::get('pila') as $key => $array) {?>   
                 <th scope="row">{{$cont++}}</th>             
                      <?php foreach ($array as $key => $value) {?>
                      <td>{{$value}}</td>
                  <?php } ?>
                  </tr>
                  <?php } ?>

        <?php } ?>
</tbody>
</table>
<div class="row">
  <div class="col-8"></div>
<div class="col-4">
<?php if(Session::has('cobro')){?>
<div class="alert alert-success" role="alert">
  <h4>Cantidad Ventas $$</h4>
  <p>{{Session::get('cobro')}}</p>
</div>
<?php } ?>
</div>
</div>

    </div>
</div> 

</div> 

@stop  