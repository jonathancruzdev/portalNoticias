<?php

    function obtenerRows($sql){
        $user = 'root';
        $pass = '';
        $dbname = 'noticias';
        $host = 'localhost';

        try {
            // Libreria PDO
            $conexionPDO = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $consulta = $conexionPDO->prepare($sql); // Elimino código malicioso
            $consulta->execute();  // Ejecuto la consulta
            $rows = $consulta->fetchAll(PDO::FETCH_ASSOC);  // Formatea como un array
            return $rows;
    
        } catch (PDOException $e) {
            echo( "Error: " . $e->getMessage() . "<br/>");
        }
    }

    function insertarRow($sql){
        echo('Guardando datos');
    }
?>