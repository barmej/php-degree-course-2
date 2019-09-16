<?php

class Character{
    public $type;
    public $health;
    public $power;

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

$hero = new Character();
$hero->type="بطل";
$hero->health="200";
$hero->power="300";

$villain = new Character();
$villain->type="شرير";
$villain->health="3000";
$villain->power="2000";

$hero->who();

echo "<br>";

$villain->who();

?>