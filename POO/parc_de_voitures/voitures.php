<?php

class voitures{
    private $immatriculation;
    private $mise_en_circulation;
    public $kilometrage;
    private $modele;
    private $marque;
    public $couleur;
    public $poids;
    public $image;

    public function __construct($marque,$modele,$couleur,$poids,$immatriculation,$kilometrage,$mise_en_circulation,$image){
        
        $this->marque=$marque;
        $this->modele=$modele;
        $this->couleur=$couleur;
        $this->poids=$poids;
        $this->immatriculation=$immatriculation;
        $this->kilometrage=$kilometrage;
        $this->mise_en_circulation=$mise_en_circulation;
        $this->image=$image;
        
       
    }
    function get_marque(){
        if ($this->marque=="Audi"){
            return "reserved";
        }else{
            return "free";
        }
    }
    function get_poids(){
        if ($this->poids<= 3.5){
            return "This is an utility car.";
        }else{
            return "This is a commercial car.";
        }
    }
    function get_immatriculation(){
       $first2letters=substr($this->immatriculation,0,2);
        if($first2letters=="BE"){
            return "This car as a belgian license plate.";
        }elseif ($first2letters=="DE") {
            return "This car as a german license plate.";
        }elseif ($first2letters=="FR") {
            return "This car as a french license plate.";
        }

    }
    function get_kilometrage(){
        if ($this->kilometrage<100000){
            return "low";
        }elseif ($this->kilometrage>=100000) {
            return "middle";
        }else{
            return "high";
        }
    }
    function get_annee($mise_en_circulation){
        $age = date('Y') - date('Y', strtotime($mise_en_circulation));
        if(date('md') < date('md', strtotime($mise_en_circulation))){
 
         return "This car has " . $age - 1 . " years.";
        }else{
 
         return "This car has " . $age . " years.";
        }
    }
     public function get_img($image){

        echo '<img src=' . $image .'width=150px heigth=100px>';

   }
   public function table(){
       
    $reserved = $this->get_marque();
    $weight_status = $this->get_poids();
    $country = $this->get_immatriculation();
    $used= $this->get_kilometrage();
    $years = $this->get_annee($this->mise_en_circulation);

echo "<tr>
          <td><img src=$this->image></td>
          <td>$this->marque<br>$reserved</td>
          <td>$this->modele</td>
          <td>$this->couleur</td>
          <td>$this->immatriculation<br>$country</td>
          <td>$this->mise_en_circulation<br>$years</td>
          <td>$this->kilometrage $used</td>
          <td>$this->poids<br>$weight_status</td>
     </tr>";
} 


    
}

?>