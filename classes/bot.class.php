<?php
include_once "robot.class.php";

class Bot extends Robot{
    private $mode;

    function __construct($name){
        parent::__construct($name);
    }

    function switchOn(){
        $this->mode="On";
        echo "Bot is switched on!";
    }

    function switchOff(){
        $this->mode="Off";
        echo "Bot is switched off!";
    }

    function ask($question){
        echo 'هذا الروبوت لا يمكنه الإجابه الآن';
    }
}

$first = new Bot("Saleh");

echo $first->ask("من أنت؟");

?>