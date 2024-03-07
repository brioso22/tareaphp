<?php
echo "<h1> Lista de funciones  </h1>";
echo "<br>";
echo "<ol>";

echo "<li>";
echo "strlen(): Devuelve la longitud de una cadena. Algunos parámetros que puede aceptar: (string y string como variable)";
echo "<br>";
echo "<img src = 'image1.png'>";
echo "</li>";

echo "<li>";
echo "strpos(): Encuentra la posición de la primera ocurrencia de una subcadena en una cadena. Algunos parámetros que puede aceptar: (string haystack, string needle [, int offset = 0 ]), (el simbolo de dolar lo omito por problemas de sintaxi)";
echo "<br>";
echo "<img src = 'image2.png'>";
echo "</li>";

echo "<li>";
echo "implode(): Une elementos de un array en una sola cadena. Algunos parámetros que puede aceptar: (string glue, array pieces)";
echo "<br>";
echo "<img src='image3.png'>";
echo "</li>";

echo "<li>";
echo "explode(): Divide una cadena en un array de cadenas mediante un delimitador.Algunos parámetros que puede aceptar: (string delimiter, string string [, int limit = PHP_INT_MAX ])";
echo "<br>";
echo "<img src='image4.png'>";
echo "</li>";

echo "<li>";
echo "substr(): Devuelve una parte de una cadena. Algunos parámetros que puede aceptar: (string string , int start [, int length ] )";
echo "<br>";
echo "<img src='image5.png'>";
echo "</li>";

echo "<li>";
echo "array_push(): Inserta uno o más elementos al final de un array.Algunos parámetros que puede aceptar: (array array , mixed value1 [, mixed $... ] )";
echo "<br>";
echo "<img src='image6.png'>";
echo "</li>";

echo "<li>";
echo "array_pop(): Extrae y devuelve el último elemento de un array.  Algunos parámetros que puede aceptar: (array & array como variable)";
echo "<br>";
echo "<img src='image7.png'>";
echo "</li>";

echo "<li>";
echo "file_get_contents(): Lee un archivo completo en una cadena.Algunos parámetros que puede aceptar: (string filename [, bool use_include_path = FALSE [, resource context [, int offset = -1 [, int maxlen ]]]] )";
echo "<br>";
echo "<img src='image8.png'>";
echo "</li>";

echo "<li>";
echo "json_encode(): Convierte una variable de PHP a su representación JSON. Algunos parámetros que puede aceptar: (mixed value [, int options = 0 [, int depth = 512 ]] )";
echo "<br>";
echo "<img src='image9.png'>";
echo "</li>";

echo "<li>";
echo "json_decode(): Convierte una cadena JSON en una variable de PHP. Algunos parámetros que puede aceptar: (string json [, bool assoc = FALSE [, int depth = 512 [, int options = 0 ]]] )";
echo "<br>";
echo "<img src='image10.png'>";
echo "</li>";

echo "</ol>";
?>