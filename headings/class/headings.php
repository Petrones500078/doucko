<?php

 class Headings {
     private $text;
     private $level;

    //text = co je uvnitř toho nadpisu, level = typ nadpisu (h1, h2...h6)
    function __construct() {

    }
    
    public function nastav_nadpis($nadpis, $level){
        $this->text = $nadpis;
        $this->level = $level;
    }

    public function uka_nadpis(){
        echo '<h'.$this->level.'>'.$this->text.'</h'.$this->level.'><br>';
    }

 }

?>
