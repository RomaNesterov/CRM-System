<?php

require 'db.php';

class insertCase extends db
{


    public function __construct()
    {
        parent::connectionDb();
    }


    public function insertCase()  //Вставка кейсов
    {
        if (isset($_POST['mas'])) {

            $number = $_POST['mas'];

            $owner = htmlspecialchars(trim($number[4]));
            $contactName = htmlspecialchars(trim($number[0]));
            $contactLevel = htmlspecialchars(trim($number[6]));


            if ('Primary' === $contactLevel) {

                $priority = 'High';

            } elseif ('Secondary' === $contactLevel) {

                $priority = 'Medium';

            } elseif ('Tertiary' === $contactLevel) {

                $priority = 'Low';

            }


            $this->connect->query("INSERT INTO cases (status,caseOrigin,owner,priority,	contactName) VALUES
                                                                               ('Working',                                                                                               'New contact',
                                                                                '$owner',
                                                                                '$priority',
                                                                                '$contactName'
                                                                                )");


        } else {
            echo 'Error';
        }
    }


}

$info = new insertCase();

$info->insertCase();


