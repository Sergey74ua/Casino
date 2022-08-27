<?php #Casino

abstract class Model {

    private $path;
    private $connect;

    protected function __construct() {
        $this->path = 'model/data/casino.sqlite';
    }

    //Input to DB
    protected function inDB($sql) {
        try {
            $this->connect = new \PDO("sqlite:$this->path");
            $this->connect->exec($sql);
            $this->connect = null;
            //echo("<script>console.log('Input to DB.');</script>");
        } catch (\PDOException $e) {
            $error = $e->getMessage();
            //echo("<script>console.log('DB error: '.$error);</script>");
            echo("DB error: '.$error");
        }
    }

    //Output from DB
    protected function outDB($sql) {
        try {
            $this->connect = new PDO("sqlite:$this->path");
            $request = $this->connect->query($sql);
            $this->connect = null;
            //echo("<script>console.log('Output from DB.');</script>");
            return $request;
        } catch (\PDOException $e) {
            $error = $e->getMessage();
            //echo("<script>console.log('DB error: '.$error);</script>");
            echo("DB error: '.$error");
            return null;
        }
    }

}

?>