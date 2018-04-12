@extends('master')


@section('contenido')
                 <h2>RESULTADOS</h2> 
                  <br>
                            <table class="table">
                                 <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Estatura</th>
                                  </tr>
                                 </thead>
                                <tbody>
                                <?php foreach ($personas as $persona): ?>
                                    <tr>
                                      <?php foreach ($persona as $indice => $valor): ?>
                                      <td>{{$valor}}</td>
                                      <?php endforeach ?>
                                    </tr>
                                <?php endforeach ?>
                               </tbody>
                            </table>        
@stop
