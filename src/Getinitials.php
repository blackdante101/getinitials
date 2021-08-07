<?php

namespace Getinitials\Getinitials;

class Getinitials
{
    public function __construct($string)
        {
         $names = explode(' ',$string);
         foreach($names as $name)
         {
             echo $name[0];
         }
        }
    }
}
