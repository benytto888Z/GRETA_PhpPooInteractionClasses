<?php
 class Team
 {
   private $name;
   private $nombreFans = 0;

   public function __construct($name)
   {
     $this->name = $name;
   }

  
   /**
    * Get the value of name
    */ 
   public function getName()
   {
      return $this->name;
   }

   /**
    * Get the value of nombreFans
    */ 
   public function getNombreFans()
   {
      return $this->nombreFans;
   }

   //----C
   public function getAfavorite()
   {
     $this->nombreFans++;
   }
 }























