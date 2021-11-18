<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Api.php";

$_ENV['db_host'] = "db_host";
$_ENV['db_user'] = "db_user";
$_ENV['db_password'] = 'db_password';
$_ENV['db_database'] = "db_database";

class Connection extends Api
{
    public $dbh;

    public function connect()
    {
        try {
            $this->dbh = new PDO("mysql:host={$_ENV['db_host']};dbname={$_ENV['db_database']}", $_ENV['db_user'], $_ENV['db_password'], array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_LOCAL_INFILE => true,
            ));
        } catch (PDOException $e) {
            echo "Can't connect to DB";
            print_object($e);
            die();
        }
    }

    public function disconnect()
    {
        $this->dbh = null;
    }

    public function selectAll($str, $fetchMethod = PDO::FETCH_OBJ)
    {
        try {
            $exec = $this->dbh->prepare($str);
            $exec->execute();
            return $exec->fetchAll($fetchMethod);
        } catch (PDOException $e) {
            $this->throwError($e, $str);
        }
    }

    public function select($str)
    {
        try {
            $exec = $this->dbh->prepare($str);
            $exec->execute();
            return $exec->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $this->throwError($e, $str);
        }
    }

    public function execute($str)
    {
        try {
            $this->dbh->exec($str);
            return true;
        } catch (PDOException $e) {
            $this->throwError($e, $str);
            return false;
        }
    }

    public function throwError($e, $str)
    {
        if ($this->dbh->inTransaction()) {
            $this->rollBack();
        }

        $message = $e->getMessage() . ", " . $e->getTrace() . ", " . $str;
        $this->response(409, $message);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }

    public function beginTransaction()
    {
        $this->dbh->beginTransaction();
    }

    public function rollBack()
    {
        $this->dbh->rollBack();
    }

    public function commit()
    {
        $this->dbh->commit();
    }
}

function print_object($s)
{
    echo "<pre>";
    var_dump($s);
    echo "</pre>";
}

function displayPhpErrors()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
