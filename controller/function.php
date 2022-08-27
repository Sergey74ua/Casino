<?php #Casino

    //ЗАГОТОВКА ПОД НОВУЮ ИГРУ
    if(array_key_exists('newGame', $_POST)) {
        require_once('model/game.php');
        $game = new Game();
        $game->addGame('Tester');
        unset($game);
    }

    //Добавляем рандом в статистику БД
    if(array_key_exists('bet', $_POST)) {
        require_once('model/game.php');
        $game = new Game();
        $game->getSector();
        unset($game);
    }

    //Обнуление статистики
    if(array_key_exists('reset', $_POST)) {
        require_once('model/roulette.php');
        $roulette = new Roulette();
        $roulette->resetStat();
        unset($roulette);
    }

    //Сброс базы данных
    if(array_key_exists('recovery', $_POST)) {
        unlink('model/data/casino.sqlite');  // ОПАСНОЕ удаление БД
        require_once('model/data/migration.php');
        $migration = new Migration();
        unset($migration);
    }

?>