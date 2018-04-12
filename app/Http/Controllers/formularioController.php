<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    //

    public function formulario(Request $request){
    	$nombre = $request->nombre;
    	$apellido= $request->apellido;
    	$edad = $request->edad;
    	$estatura = $request->estatura;

        $contador1 = 0;
        $contador2 = 0;
        $contador3 = 0;
        $contador4 = 0;

        $matriz=[];

        $matriz[]=[ //1
            'nombre'=>"Luz",
            'apellido'=>"Velasquez",
            'edad'=>18,
            'estatura'=>1.56,
        ];

        $matriz[]=[//2
                'nombre'=>"valentina",
                'apellido'=>"Sarmiento",
                'edad'=>18,
                'estatura'=>1.60,
        ];

        $matriz[]=[ //3
            'nombre'=>"Luz",
            'apellido'=>"Velasquez",
            'edad'=>23,
            'estatura'=>1.46,
        ];
        $matriz[]=[ //4
            'nombre'=>"Luz",
            'apellido'=>"Bogota",
            'edad'=>11,
            'estatura'=>1.45,
        ];
        $matriz[]=[//5
            'nombre'=>"natalia",
            'apellido'=>"Bogota",
            'edad'=>19,
            'estatura'=>1.80,
        ];
        $matriz[]=[//6
            'nombre'=>"valentina",
            'apellido'=>"Ramirez",
            'edad'=>16,
            'estatura'=>1.66,
        ];
        $matriz[]=[//7
            'nombre'=>"david",
            'apellido'=>"torres",
            'edad'=>20,
            'estatura'=>1.80,
        ];
        $matriz[]=[//8
            'nombre'=>"Luz",
            'apellido'=>"Velasquez",
            'edad'=>13,
            'estatura'=>1.55,
        ];
        $matriz[]=[//9
            'nombre'=>"valentina",
            'apellido'=>"Ramirez",
            'edad'=>23,
            'estatura'=>1.70,
        ];
        $matriz[]=[//8
            'nombre'=>"Juan",
            'apellido'=>"Rodriguez",
            'edad'=>21,
            'estatura'=>1.76,
        ];
        $matriz[]=[//9
            'nombre'=>"david",
            'apellido'=>"torres",
            'edad'=>21,
            'estatura'=>1.76,
        ];
        $matriz[]=[//10
            'nombre'=>"Sofia",
            'apellido'=>"Velasquez",
            'edad'=>21,
            'estatura'=>1.76,
        ];

       $inf=[];

       foreach ($matriz as $indice => $valor) {
          /*  echo "Dato N°".($indice+1);
            echo "<br>";*/
            foreach ($valor as $key => $value) {
                if ($value == $nombre) {
                /* echo "Dato N°".($indice+1)."<br>";
                 echo $valor['nombre']."<br>";
                 echo $valor['apellido']."<br>";
                 echo $valor['edad']."<br>";
                 echo $valor['estatura']."<br>";*/

                 $inf[]=[
                   'nombre'=> $valor['nombre'],
                   'apellido'=>$valor['apellido'],
                   'edad'=>$valor['edad'],
                   'estatura'=>$valor['estatura'],
                 ];

                }
            }
        }

        $datos=[
            'personas'=>$inf
        ];
        
        return view('welcome',$datos); 
    }
}
