<?php

namespace view;

class Profile {

    const PI = 3.14;

    public $name;
    private $life;
    protected $pos;

    public function __construct($name, $life=100) {
        $this -> name = $name;
        $this -> life = $life;
        $this -> pos = 200;
    }

    public function getLife($pass) {
        echo self:: PI, '<br/>';
        if ($pass == '123456')
            return $this -> life;
        else
            return 0;
    }

}
?>