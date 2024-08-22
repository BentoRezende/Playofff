<?php

class UserDao{
    private $conection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=playoff";

        $this -> conection= new PDO($dsn, 'root', '');
    }

}