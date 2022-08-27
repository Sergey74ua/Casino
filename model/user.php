<?php #Casino

require_once('model/model.php');

class User extends Model {

    private $sql;

    public function __construct() {
        parent::__construct();
        $this->sql = '';
    }

    //Добавляем игрока
    public function addUser($name='anonym', $pass='', $avatar='default.jpg', $money=0) {
        $this->sql = "
            INSERT INTO `User` (name, status, pass, avatar, money) VALUES 
                ('$name', 'gamer', '$pass', '$avatar', $money)
        ";
        $this->inDB($this->sql);
    }

    //Удаляем игрока

    //Обновляем банк и статистику игрока

}

?>