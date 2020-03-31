<?php
require_once 'Bicycle.php';
require_once 'Voiteur.php';
$bike = new Bicycle('red');
$bike->setcolor("blue");
$bike->setcurrentspeed(15);
var_dump($bike);
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$voiteur = new Voiteur('red',4,1);
$voiteur->setCurrentSpeed(60);
var_dump($voiteur);
echo $voiteur->forward();
echo '<br> Vitesse du voiteur : ' . $voiteur->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du voiteur : ' . $voiteur->getCurrentSpeed() . ' km/h' . '<br>';
echo $voiteur->brake();





$voiteur = new Voiteur('bleu',5,2);
$voiteur->setCurrentSpeed(200);
var_dump($voiteur);
echo $voiteur->forward();
echo '<br> Vitesse du bleu voiteur : ' . $voiteur->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du bleu voiteur : ' . $voiteur->getCurrentSpeed() . ' km/h' . '<br>';
echo $voiteur->brake();