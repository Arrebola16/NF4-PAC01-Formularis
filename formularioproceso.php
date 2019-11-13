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
$nombre=$_POST['nombre'];
$valor=$_POST['rating'];
$coment=$_POST['comentario'];



?>

<html>
 <head>
  <title>Proceso Formulario</title>
  <style type="text/css">
 
  </style>
  </head>
  <body>
    <form action="formularioproceso2.php" method="post">
    <br>
    <tr>
     <td>Nombre del jugador</td>
     <td><input type="text" name="jugador" /></td>
    
    </tr>
    <tr>
    <td>Plataforma preferida</td>
     <td><input type="text" name="plataforma" /></td>
    
    </tr>
   
    <br>
  <table>
        
        
<?php
$nombre=$_POST['nombre'];
$valor=$_POST['rating'];
$coment=$_POST['comentario'];
        $table = "";

         $table .= '<input type="hidden" name="name" value="' .$nombre. '">';
          $table .= '<input type="hidden" name="valor" value="' .$valor. '">';
          $table .= '<input type="hidden" name="coment" value="' .$coment. '">';
       

        
        $table .="<select name = 'selector'>";
        $table.='<option value="' .$nombre. '">' .$nombre. '</option>';
        $table.='<option value="' .$valor. '">' .$valor. '</option>';
        $table.='<option value="' .$coment. '">' .$coment. '</option>';
        $table.=' </select> <td>
         <input type="submit" name="submit" value="Enviar" /> 
        </td>';
        $table.='  </form> </table> ';
        
        
    echo($table);
 
   ?>
       

    
    
  
     
     
     </table>
     </body> </html>

     
    
    
   
   
    
    
  

  
  

  
  
  
  
  
  
  
  
  