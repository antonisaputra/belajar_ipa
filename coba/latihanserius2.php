<?php

$posPokemen = $_POST['pokemon'];

$getPokemon = file_get_contents($posPokemen);
$getPokemonArray = json_decode($getPokemon, true);
// $cobaarray = ['atoni','antoni'];
// var_dump($cobaarray);
var_dump($getPokemonArray['firmness']);