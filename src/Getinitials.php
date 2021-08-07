<?php

namespace Blackdante101\Getinitials;

class Getinitials
{
     public $value;
      public function __construct($string){
          $names = explode(" ",$string);
          $initials = array();
          foreach($names as $name)
          {
              array_push($initials,$name[0]);
          }
          $this->value = join("",$initials);
      }
      public function display(){
          echo $this->value;
      }
}
