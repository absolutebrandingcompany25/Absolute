
<?php
	$directorio = opendir("."); //ruta actual
	while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
	{
	    if ((!is_dir($archivo)) AND ($archivo!='index.php'))//verificamos si es o no un directorio
	    {
	        echo $archivo.'  <a href="'.$archivo . '">Ver >></a><br />';
	    }
	}
?>