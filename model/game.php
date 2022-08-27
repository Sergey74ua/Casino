<?php #Casino

require_once('model/model.php');

class Game extends Model {

    private $sql;
    
    public $sector;

    public function __construct() {
        parent::__construct();
        $this->sql = '';
        $this->sector = 'начните игру';
    }

    //Добавляем игру
    public function addGame($creator='anonym') {
        $this->sql = "
            INSERT INTO `Game` (creator) VALUES 
                ('$creator')
        ";
        $this->inDB($this->sql);
        /*$this->sql = "
            SELECT id FROM `Game` WHERE creator = '$creator' LIMIT 1
        ";
        $idGame = $this->outDB($this->sql);
        return $idGame;*/
    }

    //Добавляем игрока
    #public function addPlayer() {}

    //Выводим игрока
    #public function delPlayer() {}

    //Принимаем(обновляем) ставку
    #public function addBet() {}

    //Вращаем рулетку
    public function getSector() {
        $this->sector = rand(0, 36);

        $this->sql = "
            UPDATE `Game` SET sector = $this->sector WHERE id = 1
        ";
        $this->inDB($this->sql);

        require_once('model/roulette.php');  // ФИГНЯ
        $roulette = new Roulette();
        $roulette->setStat($this->sector);
        unset($roulette);
        return $this->sector;
    }

}

?>