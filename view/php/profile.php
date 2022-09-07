<?php #Casino ?>

<article id='profile'>
    <p>Профиль</p>
    <?php
        if (isset($_COOKIE['name']))
            echo $_COOKIE['name'];
        else
            echo 'неизвестный';
    ?>
</article>