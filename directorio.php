<?php
$directorio = opendir("./XML_Charter/"); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
        echo $archivo . "<br />";
    }
}

/* Codigo para listar Directorios 2
echo "<h3>Index</h3>\n";
echo "<table>\n";
$directorio = opendir(".");
while ($archivo = readdir($directorio))
   {
   $nombreArch = ucwords($archivo);
   $nombreArch = str_replace("..", "Atras", $nombreArch);
   echo "<tr>\n<td>\n<a href='$archivo'>\n";
   echo "<img src='./imagenes/carpeta.png' alt='Ver $nombreArch'";
   echo " border=0>\n";
   echo "<b>&nbsp;$nombreArch</b></a></td>\n";
   echo "\n</tr>\n";
   }
closedir($directorio); 
echo "</table>\n";
*/

?>