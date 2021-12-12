<?php 
    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

    if (!empty($_POST['url'])) {
        $lineas = file($_POST['url'], false, stream_context_create($arrContextOptions));
        foreach ($lineas as $num_linea => $linea) {
            echo htmlspecialchars($linea);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Obtener HTML</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="url" placeholder="URL de Página">
        <input type="submit" value="Obtener HTML">
    </form>
</body>
</html>