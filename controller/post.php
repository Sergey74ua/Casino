<?php #Casino

require_once('model/model.php');

class Post {

    public function __construct() {
        if(array_key_exists('newGame', $_POST))
            $this->newGame();
        if(array_key_exists('bet', $_POST))
            $this->getSector();
        if(array_key_exists('reset', $_POST))
            $this->resetStat();
        if(array_key_exists('recovery', $_POST))
            $this->migration();
    }

    //ЗАГОТОВКА ПОД НОВУЮ ИГРУ
    public function newGame() {
        require_once('model/game.php');
        $game = new Game();
        $game->addGame('Tester');
        unset($game);
    }

    //Добавляем рандом в статистику БД
    public function getSector() {
        require_once('model/game.php');
        $game = new Game();
        $game->getSector();
        unset($game);
    }

    //Обнуление статистики
    public function resetStat() {
        require_once('model/roulette.php');
        $roulette = new Roulette();
        $roulette->resetStat();
        unset($roulette);
    }
    
    //Сброс базы данных
    public function migration() {
        unlink('model/data/casino.sqlite');  // ОПАСНОЕ удаление БД
        require_once('model/data/migration.php');
        $migration = new Migration();
        unset($migration);
    }

}

?>