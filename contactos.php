<?php
    require_once('app/conexionPDO.php');
    require_once('partes/header.html');
    
    require_once('pages/contactos.html');

    $sql = "SELECT * FROM usuarios";
    $rows = obtenerRows($sql);

    print_r($rows);
    // Crear código HTML desde PHP

    require_once('partes/footer.html');
?>