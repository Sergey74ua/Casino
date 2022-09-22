<?php #Casino

    error_reporting(E_ALL);
    setcookie('name', 'Sergey', time()+24*60*60); //проба
    session_start();

    //Model
    require_once('model/roulette.php');
    require_once('model/user.php');
    require_once('model/game.php');

    //Control
    require_once('controller/cookie.php');
    require_once('controller/get.php');
    require_once('controller/post.php'); //вывод $sector перекрывается в модели

    //View
    require_once('view/header.php');
    require_once('view/main.php');
    require_once('view/footer.php');

    //Автообновление страницы
    //header("Refresh: 2");
?>