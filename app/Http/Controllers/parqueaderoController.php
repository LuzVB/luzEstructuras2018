<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Session;
use\SplDoublyLinkedList;
use\SplFixedArray;
use\Splstack;

class parqueaderoController extends Controller
{
    public function datos(Request $request){
    	
    	  $nombre = $request->nombre;
        $dueño = $request->dueño;
        $AuxMatriz;
        $encontrado=0;
        $cont1 = 0;


        if(Session::has('matriz')){
 	        $auxMatriz=Session::get('matriz') ;
  		  for ($i=0; $i <sizeof($auxMatriz) ; $i++) { 
       
      		if ($auxMatriz[$i]['nombre']==$nombre) {
       		 $encontrado=1;
        	 return view('parqueadero/errorPlaca');
      	    }

    	}
       }
      
     
    if(Session::has('matriz')){
     $auxMatriz2[]=array('elemntos' => Session::get('matriz'),);


     foreach ($auxMatriz2 as $key => $value) {
         	foreach ($value as $key2 => $valor) {
         		
         	  foreach ($valor as $key3 => $valor2 ) {
         	  	
         	  	foreach ($valor2 as $key4 => $valor3) {
         	  		//print_r($valor3);
         	  		$cont1 = $cont1+1;
         	  	}
         	   
         	  }
         	}
         }

        if ($cont1 > 9) {
        	 return view('parqueadero/errorCupo');
        }
     }

    if ($encontrado == 0 && $cont1 < 10) {
      	if(Session::has('matriz')){
            
            $dato = Session::get('matriz');
            $dato[] = array( //agrego un nuevo elemento a la matrix
                'nombre'=>$nombre,  
                //'contador'=>$final,
            );
            Session::put('matriz', $dato);  
            
            //Se inserto un nuevo valor
        }else{
            
            $matriz[]=array(
            'nombre'=>$nombre,  
           // 'contador'=>$final = 1,
            
            );
        Session::put('matriz',$matriz);
        //Se creo la variable de session
 	    }
     }
  //   print_r($cont1);

  
    return view('parqueadero/pedirDatos');
    
    }

    public function salida(Request $request){

        $salir=$request->salir;
        $segPila = new Splstack(10);
        $segPila2 = new Splstack(10);
        $retirado = new Splstack();
        $pilaOrd = new Splstack();
        $encontrado = false;
        $data = [];
        $data2 = [];
        $busqueda = [];
        $cantidad = 0;
        $cantidad3 = 0;;


        if(Session::has('matriz')){

   		  $pilaAux = new Splstack(10);
  		  $auxMatriz=Session::get('matriz'); 
          $long1 = sizeof($auxMatriz);
           //Creacion de la pila 
  		  for ($i=0; $i <$long1; $i++) { 
  		 	$pilaAux->push($auxMatriz[$i]);
   		  	$pilaAux->next();  
   		  }

   		/*   for ($i=0; $i <sizeof($pilaAux) ; $i++) { 
       		   $matrizActualizada[$i]=$pilaAux->offsetget($i);
          }       

          Session::put('pila',$matrizActualizada);  
          return view('parqueadero/pedirDatos');*/

        $long2 = sizeof($pilaAux);
   		  for($i=0; $i<$long2;$i++){
     		 $array = $pilaAux->top();//extraigo ese nodo en una var.
      	 	if ($array['nombre']==$salir) {//Busco la cédula
      		  $retirado = $pilaAux->pop();
      		  $encontrado = true;
     		}
     		else{
     			$data = $pilaAux->pop();
 
     			if ($encontrado == true) {
                    $segPila->push($data);
                    $segPila->next();
                    // buscar como guardar estos valores en una matriz y que se guarder cada vez que se hace un cargar de pagina
     			}

                $segPila2->push($data);
                $segPila2->next();
     		}
     	  }//fin for
       
       $long3 = sizeof($segPila);

     	 for ($i=0; $i < $long3;$i++){
     	  	$pilaOrd->push($segPila[$i]);
     	  	$pilaOrd->next();
     	 }

     	 // $listaAux->rewind();
       	  $matrizActualizada;//Envío una matriz
       	  $matrizActualizada2;//Envío una matriz
          //dd(sizeof($segPila));

          $longt = sizeof($segPila);

         
            for ($i=0; $i < $longt ; $i++) { 
             $matrizActualizada[$i]=$segPila->offsetget($i);
            }



          // conteo de salidas 
          if(Session::has('acumulador')){
          
            $dato2 = Session::get('acumulador');

            $dato2[] = array('salir'=>$matrizActualizada,);
            Session::put('acumulador', $dato2);

           }else{
            

         	  $acumulador[] = array('salir'=>$matrizActualizada,);
         	  Session::put('acumulador',$acumulador);
       
 	      }

          for ($i=0; $i <sizeof($segPila2) ; $i++) { 
       		   $matrizActualizada2[$i]=$segPila2->offsetget($i);
          }      

          
          Session::put('matriz',$matrizActualizada2); 


          $cont = sizeof(Session::get('acumulador'));

          $busqueda[]=Session::get('acumulador');
    

         foreach ($busqueda as $key => $value) {
         	foreach ($value as $key2 => $valor) {
         	  foreach ($valor as $key3 => $valor2 ) {
         	  	foreach ($valor2 as $key4 => $valor3) {
         	  		//print_r($valor3);
         	  		foreach ($valor3 as $key5 => $value4) {
         	  	//	print_r($value4);

         	    	 if($salir == $value4){
             	  	   $cantidad = $cantidad+1;
         		  	 }
         		  	 

         	  		}
         	  	}
         	   
         	  }
         	}
         }

        if(Session::has('pila')){
            
            $dato4 = Session::get('pila');
            $dato4[] = array( //agrego un nuevo elemento a la matrix
                'nombre'=>$salir, 
                'cantidad'=>$cantidad,
               // 'contador'=>$final,
            );
            Session::put('pila',$dato4); 
            
            //Se inserto un nuevo valor
        }
        else{
            
             $dato5[] = array( //agrego un nuevo elemento a la matrix
                'nombre'=>$salir, 
                'cantidad'=>$cantidad,
               // 'contador'=>$final,
            );
            Session::put('pila',$dato5); 
        
        //Se creo la variable de session
 	    }

 	    $busqueda2[]=Session::get('pila');
         foreach ($busqueda2 as $llave => $val) {
         	foreach ($val as $llave2 => $val2) {
             
         	 foreach ($val2 as $llave3 => $val3) {
         	  // print_r($val3);
         	  	$cantidad3 = $cantidad3 + 1;
         	  	/*foreach ($valor2 as $key4 => $valor3) {
         	  		print_r($valor3);
         	  		/*foreach ($valor3 as $key5 => $value4) {
         	  		// print_r($value4);
         	    	 //if($salir == $value4){
             	  	   $cantidad3 = $cantidad3*5000;
         		  	 //}

         	  		}
         	  	}*/
         	  }
         	}
         }
         $numSalida = $cantidad3/2;
         
         

        $cobro = Session::get('cobro');
        $cobro = $numSalida*5000;
        Session::put('cobro',$cobro);
       // print_r(Session::get('cobro'));
        return view('parqueadero/pedirDatos');
        }//fin if 

    }

}
