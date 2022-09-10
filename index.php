<?php #Casino

    setcookie('name', 'Sergey', time()+24*60*60); //пробный тест
    session_start();

    //Model
    require_once('model/roulette.php');
    require_once('model/user.php');
    require_once('model/game.php');

    //View
    require_once('view/header.php');
    require_once('view/main.php');
    require_once('view/footer.php');

    //Control
    require_once('controller/get.php');
    require_once('controller/post.php'); //вывод $sector перекрывается в модели

    //Автообновление страницы
    //header("Refresh: 2");
?>