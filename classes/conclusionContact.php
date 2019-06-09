<?php

require 'db.php';

class conclusionContact extends db
{


    public function __construct()
    {
        parent::connectionDb();
    }


    public function conclusionContact($number)  //Вывод контактов
    {
        $result = $this->connect->query("SELECT * FROM contacts LIMIT 10 OFFSET $number ");
        if (!$result) return false;


        while ($row = $result->fetch_array()) {


            if ($row[3] == 'Primary') {

                echo '<tr>';
                echo '<th scope="row">' . $row[0] . '</th>';
                echo '<td><p>' . $row[1] . '</p></td>';
                echo '<td>' . $row[2] . '</td>';
                echo '<td>';


                echo '<select class="form-control has-success">';
                echo '<option>Primary</option>';
                echo '<option>Secondary</option>';
                echo '<option>Tertiary</option>';
                echo '</select>';


                echo '</td>';
                echo '<td>' . $row[4] . '</td>';
                echo '<td>' . $row[5] . '</td>';
                echo '<td>' . $row[6] . '</td>';
                echo '<td>' . $row[7] . '</td>';
                echo '<td>';
                echo '<button id="' . $row[0] . '" class="btn btn-danger">DEL</button>';
                echo '</td>';
                echo '</tr>';
            }

            if ($row[3] == 'Secondary') {

                echo '<tr>';
                echo '<th scope="row">' . $row[0] . '</th>';
                echo '<td><p>' . $row[1] . '</p></td>';
                echo '<td>' . $row[2] . '</td>';
                echo '<td>';


                echo '<select class="form-control has-success">';
                echo '<option>Secondary</option>';
                echo '<option>Primary</option>';
                echo '<option>Tertiary</option>';
                echo '</select>';


                echo '</td>';
                echo '<td>' . $row[4] . '</td>';
                echo '<td>' . $row[5] . '</td>';
                echo '<td>' . $row[6] . '</td>';
                echo '<td>' . $row[7] . '</td>';
                echo '<td>';
                echo '<button id="' . $row[0] . '" class="btn btn-danger">DEL</button>';
                echo '</td>';
                echo '</tr>';
            }

            if ($row[3] == 'Tertiary') {

                echo '<tr>';
                echo '<th scope="row">' . $row[0] . '</th>';
                echo '<td><p>' . $row[1] . '</p></td>';
                echo '<td>' . $row[2] . '</td>';
                echo '<td>';


                echo '<select class="form-control has-success">';
                echo '<option>Tertiary</option>';
                echo '<option>Secondary</option>';
                echo '<option>Primary</option>';
                echo '</select>';


                echo '</td>';
                echo '<td>' . $row[4] . '</td>';
                echo '<td>' . $row[5] . '</td>';
                echo '<td>' . $row[6] . '</td>';
                echo '<td>' . $row[7] . '</td>';
                echo '<td>';
                echo '<button id="' . $row[0] . '" class="btn btn-danger">DEL</button>';
                echo '</td>';
                echo '</tr>';
            }

        }
    }


}

$info = new conclusionContact();




