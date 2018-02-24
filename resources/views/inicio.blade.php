<!DOCTYPE html>
<html>

<head>
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/styles.css">

	<title>Estructuras de la informacion</title>
	
</head>

<body>
	
	<header>
		<div class="container1">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Estructuras de datos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Introduccion <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      	<a class="nav-link" href="#">clase 2<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      	<a class="nav-link" href="#">contactos<span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
 
		</div>
 
</header>

	<div class="container">
 	 <div class="row">
	   <div class="col-sm">
		<section class="articulos">
			<article>
				<h2>Definición</h2>
				<h3>Estructura de datos</h3>
				<br>
				<ul>
					<li>Son aquellas que nos permiten almacenar, manipular y ordenar los datos</li>
					<li>Son una colección de datos cuya organización se caracteriza por las funciones de acceso que se usan para almacenar y acceder elementos
                    individuales de datos.</li>
                    <li>Es una forma de como están organizado un conjunto de datos y como se
                   encuentran interconectados.</li>
                   <li>Estas estructuras solo existen en la memoria ram, cierras el programa o
                   liberas memoria y desaparecen todos los datos.</li>
                   <li>Función principal es buscar la eficiencia tanto en memoria como tiempos
                   de ejecución.</li>
				</ul>
			</article>
			<article>
				<h2>Importancia</h2><br>
				<p>La mayoría de las estructuras de datos
                   están inspiradas en la vida real y
                   usan los mismos términos la mayoría
                   de las veces.
               	<!--	<img src="imagenes/desLibros.jpg" class="rounded float-left" width="100" >
					<img src="imagenes/ordenLibros.jpg" class="rounded float-right" width="100">--></p><br>
          
			</article>
			<article>
                <h2>Manipulación de datos</h2>
				<h3>Operaciones</h3>
				<br>
			    <ul>
			    	<li>Búsqueda: Implica la localización de un registro caracterizado por una determinada clave o también el acceso a todos los registros que cumplan una o más condiciones.</li>
			    	<li>Inserción: Cuando añadimos nuevos registros a la estructura.</li>
			    	<li>Eliminación: Operación de borrado de un registro de la estructura.</li>
			    	<li>Ordenación: Es la operación de clasificar los registros conforme a un orden lógico determinado (por ejemplo, alfabéticamente, de acuerdo a una clave de nombre, o numérica, de acuerdo a alguna clave de número).</li>
			    	<li>Mezcla: Es la operación de combinar dos archivos previamente ordenados en unoúnico que también lo está.</li>

			    </ul>
			</article>
			<article>
				<h2>Clasificación</h2>
				<h3>Tipos de estructuras</h3><br>
				<h4>Primitivas</h4>
				<p>
                  Son primitivas aquellas que no están compuestas por otras estructuras de datos por ejemplo, enteros, booleanos y caracteres.</p><br>
                <h4>No Primitivas</h4>  
                <p>
                  Estructuras de datos se pueden construir de una o mas primitivas. Las estructuras de datos simples que consideramos se construyen a partir de estructuras primitivas y son: cadenas, arreglos y registros.</p><br>
                <h5>Lineales</h5>
                <ul>
                	<li>Derivados del concepto de secuencia (secuencias es un conjuntos de   elementos entre los que se establece una relación de predecesor y sucesor).</li>
                	<li>Desde el punto de vista de la informática, existen tres estructuras lineales especialmente importantes: las pilas, las colas y las listas.</li>
                	<li>Las operaciones básicas para dichas estructuras son:
                		<ul>
                			<li>
                			 crear la secuencia vacía
                			</li>
                			<li>
                			 añadir un elemento a la secuencia
                			</li>
                			<li>borrar un elemento a la secuencia</li>
                			<li>consultar un elemento de la secuencia</li>
                			<li>comprobar si la secuencia está vacía</li>

                		</ul>
                	</li>
                </ul>
                <ul><li>Definición:</li>
                	<ul>
                		<li>Pilas: las tres operaciones actúan sobre el final de la secuencia.</li>
                		<li>Colas: se añade por el final y se borra y consulta por el principio.</li>
                		<li>Listas: las tres operaciones se realizan sobre una posición privilegiada de la secuencia, la cual puede desplazarse</li>
            	    </ul>
                </ul>

                <h5>No Lineales</h5>   
                <ul>
                	<li>Estructuras de datos multienlazadas. Cada elemento puede estar enlazado a cualquier otro componentes.</li>
                	<li>En estas estructuras cada elemento puede tener varios elementos “siguientes”, lo cual introduce el concepto de estructuras de ramificación.</li>
                	<li>Estas estructuras de datos de ramificación son llamadas grafos y arboles.</li>
                	<li>Un grafo es un conjunto de puntos y un conjunto de líneas, con cada línea se une un punto a otro.</li><!--colocar un div que muestre las imagenes de un grafo y un arbol-->
                	<li>Un árbol es un grafo conexo, simple y aciclico. Un árbol no contiene ni ciclos ni bucles; existe una sola arista entre cualquier par de nodos.</li>
                </ul>
               </article>
                <article>
                <h2>Estáticas y dinámicas</h2><br>  
                <h3>Estáticas</h3> 
                <p>Son aquellas en las que se asigna una cantidad fija de memoria cuando la variable se declara. (en tiempo decompilación).</p> 
                <h3>Dinámicas</h3>
                <p>Son aquellas cuya ocupación en memoria pueden aumentar o disminuir en tiempo de ejecución.(en tiempo de ejecución).</p>
                </article>       
                
			
		</section>

  	   </div>
  	  <div class="col-sm">
       <aside>
		<h2>Ejemplos de estructuras</h3><br>
			<hr size="6px;"><br>	
			<a href="#">Operaciones</a><br><br>

			<?php
			 $arreglo = array("Luz","Maria","Sofia","Pepito");
			 echo "";
			 print_r($arreglo);
			 echo "<br><br>En este arreglo al aplicar la estructura de datos ya sean pilas,
			 colas o listas se pueden hacer las operaciones de crear, añadir, borrar, o
			 consultar";	
			?>
			<br><br><hr size="6px;"><br>
			<a href="#">Titulo</a><br><br>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus ornare condimentum sem. Nullam a eros. Vivamus vestibulum hendrerit arcu. Integer a orci. Morbi nonummy semper est. Donec at risus sed velit porta dictum. Maecenas condimentum orci aliquam nunc. Morbi nonummy tellus in nibh. Suspendisse orci eros, dapibus at, ultrices at, egestas ac, tortor. Suspendisse fringilla est id erat. Praesent et libero. Proin nisi felis, euismod a, tempus varius, elementum vel, nisl. Fusce non magna sit amet enim suscipit feugiat. Fusce et leo.</p>
		</aside>
   	  </div>
	 </div>
	</div>

	
      <footer>
		  <p>Luz Velasquez - Universidad de Cundinamarca - 2018</p>
	  </footer>
 

	

  		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>