<?php

$arc = fopen("misArchivos/palabras.txt","r");

//echo fread($arc,filesize("misArchivos/palabras.txt"));

while(!feof($file))
{
 $texto += fgets($file);
}

$palabras = explode(" ",$texto);

echo $palabras[0];
echo $palabras[1];
echo $palabras[2];


fclose($arc);
?>