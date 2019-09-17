<?php

class Robot{
    public $name;
    private $color;

    public function __construct($name){
        $this->name = $name;
    }

    function ask($question){
        echo "You asked {$this->name} the question: {$question}";
    }

    function setColor($color){
        switch($color){
            case "red":
            case "blue":
            case "yellow":
                $this->color=$color;
                break;

            default:
                $this->color="white";
                break;
        }
    }

    function getColor(){
        return "The color of the robot is {$this->color}";
    }

}

$ahmad = new Robot("Ahmad");

$ahmad->setColor("red");

echo $ahmad->getColor();

?>