<?php #Casino ?>

<main class='row'>
    <section id='left' class='col'>
        <?php include_once('view/php/table.php'); ?>
        <article id='stat'>
            <p>Статистика</p>
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
    </section>
    <section id='right' class='col'>
        <div id='room' class='row'>
            <?php include_once('view/php/players.php'); ?>
            <?php include_once('view/php/profile.php'); ?>
        </div>
        <article id='betting' class='row'>
            <p>Ставки</p>
        </article>
        <article id='bank' class='row'>
            <p>Банк</p>
        </article>
    </section>
</main>