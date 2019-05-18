<?php

class MyUserClass
{
    public function DatabaseConnection($server, $user, $password)
    {
        try{
            $pdo = new PDO('mysql:host=localhost;dbname='. $server, $user, $password);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $pdo;
    }

    public function getUserList()
    {
        $dbconn = $this->DatabaseConnection('BDusuarios', 'root', 'root');
        $results = $dbconn->query("select name from user")->fetchAll();
        return $results;
    }
}