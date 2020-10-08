<?php

class League
{
  private $name;
  private $teams; // stocke l ensemble des équipes qui font partir de cette league

  public function __construct($name)
  {
      $this->name = $name;
      $this->teams = [];
  }

  public function addTeam($team){
    $this->teams[] = $team;
  }

  public function getTeamCount(){
    return count($this->teams);
  }
}




































