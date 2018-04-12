<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>loging</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<br><br><br><br><br><br><br><br>
<div class="container">
   <div class="row">
    <div class="col-6 col-md-4"></div>
    <div class="col-6 col-md-4">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form action="{{url('iniciar')}}" method="POST" role="form" style="display: block;">
                {{csrf_field()}}
                <h2>LOGIN</h2>
                  <div class="form-group">
                    <input type="text" name="username"  tabindex="1" class="form-control" placeholder="Username" >
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" tabindex="2" class="form-control" placeholder="Password">
                    <br>        

                  <div class="row">
                  <div class="col-12 col-md-8">
                   <button type="submit" class="btn btn-primary"><div class="login">iniciar sesion</div></button>
                  </div>
                     <div class="col-6 col-md-4">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#idRegistroUsuario">
                          Registro
                       </button>
                    </div>        
                   </div>
                  
              </form>
              <br>
              <div class="alert alert-danger" role="alert">
                No puede ingresar 
              </div>
     
        

             <!-- html comment 
               <a href="#ventana1" class="btn btn-outline-primary" data-toggle="modal" >Registrar Usuario</a>-->
               <div class="modal fade" id="idRegistroUsuario"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title">Registro</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
              </div>
              <div class="modal-body">
                 <form action="{{url('crearUsuario')}}" method="POST">
                    {{csrf_field()}}
                  <div class="row">
                  <div class="col-6 col-md-6">
                    <label for="inputEmail4">Nombre de usuario</label>
                    <input type="text" class="form-control" placeholder="Nick Name" name="nickName" required>
                  </div>
                  <div class="col-6 col-md-6">
                    <label for="inputEmail4">Cedula</label>
                    <input type="text" class="form-control" placeholder="cedula" name="cedula" required>
                  </div>
                   <div class="col-6 col-md-6">
                    <label for="inputEmail4">Nombre </label>
                    <input type="text" class="form-control" placeholder="nombre" name="nombre" required>
                  </div>
                  <div class="col-6 col-md-6">
                    <label for="inputEmail4">Apellido</label>
                    <input type="text" class="form-control" placeholder="apellido" name="apellido" required>
                  </div>
                  <div class="col-6 col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" placeholder="ejemplo@email.com" name="email">
                  </div>
                  <div class="col-6 col-md-6">
                    <label for="inputEmail4">Contraseña</label>
                    <input type="password" class="form-control" placeholder="contraseña" name="contraseña" required>
                  </div>





                  </div>


                  
                  <br><br>
                  <div class="col-6 col-md-6"><button type="submit" class="btn btn-primary">Registrar</button></div>
                 </form>
                 
             </div>
             <div class="modal-footer">
              <h6>Realizado por Luz Velasquez Y Valentina Sarmiento </h6>
              
             </div>
           </div>
         </div>
        </div>

            </div>
          </div>

          





       </div>
      </div>
    </div>
   </div>
  </div>
 </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>