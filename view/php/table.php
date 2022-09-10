<?php #Casino ?>

<article id='table'>
    <p>Рулетка</p>
    <form method="post">
        <input type="submit" name="bet" value="Go!" /><br/><br/>
    </form>
    <div id='sector'>
        <p>Сектор</p>
        <?php
            $game = new Game();
            echo $game->getSector();
        ?>
    </div>
</article>