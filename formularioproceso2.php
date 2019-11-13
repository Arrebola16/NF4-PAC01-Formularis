<?php
		$enlace = mysqli_connect("127.0.0.1", "alejandro", "root", "people");

		if (!$enlace) {
		    /*echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        */
		    exit;
		}

		

		mysqli_close($enlace);

?>
<?php
$db = mysqli_connect("127.0.0.1", "alejandro", "root", "people") or die ('Unable to connect.
Check your connection parameters.');
mysqli_select_db($db,'people') or die(mysqli_error($db));




?>

<html>
 <head>
  <title>Proceso Formulario</title>
  <style type="text/css">
 
  </style>
  </head>
  <body>
  
  <table>
       
<?php
$nombre=$_POST['name'];
$valor=$_POST['valor'];
$coment=$_POST['coment'];
$jug=$_POST['jugador'];
$plat=$_POST['plataforma'];
$select=$_POST['selector'];          
        
        
    echo($nombre. " " . $valor . " " . $coment . " " .$jug. " " .$plat. " " .$select);
   
   ?>
       

    
    
  
     
     
     </table>
     </body> </html>

     
    