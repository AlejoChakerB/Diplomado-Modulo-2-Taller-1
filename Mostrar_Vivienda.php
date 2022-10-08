


<h2>Registro de Seguro de Vivienda</h2>

<?php

if (isset($_POST['Enviar'])) {

   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $cedula = $_POST['cedula'];
   $asegurar = $_POST['asegurar'];
   $aseguradora = $_POST['aseguradora'];
   $residencia = $_POST['residencia'];
   $ciudad = $_POST['ciudad'];

   // valida los datos enviados
   //Verifica si la opcion 1 esta vacio
   if (empty($nombre)) {

      echo "<a href='Seguro_Vivienda.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('El campo esta vacio, Escriba un nombre ');
   }


   // verifica el nombre de aseguradora
   if (empty($apellido)) {
    echo "<a href='Seguro_Vivienda.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('Por favor ingrese el nombre de la apellido.');
   }

   // verifica la opcion 2
   if (empty($cedula)) {
    echo "<a href='Seguro_Vivienda.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('vacio cedula, intente nuevamente');
   }else if  (!is_numeric($cedula)){
      die(' El campo cedula nos es numero');
   }

   //Verifica si el campo cedula esta vacio
   if (empty($asegurar)) {
    echo "<a href='Seguro_Vivienda.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('Dinos qué deseas asegurar');
   }

   //Verifica si el campo cedula esta vacio
   if  (empty($aseguradora)){
    echo "<a href='Seguro_Vivienda.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('El campo aseguradora esta vacio');
   }

   //Verifica si el campo cedula esta vacio
   if (empty($residencia)) {
    echo "<a href='Seguro_Vivienda.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('El campo residencia esta vacio');
   }

   //Verifica si el campo cedula esta vacio
   if (empty($ciudad)) {
    echo "<a href='Seguro_Vivienda.php'> <H3>Atras</H3></a>";
      echo "<br>";
    die('El campo ciudad está vacio');
 }



   echo '<table border="2" cellspacing="2" cellpadding="2"> 
               <tr> 
                   <td> <font face="Arial">Nombre</font> </td> 
                   <td> <font face="Arial">Apellidos</font> </td> 
                   <td> <font face="Arial">Cedula</font> </td> 
                   <td> <font face="Arial">Que Desea Asegurar</font> </td> 
                   <td> <font face="Arial">Aseguradora</font> </td> 
                   <td> <font face="Arial">Residencia</font> </td> 
                   <td> <font face="Arial">Ciudad</font> </td> 
               </tr>';

   echo '<tr> 
   <td>' . $nombre . '</td> 
   <td>' . $apellido . '</td> 
                 <td>' . $cedula . '</td> 

                 <td>' . $asegurar . '</td> 
                 <td>' . $aseguradora . '</td> 
                 <td>' . $residencia . '</td>  
                 <td>' . $ciudad . '</td> 
             </tr>
             
             </table>';
   echo "<br>";
   echo "<hr>";
   echo "<a href='Seguro_Vivienda.php'>Regresar al Fomulario</a>";
}
