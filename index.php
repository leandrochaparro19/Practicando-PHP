<?php
//guia practica-1  php

// 1- Realice un script PHP que permita mostrar las características de interprete PHP
// utilizando la función phpinfo().

echo "<br> 1- <br>";
phpinfo();

// 2) - Realice un script que permita mostrar en pantalla el siguiente texto: Bienvenido al
// lenguaje PHP!!!. Recuerde utilizar etiquetas estándares y la construcción echo.
echo "<br> 2- <br>";
echo "Bienvenido al lenguaje PHP!!!<br>";

// 3) - Edite el script anterior y agregue una nueva sentencia que muestre el siguiente texto:
// PHP es un lenguaje de programación interpretado que se ejecuta del lado del servidor. Pero ahora
// utilice la función print() para mostrar el texto.

echo "<br> 3- <br>";
print("PHP es un lenguaje de programación interpretado que se ejecuta del lado del servidor <br>");

echo "<br> 4- En los comentarios del codigo! <br>";

// la instruccion echo permite mostrar por pantalla el string pasado como parametros.
// print() a diferencia de echo es una funcion, esta trabaja igual que la instruccion echo 

echo "<br> 5- <br>";
// 5) – Escriba un script PHP que permita declarar e inicializar variables de los siguientes
// tipos: interger, float, string y boolean. Luego muestre en pantalla el valor de cada una de las
// variables antes mencionadas.

$entero = 5;
$flotante = 5.9;
$cadena = "Hola mundo";
$booleano =True;


print("Entera:".$entero ."<br> Flotante:". $flotante."<br>  Cadena:".$cadena."<br> Booleano:".$booleano."<br>");

echo "<br> 6- <br>";
// 6) – Editar el script PHP del punto anterior y verifique que cada variable es del tipo
// declarado utilizando las funciones para tal caso (is_int(), is_float(), is_string(), etc.). Luego
// notifique por pantalla la verificación de cada una de las variables.

if(is_int($entero)){
    echo "Es un entero! <br>";
}

if(is_float($flotante)){
    echo "Es un flotante! <br>";
}

if(is_string($cadena)){
    echo "Es un String! <br>";
}

if(is_bool($booleano)){
    echo "Es un booleano! <br>";
}

// 7) – Escriba un script PHP que utilice los operadores matemáticos del lenguaje, realizando
// una suma, una resta, una multiplicación, una división y resto de la misma definiendo e
// inicializando dos variables para llevar a cabo las operaciones antes mencionadas. Deberá ir
// mostrando los resultados de cada operación en pantalla y también deberá documentar cada
// operación.

echo "<br> 7- <br>";
$num1= 5;
$num2= 9;

$suma = $num1 + $num2;
echo "La suma: ".$num1." + ".$num2." = ".$suma;

// 8) – Escriba un script PHP que utilice los operadores de comparación del lenguaje,
// realizando una comparación de igualdad, de desigualdad (distinto), una comparación de menor,
// una de mayor, menor igual y mayor igual definiendo e inicializando dos variables para llevar a
// cabo las operaciones antes mencionadas. Deberá utilizar la sentencia if para determinar en cada
// caso el valor de verdad de la comparación, mostrando los resultados de cada operación en
// pantalla y también deberá documentar cada operación.


// 9) – Escriba un script PHP que utilice los operadores de incremento del lenguaje,
// realizando un incremento de una variable y decremento de la misma. Deberá ir mostrando los
// resultados de cada operación en pantalla y también deberá documentar cada operación.

?>