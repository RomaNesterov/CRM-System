<?php

require 'db.php';

class conclusionCase extends db
{


    public function __construct()
    {
        parent::connectionDb();
    }


    public function conclusionCase($number)  //Вывод кейсов
    {
        $result = $this->connect->query("SELECT * FROM cases  LIMIT 10 OFFSET $number ");
        if (!$result) return false;

        while ($row = $result->fetch_array()) {


            printf('              
               
            <tr>
                <th scope="row">%s</th>
                <td><h1><a href="index.php">%s</a></h1></td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
            </tr>      
               
               ', $row["id"], $row["contactName"], $row["status"], $row["owner"], $row["caseOrigin"], $row["priority"]
            );
        }
    }


}

$info = new conclusionCase();




