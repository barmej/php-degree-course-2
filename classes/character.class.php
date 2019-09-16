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

?>