<?php

require 'db.php';

class delContact extends db
{


    public function __construct()
    {
        parent::connectionDb();
    }


    public function delContact()  //Удаление контакта
    {
        if (isset($_POST['del'])) {

            $del = $_POST['del'];

            $this->connect->query("DELETE  FROM contacts WHERE id='$del' ");

            $this->connect->query("DELETE  FROM cases WHERE id='$del' ");

        }
    }


}

$info = new delContact();

$info->delContact();

