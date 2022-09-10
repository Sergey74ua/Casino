<?php #Casino ?>

<main class='row'>
    <section id='left' class='col'>
        <?php include_once('view/php/table.php'); ?>
        <?php include_once('view/php/statistics.php'); ?>
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