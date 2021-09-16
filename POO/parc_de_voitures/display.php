<?php

class display{
    
    public $css; 
    public $meta;
   


   public function css(){

      return '<link rel="stylesheet" href="./style.css">';

   }

   public function meta(){

      echo '<meta charset="UTF-8">';
      echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
      echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">';

   }
   
}

?>