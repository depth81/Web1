<?php

    include("BaseDatos.php");

    //Recibo el id del registro que voy a eliminar por la URL(GET)
    $idEliminar = ($_GET["id"]);

    //Crear un objeto tipo BaseDatos
    $transaccion = new BaseDatos();

    //Crear la consulta SQL para eliminar
    $consultaSQL = "DELETE FROM usuarios WHERE idUsuario='$idEliminar'";

    //Llamar o ejecutar el metodo para eliminar datos
    $transaccion -> eliminarDatos($consultaSQL);

?>