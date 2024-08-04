<?php
if (isset($_GET['query'])) {
    $query = strtolower($_GET['query']);
    $sugerencias = ["tag1", "tag2", "tag3", "tag4", "tag5", "tag6"];  // Lista de sugerencias

    $resultados = array_filter($sugerencias, function($sugerencia) use ($query) {
        return strpos(strtolower($sugerencia), $query) !== false;
    });

    echo json_encode(array_values($resultados));
}
?>
