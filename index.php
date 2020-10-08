<?php


require_once "Team.php";
require_once "League.php";
require_once "Person.php";



$barcelona = new Team("Barcelona");
$realMadrid = new Team("RealMadrid");




echo $barcelona->getName().' a '.$barcelona->getNombreFans().' Fans'.PHP_EOL;
echo $realMadrid->getName().' a '.$realMadrid->getNombreFans().' Fans'.PHP_EOL;




//------B

$liga = new League("Liga");
$liga->addTeam($barcelona);
$liga->addTeam($realMadrid);

echo $liga->getTeamCount().PHP_EOL;


//-----C

$benj = new Person("Benjamin");
$eric = new Person("Eric");

$benj->addfavorite($realMadrid);
$eric->addfavorite($realMadrid);
$eric->addfavorite($barcelona);


echo $barcelona->getName().' a '.$barcelona->getNombreFans().' Fans'.PHP_EOL;
echo $realMadrid->getName().' a '.$realMadrid->getNombreFans().' Fans'.PHP_EOL;














