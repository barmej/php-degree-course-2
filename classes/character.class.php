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

    public function fight( $target ){

        while(true){
            $target->health -= $this->power;
            if( $target->health <= 0 ){ return "فاز المحارب {$this->type}!"; }

            $this->health -= $target->power;
            if( $this->health <= 0 ){ return "فاز المحارب {$this->type}!"; }

        }
        

    }

    public function who(){
        echo "أنا {$this->type} و قوتي هي {$this->power}";
    }


}

$hero = new Character("البطل",3000,200);

$villain = new Character("الشرير",2000,300);

echo $hero->fight($villain);

?>