<?php #Casino

//Проверка авторизации
if(array_key_exists('auth', $_COOKIE)) { //$_SESSION
    require_once('model/game.php');
    $game = new Game();
    $game->getSector();
    unset($game);
}

//Проверка активной страницы

?>