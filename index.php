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


// 10) – Escriba un script PHP que utilice los operadores lógicos del lenguaje, realizando un
// comparativas del operador and (&&), or (||), xor y not (!) definiendo e inicializando dos variables
// para llevar a cabo las operaciones antes mencionadas. Deberá ir mostrando los resultados de
// cada operación en pantalla y también deberá documentar cada operación.

// 11) – Realice un script PHP que utilice la construcción if para determinar en que estación
// (verano, otoño, invierno y primavera) del año estamos de acuerdo al número de mes que se va a
// definir e inicializar una variable de nombre mes para llevar a cabo las operaciones de
// comparación. Deberá ir mostrando los resultados de cada operación en pantalla y también deberá
// documentar cada operación.

// 12) – Escriba un nuevo script PHP que realice la misma tarea del punto anterior pero
// utilizando la construcción if – elseif. Deberá ir mostrando los resultados de cada operación en
// pantalla y también deberá documentar cada operación.

// 13) – Realice un nuevo script PHP que permita determinar el día de la semana utilizando la
// estructura switch para tal fin, deberá declarar e inicializar una variable de tipo entera para guardar
// el número de día de la semana que comienza con el día Domingo y termina con el día Sábado
// (Domingo = 0, Lunes = 1, Martes = 2, etc.). Deberá ir mostrando los resultados de cada operación
// en pantalla y también deberá documentar cada operación.

// 14) – Realice un nuevo script PHP que recorra números del 1 al 100 y que calcule el doble
// de cada uno de ellos. Utilice la sentencia while para recorrer los mismos. Deberá ir mostrando los
// resultados de cada operación en pantalla y también deberá documentar cada operación.

// 15) – Escriba un nuevo script PHP que realice la misma tarea del punto anterior pero que
// utilice la sentencia do .. while para recorrer los mismos. Deberá ir mostrando los resultados de
// cada operación en pantalla y también deberá documentar cada operación.

// 16) – Para terminar con la práctica de esta clase realice un nuevo script PHP que recorra
// números del 1 al 100 y que calcule el cuadrado de cada uno de ellos. Utilice la sentencia for para
// recorrer los mismos. Deberá ir mostrando los resultados de cada operación en pantalla y también
// deberá documentar cada operación.

?>