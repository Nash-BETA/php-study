<?php
require_once('superclass.php');

class topPerson extends Person{

    public function work(){
        print "<a>{$this->lastname}aaaa</a>". "\n";
    }
}



?>