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
            <li class="nav-item ">
                <a class="nav-link active" href="index.php">Contact</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="case.php">Case</a>
            </li>
        </ul>
        <br><br>

        <!--Вкладки конец-->


        <!--Информационное поле-->


        <div class="row no-gutter">


            <div class="col-lg-4">

            </div>

        </div>

        <!--Информационное поле конец-->


        <!--Таблица данных-->

        <table id="table-id" class="table table-hover  table-inverse">
            <thead>
            <tr>
                <th> Number</th>
                <th> Contact name</th>
                <th> Status</th>
                <th> Owner</th>
                <th> Case Origin</th>
                <th> Priority</th>
            </tr>
            </thead>
            <tbody>


            <?php

            require 'classes/conclusionCase.php';
            $myrow = $info->conclusionCase(0);

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