<?php #Casino

//Авторизация
if(array_key_exists('login', $_GET)) {
    require_once('model/game.php');
    $game = new Game();
    $game->getSector();
    unset($game);
}

//Личный кабинет

//Подключение к созданной игре

//Обменник фишек

?>