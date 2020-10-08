<?php
require_once "Team.php";

//-----c
class Person
{
  private $name;

  public function __construct($name = "Ali") // par defaut
  {
    $this->name = $name;
  }

  public function addfavorite(Team $team)
  {
    $team->getAfavorite();
  }
}