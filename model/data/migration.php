<?php #Casino

require_once('model/model.php');

class Migration extends Model {

    private $sql;

    public function __construct() {
        parent::__construct();
        //удаление файла БД (не наследуется путь с model)
        $this->makeRoulette();
        $this->makeGame();
        $this->makeUser();
    }

    //Таблица рулетки с данными
    private function makeRoulette() {
        $this->sql = "
            CREATE TABLE IF NOT EXISTS `Roulette` (
                id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
                sector INTEGER NOT NULL,
                half INTEGER,
                third INTEGER,
                dozen INTEGER,
                parity TEXT NOT NULL,
                color TEXT NOT NULL,
                stat INTEGER DEFAULT 0
            );
        ";
        $this->inDB($this->sql);
        $this->sql = "
            INSERT INTO `Roulette` (sector, parity, color) VALUES 
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
        $this->inDB($this->sql);
    }

    //Таблица игр
    private function makeGame() {
        $this->sql = "
            CREATE TABLE IF NOT EXISTS `Game` (
                id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
                creator TEXT DEFAULT 'anonym',
                sector INTEGER
            );
        ";
        $this->inDB($this->sql);
        $this->sql = "
            INSERT INTO `Game` (id, creator) VALUES 
                (1, 'admin')
        ";
        $this->inDB($this->sql);
    }

    //Таблица игроков
    private function makeUser() {
        $this->sql = "
            CREATE TABLE IF NOT EXISTS `User` (
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
            );
        ";
        $this->inDB($this->sql);
        $this->sql = "
            INSERT INTO `User` (id, name, status, pass) VALUES 
                (1, 'admin', 'admin', 'admin')
        ";
        $this->inDB($this->sql);
    }

}