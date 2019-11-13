<?php
		$enlace = mysqli_connect("127.0.0.1", "alejandro", "root", "people");

		if (!$enlace) {
		    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}

		echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
		echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

		mysqli_close($enlace);

?>

<?php

$db =  mysqli_connect("127.0.0.1", "alejandro", "root", "people") or die ('Unable to connect.
Check your connection parameters.');
mysqli_select_db($db,'people') or die(mysqli_error($db));
    $numero1= $_GET['numeroA'];
    $numero2= $_GET['numeroB'];
    $numero3= $_GET['numeroC'];
    $resultado=0;
    
        $resultado=$numero1 + $numero2 + $numero3;
        echo("el resultado es " . $resultado );
?>