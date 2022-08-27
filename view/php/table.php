<?php #Casino ?>

<article id='table'>
    <p>Рулетка</p>
    <form method="post">
        <input type="submit" name="bet" value="Go!" /><br/><br/>
        <input type="submit" name="reset" value="reset" /><br/><br/>
        <input type="submit" name="recovery" value="recovery" /><br/>
    </form>
    <div id='sector'>
        <p>Сектор</p>
        <? echo $game->getSector() ?>
    </div>
</article>