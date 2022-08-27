<?php #Casino

    //Активация сессий
    session_start();

    //Model
    require_once('model/roulette.php');
    require_once('model/user.php');
    require_once('model/game.php');
    
    $roulette = new Roulette();
    $game = new Game();

    //View
    require_once('view/header.php');
    require_once('view/main.php');
    require_once('view/footer.php');
    
    //Control
    require_once('controller/function.php'); //вывод $sector перекрывается в модели

    //Автообновление страницы
    //header("Refresh: 2");
?>