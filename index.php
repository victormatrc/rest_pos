<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

#ini_set('display_errors', 0);
#error_reporting(0);


# Require no autoload do composer
require './vendor/autoload.php';

# Require arquivo de configuração
require './config.php';

$app = new Slim\App(
    ["settings" => $config]
);

# Include arquivos que inclui todas as rotas
include './routes.php';

# Inicia a aplicação
$app->run();