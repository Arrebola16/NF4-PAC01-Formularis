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
    $a=0;
    $b=0;
    $c=0;


  
  
  
  ?>
  <html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
 
  </style>
 </head>
 <body>
  <form action="calculadora.php" method="get">
   <table>
    <tr>
     <td>Numero A: </td>
     <td><input type="number" name="numeroA" /></td>
    
    </tr>
    <tr>
     <td> Numero B;
      <td><input type="number" name="numeroB" /></td>

    </td>
    </tr>
    
     <tr>
        <td> Numero C;
        <td><input type="number" name="numeroC" /></td>
        </td>
     </tr>     
     
  
    
   </table>
   <input type="submit" name="submit" value="submit" />  
  </form>
 </body>
</html>