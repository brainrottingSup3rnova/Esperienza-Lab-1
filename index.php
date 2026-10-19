<?php

require_once './vendor/autoload.php';

use app\infrastructure\jsonRequestRepository;
use app\application\getRequestsList;

$dataPath = './data/requests.json';
$repository = new jsonRequestRepository($dataPath);

$useCase = new getRequestsList($repository);
$richieste = $useCase->execute();

require_once './views/board.php';
?>


