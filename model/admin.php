<?php

class DateBase {

    private $db;
    private $connect;

    public function __construct($db) {
        $this->db = $db;
    }

    //Таблица рулетки
    public function makeRoulette() {
        try {
            $this->connect = new \PDO("sqlite:$this->db");
            $sql="CREATE TABLE IF NOT EXISTS `Roulette` (
                id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
                sector INTEGER NOT NULL,
                half INTEGER,
                third INTEGER,
                dozen INTEGER,
                parity TEXT NOT NULL,
                color TEXT NOT NULL,
                stat INTEGER DEFAULT 0
            );";
            $this->connect->exec($sql);
            $this->connect = null;
            return "Создана таблица Roulette.";
        } catch (\PDOException $e) {
            return "Ошибка базы данных: " . $e->getMessage();
        }
    }

    //Заполнение таблицы рулетки
    public function fillRoulette() {
        try {
            $this->connect = new \PDO("sqlite:$this->db");
            $sql = "INSERT INTO `Roulette` (sector, parity, color) VALUES 
                (0, 'zero', 'green'), 
                (32, 'even', 'red'), 
                (15, 'odd', 'black'),
                (19, 'odd', 'red'),
                (4, 'even', 'black'),
                (2, 'even', 'black'),
                (21, 'odd', 'red'),
                (25, 'odd', 'red'),
                (17, 'odd', 'black'),
                (34, 'even', 'red'),
                (6, 'even', 'black'),
                (27, 'odd', 'red'),
                (13, 'odd', 'black'),
                (36, 'even', 'red'),
                (11, 'odd', 'black'),
                (30, 'even', 'red'),
                (8, 'even', 'black'),
                (23, 'odd', 'red'),
                (10, 'even', 'black'),
                (5, 'odd', 'red'),
                (24, 'even', 'black'),
                (16, 'even', 'red'),
                (33, 'odd', 'black'),
                (1, 'odd', 'red'),
                (20, 'even', 'black'),
                (14, 'even', 'red'),
                (31, 'odd', 'black'),
                (9, 'odd', 'red'),
                (22, 'even', 'black'),
                (18, 'even', 'red'),
                (29, 'odd', 'black'),
                (7, 'odd', 'red'),
                (28, 'even', 'black'),
                (12, 'even', 'red'),
                (35, 'odd', 'black'),
                (3, 'odd', 'red'),
                (26, 'even', 'black')
            ";
            $countSector = $this->connect->exec($sql);
            $this->connect = null;
            return "В таблицу Roulette добавлено секторов: $countSector";
        } catch (\PDOException $e) {
            return "Ошибка базы данных: " . $e->getMessage();
        }
    }

    //Таблица игроков
    public function makeUser() {
        try {
            $this->connect = new \PDO("sqlite:$this->db");
            $sql="CREATE TABLE IF NOT EXISTS `User` (
                id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
                name TEXT DEFAULT 'anonym',
                status TEXT DEFAULT 'gamer',
                pass TEXT DEFAULT '',
                avatar TEXT DEFAULT 'default.jpg',
                money INTEGER DEFAULT 0,
                balance INTEGER DEFAULT 0,
                game INTEGER DEFAULT 0,
                bets INTEGER DEFAULT 0,
                win INTEGER DEFAULT 0,
                rating INTEGER DEFAULT 0
            );";
            $this->connect->exec($sql);
            $this->connect = null;
            return "Создана таблица User.";
        } catch (\PDOException $e) {
            return "Ошибка базы данных: " . $e->getMessage();
        }
    }

    //Добавляем администратора
    public function addAdmin($name='admin', $pass='admin') {
        try {
            $this->connect = new \PDO("sqlite:$this->db");
            $sql = "INSERT INTO `User` (id, name, status, pass) VALUES 
                (1, '$name', 'admin', '$pass')
            ";
            $this->connect->exec($sql);
            $this->connect = null;
            return "В таблицу User добавлен администратор.";
        } catch (\PDOException $e) {
            return "Ошибка базы данных: " . $e->getMessage();
        }
    }

    //Добавляем игрока
    public function addUser($name='anonym', $pass='', $avatar='default.jpg', $money=0) {
        try {
            $this->connect = new \PDO("sqlite:$this->db");
            $sql = "INSERT INTO `User` (name, status, pass, avatar, money) VALUES 
                ('$name', 'gamer', '$pass', '$avatar', $money)
            ";
            $this->connect->exec($sql);
            $this->connect = null;
            return "В таблицу User добавлен игрок: $name";
        } catch (\PDOException $e) {
            return "Ошибка базы данных: " . $e->getMessage();
        }
    }
}

?>