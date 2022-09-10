<?php #Casino ?>

<article id='profile'>
    <p>Профиль</p>
    <?php
        if (isset($_COOKIE['name']))
            echo $_COOKIE['name'];
        else
            echo 'неизвестный';
    ?>
    <form method="post">
        <input type="submit" name="recovery" value="recovery" /><br/>
    </form>
</article>