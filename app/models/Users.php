<?php

class Users extends Database
{
    public function getUser($login)
    {
        $query = new MongoDB\Driver\Query(['login'=>$login]);

        return self::getStatement()->executeQuery(DB_NAME.'.users',$query);
    }
    public function addUser($login, $password, $email)
    {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $data=['login'=>$login,
            'password'=>$passwordHash,
            'email'=>$email];
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert($data);
        return self::getStatement()->executeBulkWrite(DB_NAME.'.users', $bulk);
    }
}