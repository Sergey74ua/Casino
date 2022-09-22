<?php #Casino ?>

<article id='profile'>
    <p>Профиль</p>
    <?php
        //require_once('controller/post.php');
        //$post = new Post();
        if (isset($_COOKIE['name']))
            echo $_COOKIE['name'];
        else
            echo 'неизвестный';
    ?>
    <form method="post">
        <input type="text" placeholder='логин' />
        <input type="text" placeholder="пароль" />
        <br/>
        <input type="submit" name="authorization" value="вход" />
        <input type="submit" name="registration" value="регистрация" />
        <br/>
        <input type="submit" name="recovery" value="recovery" />
        <br/>
    </form>
</article>