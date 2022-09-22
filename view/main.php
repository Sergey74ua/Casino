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
        <?php include_once('view/php/betting.php'); ?>
        <?php include_once('view/php/bank.php'); ?>
    </section>
</main>