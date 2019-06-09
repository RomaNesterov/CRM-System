<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>CRM System</title>
</head>

<body>


<div class="container">


    <div class="row-no-gutters"></div>
    <br><br><br>

    <!--Вкладки-->

    <div class="row no-gutter">

        <ul class="nav nav-tabs">
            <li class="nav-item active">
                <a class="nav-link active" href="index.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="case.php">Case</a>
            </li>
        </ul>
        <br><br>

        <!--Вкладки конец-->


        <!--Информационное поле-->


        <div class="row no-gutter">


            <div class="col-lg-4">
                <form class="navbar-form navbar-left" role="search" action="search.php" method="post">
                    <div class="form-group">
                        <input id="searchForm" type="text" name="search" class="form-control" placeholder="search">
                    </div>
                    <button id="search" type="submit" class="btn btn-default">Search</button>
                </form>
            </div>


            <div class="col-lg-4">

                <!-- Кнопка пуска модальное окно -->
                <form class="navbar-form navbar-left" role="search">
                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                        New contact
                    </button>
                </form>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h2 class="modal-title" id="myModalLabel">New Contact</h2>
                            </div>
                            <div class="modal-body">


                                <form class="modalForm">

                                    <div class="form-group">
                                        <label for="First Name">First Name</label>
                                        <input type="text" class="form-control" id="First Name"
                                               aria-describedby="emailHelp" placeholder="Enter First Name">

                                    </div>

                                    <div class="form-group">
                                        <label for="Last Name">Last Name</label>
                                        <input type="text" class="form-control" id="Last Name"
                                               aria-describedby="emailHelp" placeholder="Enter Last Name">

                                    </div>

                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" class="form-control" id="Email"
                                               aria-describedby="emailHelp" placeholder="Enter Email">

                                    </div>


                                    <div class="form-group">
                                        <label for="Account">Account</label>
                                        <input type="text" class="form-control" id="Account"
                                               placeholder="Enter Account">
                                    </div>


                                    <div class="form-group">
                                        <label for="Account">Owner</label>
                                        <input type="text" class="form-control" id="Owner"
                                               placeholder="Enter Owner">
                                    </div>


                                    <div class="form-group">
                                        <label for="Account">Created By</label>
                                        <input type="text" class="form-control" id="Created By"
                                               placeholder="Enter Created By">
                                    </div>

                                    <div class="form-group">
                                        <label for="Contact Level">Contact Level</label>
                                        <select class="form-control" id="Contact Level">
                                            <option>Primary</option>
                                            <option>Secondary</option>
                                            <option>Tertiary</option>
                                        </select>
                                    </div>


                                </form>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button id="send" type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Кнопка пуска модальное окно конец-->


            </div>

        </div>
        <hr>


        <!--Информационное поле конец-->


        <!--Таблица данных-->

        <table id="table-id" class="table table-hover  table-inverse">
            <thead>
            <tr>
                <th> Number</th>
                <th> Name</th>
                <th> Email</th>
                <th> Contact Level</th>
                <th> Account</th>
                <th> Owner</th>
                <th> Created By</th>
                <th> Created Date</th>
                <th></th>
            </tr>
            </thead>
            <tbody>


            <?php

            require 'classes/searchContact.php';
            $myrow = $info->searchContact();;

            ?>

            </tbody>
        </table>

        <!--Таблица данных конец-->

        <!--Пагинация -->

        <nav aria-label="..." class="text-center">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!--Пагинация конец-->


    </div>


</div>


<!-- Подключаем jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!-- Подключаем Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<script src='js/javascript.js'></script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/tablesort/5.0.2/tablesort.min.js'></script>

<!-- Include sort types you need -->


</body>
</html>