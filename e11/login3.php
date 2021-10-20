<?php
  if(isset($_REQUEST["user"])){
    $usuario = $_REQUEST["user"];
  }else{
    $usuario = "";
  }
  echo "DNI del Usuario Seleccionado: $usuario";
?>
