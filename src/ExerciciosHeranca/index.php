<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Personagem;
use App\Guerreiro;
use App\Mago;

$golem = new Personagem('Golem do clash royale');
$cavaleiro = new Guerreiro('Cavaleiro do clash royale');
$mago = new Mago('Patolino o mago');

echo "\n----------------------------- Cavaleiro -----------------------------\n" . PHP_EOL;
echo "Nome: " . $cavaleiro->getNome() . PHP_EOL;
echo "Energia disponivel: " . $cavaleiro->getEnergia() . PHP_EOL;
echo "\n";
for($i=0; $i!=6; $i++){
    echo $cavaleiro->atacar() . PHP_EOL;
}

echo "\n------------------------------- Mago -------------------------------\n" . PHP_EOL;
echo "Nome: " . $mago->getNome() . PHP_EOL;
echo "Energia disponivel: " . $mago->getEnergia() . PHP_EOL;
echo "\n";
for($i=0; $i!=4; $i++){
    echo $mago->atacar() . PHP_EOL;
}

?>