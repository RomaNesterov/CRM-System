<?php


class db
{
    public $connect;

    public function connectionDb()
    {
        $this->connect = new mysqli("localhost", "Roma", "1989", "CRM_System");
    }
}

$connection = new db();
$myrow = $connection->connectionDb();