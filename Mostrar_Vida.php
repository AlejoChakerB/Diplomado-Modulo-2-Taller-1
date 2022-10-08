<h2>Registro de Seguro de Vida</h2>

<?php

if (isset($_POST['Enviar'])) {

   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $cedula = $_POST['cedula'];
   $genero = $_POST['genero'];
   $aseguradora = $_POST['aseguradora'];
   $residencia = $_POST['residencia'];
   $ciudad = $_POST['ciudad'];


   // valida los datos enviados
   //Verifica si la opcion 1 esta vacio
   if (empty($nombre)) {

      echo "<a href='Seguro_Vida.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('El campo esta vacio, Escriba un nombre ');
   }


   // verifica el nombre de apellido
   if (empty($apellido)) {
    echo "<a href='Seguro_Vida.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('Por favor ingrese el nombre de la apellido.');
   }

   // verifica la opcion 2
   if (empty($cedula)) {
    echo "<a href='Seguro_Vida.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('vacio cedula, intente nuevamente');
   }else if  (!is_numeric($cedula)){
      die(' El campo cedula nos es numero');
   }

   //Verifica si el campo genero esta vacio
   if (empty($genero)) {
    echo "<a href='Seguro_Vida.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('seleccione un genero');
   }

   //Verifica si el campo cedula esta vacio
   if  (empty($aseguradora)){
    echo "<a href='Seguro_Vida.php'> <H3>Atras</H3></a>";
      echo "<br>";
    die('Por favor seleccione una aseguradora.');
   }
   //Verifica si el campo cedula esta vacio
   if (empty($residencia)) {
    echo "<a href='Seguro_Vida.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('El campo residencia está vacio');
   }

    //Verifica si el campo cedula esta vacio
    if (empty($ciudad)) {
        echo "<a href='Seguro_Vida.php'> <H3>Atras</H3></a>";
      echo "<br>";
        die('Ingrese una ciudad');
     }


   echo '<table border="2" cellspacing="2" cellpadding="2"> 
               <tr> 
                   <td> <font face="Arial">Nombres</font> </td> 
                   <td> <font face="Arial">Apellidos</font> </td> 
                   <td> <font face="Arial">Cedula</font> </td> 
                   <td> <font face="Arial">Genero</font> </td> 
                   <td> <font face="Arial">Aseguradora</font> </td> 
                   <td> <font face="Arial">Direccion</font> </td> 
                   <td> <font face="Arial">Ciudad</font> </td> 
               </tr>';

   echo '<tr> 
   <td>' . $nombre . '</td> 
   <td>' . $apellido . '</td> 
                 <td>' . $cedula . '</td> 

                 <td>' . $genero . '</td> 
                 <td>' . $aseguradora . '</td> 
                 <td>' . $residencia . '</td> 
                 <td>' . $ciudad . '</td>  
             </tr>
             
             </table>';
   echo "<br>";
   echo "<hr>";
   echo "<a href='Seguro_Vida.php'>Regresar al Fomulario</a>";
}
