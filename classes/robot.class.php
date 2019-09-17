<?php

class Robot{
    public $name;
    private $color;

    public function __construct($name){
        $this->name = $name;
    }

    function ask($question){
        if($question == "من أنت؟") { echo "أنا {$this->name}"; }
        else if($question == "كيف حالك؟") { echo "بخير"; }
        else if($question == "من برمجك؟") { echo "مناور"; }
        else{ echo "آسف لم أفهمك!"; }
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

?>