<?php

class Database
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;
    private $dbPort = DB_PORT;

    private static $_statement=null;
    private $dbHandler=null;
    private $error;

    public function __construct()
    {
        if($this->dbHandler==null)
        {
            try
            {
                $mongodb = new MongoDB\Driver\Manager("mongodb://localhost:27017/wai", ['username'=>'wai_web', 'password'=>'w@i_w3b',]);
                $this->dbHandler=$mongodb;
            }
            catch (Exception $error)
            {
                $this->error = $error->getMessage();
                echo $this->error;
            }
        }

    }

    public static function getStatement()
    {
        if(is_null(self::$_statement))
        {
            self::$_statement=new Database();
        }
        return self::$_statement->dbHandler;
    }
}
