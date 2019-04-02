<?php
 $funcion = $_GET['usuario'];
 $fichero=fopen('Usuarios.json','w+');
fwrite($fichero,$funcion);
?>
