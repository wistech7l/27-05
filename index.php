<?php
    include './lib/mysql.php';
    // $lista = listaPaises();
    $pais = buscarPaisNome('brasil');
    $lista = listaPaises();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1> Olá 
    <?php
        print_r($pais['nome'] . ' - ' . $pais['sigla']);
        echo ' </h1>';
        echo '<ul>';
        for($i = 0; $i < count($lista); $i++ ){
            print_r('<li>'.$lista[$i]['nome'].'</li>'); 
        }
        echo '</ul>';
    ?>
</body>
</html>
