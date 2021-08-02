<?php
session_start();
include './../app/config.php';
include  APP . '/Libraries/Route.php';
include  APP . '/Libraries/Controller.php';
include  APP . '/Libraries/database.php';
include  APP . '/Helpers/Url.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP7</title>
</head>
<body>
    <?php
        $rotas = new Route();
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</body>
</html>