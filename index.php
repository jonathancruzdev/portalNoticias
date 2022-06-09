<?php
    require_once('app/conexionPDO.php');
    require_once('partes/header.html');
    
    $sql = 'SELECT * FROM noticias';
    $rows = obtenerRows($sql);

    echo('<div class="row p-4">');
    for ($i=0; $i < count($rows) ; $i++) {  // Recorro el array asociativo
          // print_r($rows[$i]);
            // Genero el código HTML desde PHP con los datos de la DB
        echo('<div class="card col-md-4 m-3">');
        echo('<h2>' . $rows[$i]['titulo'] . '</h2>'   );
        echo('<strong>' . $rows[$i]['bajada'] . '</strong>' );
        echo('<p>' . $rows[$i]['descripcion'] . '</p>' );

        echo('</div>');
    }
    echo('</div >');


    require_once('pages/inicio.html');

    require_once('partes/footer.html');
?>