<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \SplDoublyLinkedList;
use \Session;


class ListaController extends Controller
{
    public function lista(Request $request){
      $nombre = $request->nombre;
    	$apellido= $request->apellido;
    	$edad = $request->edad;
    	$estatura = $request->estatura;
    	$numero = $request->numero;

    /*	$matriz=[];

    	$matriz[]=[
                   "Nombre"=> $nombre,
                   "Apellido"=>$apellido,
                   "Edad"=>$edad,
                   "Estatura"=>$estatura,
                   "Numero"=>$numero,
        ];

    	Session::put('key',$matriz);

    	$variable = Session::get('key');

    	echo $variable;*/

    	$matriz=[];

    	$matriz[]=[
                   "Nombre"=> $nombre,
                   "Apellido"=>$apellido,
                   "Edad"=>$edad,
                   "Estatura"=>$estatura,
                   "Numero"=>$numero,
      ];

      $matriz[]=[//7
            'Nombre'=>"david",
            'Apellido'=>"torres",
            'Edad'=>20,
            'Estatura'=>1.80,
            "Numero"=>2,
        ];

     /*   Session::put('key',$nombre);
    	$nombre = Session::get('key');
    	Session::put('key',$apellido);
    	$apellido = Session::get('key');
    	Session::put('key',$edad);
    	$edad = Session::get('key');
    	Session::put('key',$estatura);
    	$estatura = Session::get('key');
    	Session::put('key',$numero);
    	$numero = Session::get('key');*/


  /*    $list = new SplDoublyLinkedList();
			$list->push($matriz[1]);
			$list->push($apellido);
			$list->push($edad);
			$list->push($estatura);
			$list->push($numero);


			echo "Mostrar"."<br>";
			$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
      echo $list;
	/*		for ($list->rewind(); $list->valid(); $list->next()) {
			    echo $list->current()."\n";
			}*/

      $a = new SplDoublyLinkedList;
      $arr=[1,2,3,4,5,6,7,8,9];
      for($i=0;$i<count($arr);$i++){
          $a->add($i,$arr[$i]);
      }

      $a->push(11); //push method
      $a->add(10,12); //add method must with index
      $a->shift(); //remove array first value
      $a->unshift(1); //add first value

      $a->rewind(); //initial from first

      echo "SplDoublyLinkedList array last/top value " .  $a->top() ." \n"."br";
      echo "SplDoublyLinkedList array count value " .  $a->count() ." \n"."br";
      echo "SplDoublyLinkedList array first/top value " . $a->bottom() . " \n\n"."br";

     while($a->valid()){ //check with valid method
       echo 'key ', $a->key(), ' value ', $a->current(),"\n"; //key and current method use here
       $a->next(); //next method use here
      }

$a->pop(); //remove array last value
print_r($a);
$s=$a->serialize();
echo $s;

/*Output
SplDoublyLinkedList array last/top value 12
SplDoublyLinkedList array count value 11
SplDoublyLinkedList array first/top value 1

key 0 value 1
key 1 value 2
key 2 value 3
key 3 value 4
key 4 value 5
key 5 value 6
key 6 value 7
key 7 value 8
key 8 value 9
key 9 value 11
key 10 value 12
SplDoublyLinkedList Object
(
    [flags:SplDoublyLinkedList:private] => 0
    [dllist:SplDoublyLinkedList:private] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
            [4] => 5
            [5] => 6
            [6] => 7
            [7] => 8
            [8] => 9
            [9] => 11
        )

)
i:0;:i:1;:i:2;:i:3;:i:4;:i:5;:i:6;:i:7;:i:8;:i:9;:i:11;
*/

    }
}
