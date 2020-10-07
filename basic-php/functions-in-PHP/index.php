<?php

function writeSecretSentence(string $animal, string $object) :string {
    return $animal . ' s\'incline face à ' . $object .'.' ;
}
$animal = 'Le singe';
$object = 'la lune';

echo writeSecretSentence($animal, $object);