<?php
session_start();
require_once 'funciones_bd.php';
require_once 'funciones.php';


    $db = conectaBd();
        $id = $_SESSION['id'];

   
    
    $consulta = "DELETE from software
                WHERE id= :id";
    
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array( ":id" => $id))) {
            unset ($_SESSION['datos']);
            unset ($_SESSION['errores']);
            unset ($_SESSION['hayErrores']);
            
            $url = "listado_software.php";
            header('Location:'.$url);
    } else {
        print "<p>Error al crear el registro.</p>\n";
    }

    $db = null;


?>