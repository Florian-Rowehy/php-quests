<?php 

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO
$indyWeapon = '???';
switch($opponentWeapon){
    case 'fists': 
        $indyWeapon = 'gun';
        break;
    case 'whip':
        $indyWeapon = 'fists';
        break;
    default:
        $indyWeapon = 'whip';
    break; 
}

echo 'Indy uses '. $indyWeapon . ' againsts ' . $opponentWeapon;