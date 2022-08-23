<?php
    /*
        КЛАССЫ:
        - Модель
        - Представление
        - Контроль
        1. Связь с БД
        2. Миграция(заполнение) БД (для админа)
        3. Игра (со списком игроков)
        4. Игрок
        5. Админ?
        6. Рулетка?
    */
    //Активайия сессий
    session_start();

    //База данных
    $db='model/casino.sqlite';
    
    include_once('model/admin.php');
    $dateBase=new DateBase($db);
    /*
    $dateBase->addUser('Sergey', '123456', 'p1.jpg', 1000);
    $dateBase->addUser('Вася');
    */

    include_once('control/function.php');

    include_once('view/header.php');
?>

<main class='row'>
    <section id='left' class='col'>
        <article id='roulette'>
            <p>Рулетка</p>
            <form method="post">
                <input type="submit" name="bet" value="Go!" /><br/><br/>
                <input type="submit" name="reset" value="reset" /><br/><br/>
                <input type="submit" name="recovery" value="recovery" /><br/>
            </form>
            <div id='sector'>
                <p>Сектор</p>
                <? echo $sector ?>
            </div>
        </article>
        <article id='statistics'>
            <p>Статистика</p>
            <? statistics($db); ?>
        </article>
    </section>
    <section id='right' class='col'>
        <div id='room' class='row'>
            <article class='col'>
                <p>Стол № 1</p>
                <div id='players' class='row'>
                    <article class='player'>игрок 1</article>
                    <article class='player'>игрок 2</article>
                    <article class='player'>игрок 3</article>
                    <article class='player'>игрок 4</article>
                    <article class='player'>игрок 5</article>
                </div>
            </article>
            <article id='profile'>
                <p>Профиль</p>
            </article>
        </div>
        <article id='betting' class='row'>
            <p>Ставки</p>
        </article>
        <article id='bank' class='row'>
            <p>Банк</p>
        </article>
    </section>
</main>

<? include_once('view/footer.php'); ?>