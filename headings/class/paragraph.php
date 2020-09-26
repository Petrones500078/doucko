<?php

 class Paragraph {
     private $text = 'ODSTAVEC';

    //text = co je uvnitř toho nadpisu, level = typ nadpisu (h1, h2...h6)
    function __construct() {

    }

    public function nastav_odstavec($odstavec){
        $this->text = $odstavec;
    }
    
    public function uka_odstavec(){
        echo '<p>'.$this->text.'</p><br>';
    }

 }

?>