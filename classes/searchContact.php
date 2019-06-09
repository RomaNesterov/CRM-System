<?php

require 'db.php';

class searchContact extends db
{


    public function __construct()
    {
        parent::connectionDb();
    }


    public function searchContact()  //Поиск
    {
        if (isset($_POST['search'])) {


            $search = htmlspecialchars(trim($_POST['search']));


            $result1 = $this->connect->query("SELECT name FROM contacts WHERE name LIKE '%$search%'") or die(mysqli_error($this->connect));

            $row1 = $result1->fetch_assoc();


            if ($search == $row1['name']) {

                $result = $this->connect->query("SELECT * FROM contacts WHERE name LIKE '%$search%'") or die(mysqli_error($this->connect));


                while ($row = $result->fetch_assoc()) {


                    if ($row['contactLevel'] == 'Primary') {

                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td><p>' . $row['name'] . '</p></td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>';


                        echo '<select class="form-control has-success">';
                        echo '<option>Primary</option>';
                        echo '<option>Secondary</option>';
                        echo '<option>Tertiary</option>';
                        echo '</select>';


                        echo '</td>';
                        echo '<td>' . $row['account'] . '</td>';
                        echo '<td>' . $row['owner'] . '</td>';
                        echo '<td>' . $row['createdBy'] . '</td>';
                        echo '<td>' . $row['createdDate'] . '</td>';
                        echo '<td>';
                        echo '<button id="' . $row['id'] . '" class="btn btn-danger">DEL</button>';
                        echo '</td>';
                        echo '</tr>';
                    }

                    if ($row['contactLevel'] == 'Secondary') {

                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td><p>' . $row['name'] . '</p></td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>';


                        echo '<select class="form-control has-success">';
                        echo '<option>Secondary</option>';
                        echo '<option>Primary</option>';
                        echo '<option>Tertiary</option>';
                        echo '</select>';


                        echo '</td>';
                        echo '<td>' . $row['account'] . '</td>';
                        echo '<td>' . $row['owner'] . '</td>';
                        echo '<td>' . $row['createdBy'] . '</td>';
                        echo '<td>' . $row['createdDate'] . '</td>';
                        echo '<td>';
                        echo '<button id="' . $row['id'] . '" class="btn btn-danger">DEL</button>';
                        echo '</td>';
                        echo '</tr>';
                    }

                    if ($row['contactLevel']== 'Tertiary' ) {

                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td><p>' . $row['name'] . '</p></td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>';


                        echo '<select class="form-control has-success">';
                        echo '<option>Tertiary</option>';
                        echo '<option>Secondary</option>';
                        echo '<option>Primary</option>';
                        echo '</select>';


                        echo '</td>';
                        echo '<td>' . $row['account'] . '</td>';
                        echo '<td>' . $row['owner'] . '</td>';
                        echo '<td>' . $row['createdBy'] . '</td>';
                        echo '<td>' . $row['createdDate'] . '</td>';
                        echo '<td>';
                        echo '<button id="' . $row['id'] . '" class="btn btn-danger">DEL</button>';
                        echo '</td>';
                        echo '</tr>';
                    }





                   /* printf('
               
              <tr>
                <th scope="row">%s</th>
                <td><a href="">%s</a></td>
                <td>%s</td>
                <td>
                    <select class="form-control has-success">
                        <option>Primary</option>
                        <option>Secondary</option>
                        <option>Tertiary</option>
                    </select>
                </td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>
                    <button id="%s" class="btn btn-danger">DEL</button>
                </td>
            </tr>       
               
               ', $row["id"], $row["name"], $row["email"], $row["account"], $row["owner"], $row["createdBy"], $row["createdDate"], $row["id"]
                    );*/
                }

            } else {

                echo <<<EOT

<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>No match found!</strong> 
</div>

EOT;


            }

        } else {
            echo 'Error';
        }
    }


}

$info = new searchContact();




