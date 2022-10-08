


<h2>Registro de Seguro Vehiculo</h2>

<?php

if (isset($_POST['enviar'])) {

   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $cedula = $_POST['cedula'];
   $position = $_POST['position'];
   $Tpropiedad = $_POST['Tpropiedad'];
   $position2 = $_POST['position2'];

   // valida los datos enviados
   //Verifica si la opcion 1 esta vacio
   if (empty($nombre)) {

      echo "<a href='Seguro_Vehiculo.php'> <H3>Atras</H3></a>";
      echo "<br>";
      die('El campo esta vacio, Escriba un nombre ');
   }


   // verifica el nombre de aseguradora
   if (empty($apellido)) {
      die('Por favor ingrese el nombre de la apellido.');
   }

   // verifica la opcion 2
   if (empty($cedula)) {
      die('vacio cedula, intente nuevamente');
   }else if  (!is_numeric($cedula)){
      die(' El campo cedula nos es numero');
   }

   //Verifica si el campo cedula esta vacio
   if (empty($position)) {
      die('seleccione una aseguradora');
   }

   //Verifica si el campo cedula esta vacio
   if  (empty($Tpropiedad)){
      die('esta vacio');
   } else if (!preg_match('/[A-Z]/', $Tpropiedad)) {
      die('El campo Tarjeta Propiedad debe  Mayuscula');
   }

   //Verifica si el campo cedula esta vacio
   if (empty($position2)) {
      die('ta vacio');
   }



   echo '<table border="2" cellspacing="2" cellpadding="2"> 
               <tr> 
                   <td> <font face="Arial">Nombre</font> </td> 
                   <td> <font face="Arial">Apellidos</font> </td> 
                   <td> <font face="Arial">Cedula</font> </td> 
                   <td> <font face="Arial">Aseguradora</font> </td> 
                   <td> <font face="Arial">Tarjeta Propiedad</font> </td> 
                   <td> <font face="Arial">Zona de Circulacion</font> </td> 
               </tr>';

   echo '<tr> 
   <td>' . $nombre . '</td> 
   <td>' . $apellido . '</td> 
                 <td>' . $cedula . '</td> 

                 <td>' . $position . '</td> 
                 <td>' . $Tpropiedad . '</td> 
                 <td>' . $position2 . '</td>  
             </tr>
             
             </table>';
   echo "<br>";
   echo "<hr>";
   echo "<a href='Seguro_Vehiculo.php'>Regresar al Fomulario</a>";
}
