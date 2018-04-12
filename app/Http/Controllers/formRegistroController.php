<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;//Usar la clas Validator
use \Session;

class formRegistroController extends Controller
{

  	public function crearUsuario(Request $request){
  		$nickName = $request->nickName;
  		$cedula = $request->cedula;
  		$nombre = $request->nombre;
  		$apellido = $request->apellido;
  		$email = $request->email;
  		$contraseña = $request->contraseña;


  		if(Session::has('matrizUsuario')){

        $dataRegistrada=Session::get('matrizUsuario');

        $dataRegistrada[]=array(
          'nickName'=> $nickName,
          'cedula'=> $cedula,
          'nombre'=> $nombre,
          'apellido'=> $apellido,
          'email'=> $email,
          'contraseña'=> $contraseña,
          
        );
        Session::put('matrizUsuario',$dataRegistrada);
      
      }
      else{
        $matrizUsuario[]=array(
          'nickName'=> $nickName,
          'cedula'=> $cedula,
          'nombre'=> $nombre,
          'apellido'=> $apellido,
          'email'=> $email,
          'contraseña'=> $contraseña,
          
        );

    		Session::put('matrizUsuario',$matrizUsuario);
      }

  		$mensaje="Usuario registrado con exito!!!";

        return view('masterBien');

  	}

  	public function iniciar(Request $request){

  		$username = $request->username;
  		$password = $request->password;
  		$val = false;

  	//	print_r($username);
  	//	print_r($password);

  		if (Session::has('matrizUsuario')) {

  			foreach (Session::get('matrizUsuario') as $matriz) {
  				if ($username==$matriz['nickName'] && $password == $matriz['contraseña']) {
  					$usuarios = Session::get('usuarios');
  					$usuarios = array('nickName' => $matriz['nickName'],
                     'nombre' => $matriz['nombre'],
                     'apellido' => $matriz['apellido']
  					);
  					Session::put('usuarios',$usuarios);

  					$val = true;
    			}
  			}


  			if ($val == true) {
  				 return view('bienvenido');
  			}
  			else{
  				return view('malIngreso');
  			}

  		  
  		}
  		
    }


}