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
$db = mysqli_connect("127.0.0.1", "alejandro", "root", "people") or die ('Unable to connect.
Check your connection parameters.');
mysqli_select_db($db,'people') or die(mysqli_error($db));
?>    
<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
 
  </style>
 </head>
 <body>
  <form action="formularioproceso.php" method="post">
   <table>
    <tr>
     <td>Nombre del juego</td>
     <td><input type="text" name="nombre" /></td>

    </tr> 
    <tr>
     <td> Valoracion: </td>
     <td>
     <input type="radio" name="rating" value="1">1</input>
     <input type="radio" name="rating" value="2">2</input>
     <input type="radio" name="rating" value="3">3</input>
     <input type="radio" name="rating" value="4">4</input>
     <input type="radio" name="rating" value="5">5</input>

     </td>
    <tr>
        <td>Comentario
        <br>
         <td><input type="text" name="comentario" /></td>

        <br>
        <td>
         <input type="submit" name="submit" value="Enviar" /> 
        </td>
       
    </tr>
    </tr>
    
   </table>
  </form>
 </body>
</html>


