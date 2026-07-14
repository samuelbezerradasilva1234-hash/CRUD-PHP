<?php
$caminho = __DIR__ . '/config.php';
if(!file_exists($caminho)) {
    die("arquivo config.php nao encontrado. copie config.exemple.php para config.php e preencha suas credenciais.");

}
require $caminho;
