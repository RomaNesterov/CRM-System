<?php

require 'db.php';

class insertContact extends db
{


    public function __construct()
    {
        parent::connectionDb();
    }


    public function insertContact()  //Вставка данных формы
    {
        if (isset($_POST['mas'])) {


            $number = $_POST['mas'];


            $FirstName = htmlspecialchars(trim($number[0]));
            $LastName = htmlspecialchars(trim($number[1]));
            $Email = htmlspecialchars(trim($number[2]));
            $Account = htmlspecialchars(trim($number[3]));
            $ContactLevel = htmlspecialchars(trim($number[6]));
            $Owner = htmlspecialchars(trim($number[4]));
            $CreatedBy = htmlspecialchars(trim($number[5]));
            $Date = htmlspecialchars(trim($number[7]));


            $this->connect->query("INSERT INTO contacts (name,email,account,contactLevel,owner,createdBy,createdDate, lastName) VALUES
                                                                               ('$FirstName',                                                                                           '$Email',
                                                                                '$Account',
                                                                                '$ContactLevel',
                                                                                '$Owner',
                                                                                '$CreatedBy',
                                                                                '$Date',                                                                                                 '$LastName'
                                                                                )");

            $ret = $this->connect->query("SELECT id FROM contacts ORDER BY id DESC LIMIT 1");

            $num = $ret->fetch_array();


            if ('Primary' == $ContactLevel) {

                echo <<<EOT
                
                    <tr>
                    <th style="padding: 8px" scope="row">$num[0]</th>
                    <td style="padding: 8px"><a href="">$FirstName</a></td>
                    <td style="padding: 8px">$Email</td>
                    <td style="padding: 8px">
                        <select class="form-control has-success">
                        <option>Primary</option>
                        <option>Secondary</option>
                        <option>Tertiary</option>
                        </select>                    
                    </td>
                    <td style="padding: 8px">$Account</td>
                    <td style="padding: 8px">$Owner</td>
                    <td style="padding: 8px">$CreatedBy</td>
                    <td style="padding: 8px">$Date</td>
                    <td style="padding: 8px">
                    <button style="padding: 6px 12px" class="btn btn-danger">DEL</button>
                    </td>
                    </tr>

EOT;

            } elseif ('Secondary' == $ContactLevel) {

                echo <<<EOT
                
                    <tr>
                    <th style="padding: 8px" scope="row">$num[0]</th>
                    <td style="padding: 8px"><a href="">$FirstName</a></td>
                    <td style="padding: 8px">$Email</td>
                    <td style="padding: 8px">
                        <select class="form-control has-success">
                        <option>Secondary</option>
                        <option>Primary</option>
                        <option>Tertiary</option>
                        </select>                    
                    </td>
                    <td style="padding: 8px">$Account</td>
                    <td style="padding: 8px">$Owner</td>
                    <td style="padding: 8px">$CreatedBy</td>
                    <td style="padding: 8px">$Date</td>
                    <td style="padding: 8px">
                    <button style="padding: 6px 12px" class="btn btn-danger">DEL</button>
                    </td>
                    </tr>

EOT;

            } elseif ('Tertiary' == $ContactLevel) {

                echo <<<EOT
                
                    <tr>
                    <th style="padding: 8px" scope="row">$num[0]</th>
                    <td style="padding: 8px"><a href="">$FirstName</a></td>
                    <td style="padding: 8px">$Email</td>
                    <td style="padding: 8px">
                        <select class="form-control has-success">
                        <option>Tertiary</option>
                        <option>Secondary</option>
                        <option>Primary</option>
                        </select>                    
                    </td>
                    <td style="padding: 8px">$Account</td>
                    <td style="padding: 8px">$Owner</td>
                    <td style="padding: 8px">$CreatedBy</td>
                    <td style="padding: 8px">$Date</td>
                    <td style="padding: 8px">
                    <button style="padding:6px 12px" class="btn btn-danger">DEL</button>
                    </td>
                    </tr>

EOT;

            }


        } else {
            echo 'Error';
        }
    }


}

$info = new insertContact();

$info->insertContact();


