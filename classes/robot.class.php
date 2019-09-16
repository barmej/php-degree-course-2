<?php

class Robot{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    function ask($question){
        echo "You asked {$this->name} the question: {$question}";
    }

}

$ahmad = new Robot("Ahmad");

$ahmad->ask("How old are you?");

?>