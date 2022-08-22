<?php

    //Добавляем рандом в статистику БД
    $sector = 'начните игру';
    if(array_key_exists('bet', $_POST)) {
        $sector=rand(0, 36);
        $connect = new PDO("sqlite:$db");
        $sql = "UPDATE Roulette SET stat=stat+1 WHERE sector = $sector";
        $connect->exec($sql);
        $connect = null;
    }

    //Обнуление статистики
    if(array_key_exists('reset', $_POST)) {
        $connect = new PDO("sqlite:$db");
        $sql = "UPDATE Roulette SET stat = 0";
        $connect->exec($sql);
        $connect = null;
    }

    //Выводим все статистику с БД
    function statistics($db) {
        $connect = new PDO("sqlite:$db");
        $sql = "SELECT sector, stat FROM Roulette";
        $result = $connect->query($sql);
        $arr = [];
        foreach($result as $row)
            $arr[$row['sector']] = $row['stat'];
        ksort($arr);
        echo "<div class='row' style='border: 1px solid lightgreen;'>";
        foreach($arr as $key => $elem) {
            echo '<div class="col" style="border: 1px solid grey;">';
            echo "<div>$key</div>";
            echo "<div>$elem</div>";
            echo '</div>';
        }
        echo '</div>';
        $connect = null;
    }

?>