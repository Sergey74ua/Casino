<?php #Casino ?>

<article id='stat'>
    <p>Статистика</p>
    <form method="post">
        <input type="submit" name="reset" value="reset" /><br/><br/>
    </form>
    <?php
        echo "<div class='row' style='border: 1px solid lightgreen;'>";
        $roulette = new Roulette();
        $stat = $roulette->getStat();
        foreach($stat as $key => $elem) {
            echo '<div class="col" style="border: 1px solid grey;">';
            echo "<div>$key</div>";
            echo "<div>$elem</div>";
            echo '</div>';
        }
        echo '</div>';
    ?>
</article>