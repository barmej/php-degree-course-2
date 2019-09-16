<?php

class Character{
    public $type;
    public $health;
    public $power;

    function __construct($type, $health, $power){
        $this->type=$type;
        $this->health=$health;
        $this->power = $power;
    }

    public function eat(){
        echo "أنا أكل";
    }

    public function sleep(){
        echo "المحارب نائم";
    }

    public function fight(){
        echo "المحارب مشغول";
    }

    public function who(){
        echo "أنا {$this->type} و قوتي هي {$this->power}";
    }


}

$hero = new Character("البطل",300,200);

$hero_assistant = new Character("مساعد البطل",100,100);

$villain = new Character("الشرير",200,300);

$hero->who();

echo "<br>";

$hero_assistant->who();

echo "<br>";

$villain->who();


?>