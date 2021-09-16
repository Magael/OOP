<?php
class Form{
    private $data;
    public $nom;
    public $prenom;
    public $country;
                

    public function __construct($data){
        $this->data =$data;
    }
    public function create(){
        echo '<form action="" method="post">';
    }

    public function input($nom,$prenom){
        echo '<input type="text" name="'. $nom .'"><br>';
        echo '<input type="text" name="'. $prenom .'"><br>';

    }
    public function radio(){
        echo '<input type="radio" name="gender" value="male">male';
        echo '<input type="radio" name="gender" value="female">female';

    }
    public function select($country){
       
        echo '<select name"country"><option value="country">Choississez un pays:</option></select><br>';
       

    }
    public function check(){
        echo '<input type="checkbox" name="vehicule" value="velo">Vélo';
        echo '<input type="checkbox" name="vehicule" value="voiture">Voiture';
    }
    public function textarea(){
        echo '<textarea name="message" rows="10" cols="30"></textarea><br>';
    }
   
    
    
    public function submit(){
        echo '<button type="submit">Envoyer</button><br>';
    }
}
class html{
       
    public function css(){
        echo '<link rel="stylesheet" href="styles.css">';
    }

    public function meta(){
        echo '<meta charset="UTF-8">';
    }
    public function img(){
        echo '<img src="/randonnee/assets/img/guide-voyage-la-reunion.jpg" alt="Reunion"><br>';
    }
    public function link(){
        echo '<a href="https://www.w3schools.com/">Visit W3Schools.com!</a>';
    }
    public function java(){
        echo'<script>
        document.getElementById("demo").innerHTML = "Hello JavaScript!";
        </script>';
    }

}
class Validator{

}


?>
