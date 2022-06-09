<?php
    echo('<h1> Conexión con Base de Datos</h1>');

    $user = 'root';
    $pass = '';
    $dbname = 'noticias';
    $host = 'localhost';

    $sql = 'SELECT * FROM roles';

    try {
        // Libreria PDO
        $conexionPDO = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $consulta = $conexionPDO->prepare($sql); // Elimino código malicioso
        $consulta->execute();  // Ejecuto la consulta
        $rows = $consulta->fetchAll(PDO::FETCH_ASSOC);  // Formatea como un array

        echo('<pre>');
        print_r($rows);
        echo('</pre>');

    } catch (PDOException $e) {
        echo( "Error: " . $e->getMessage() . "<br/>");
    }
?>