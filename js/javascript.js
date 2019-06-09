$(document).ready(function () {

    new Tablesort(document.getElementById('table-id'));


//Проверка формы+вставка в базу

    $('.modalForm').find('.form-group').find('input').val('');


    $('#send').click(function () {

        if (!(/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i.test($('#Email').val()))) {
            alert("Введите правильный E-Mail адрес");
            return false;
        }

        if (
            $('.modalForm').find('.form-group').find('input').val().length == 0

        ) {

            alert('Заполните все поля!');
            return false;
        }

        if ($('#Email').val().length < 6) {
            alert('слишком короткий "email"');
            return false;
        }


        var $mas = [];

        $('.modalForm').find('.form-group').find('input, select').each(function () {

            $data = $(this).val();

            $mas.push($data);

        });

        var data = new Date();
        var $year = data.getFullYear();
        var $month = data.getMonth();
        var $day = data.getDate();

        var date = $day + '.' + $month + '.' + $year;

        $mas.push(date);


        $.ajax({
            url: "classes/insertContact.php",
            type: "POST",
            data: {
                mas: $mas,
            },
            success: function (data) {

                $('#table-id').append(
                    data
                );


            }
        });


        $.ajax({
            url: "classes/insertCase.php",
            type: "POST",
            data: {
                mas: $mas,
            },
            success: function () {

            }
        });


    });

//Проверка формы конец+вставка в базу конец

//Удаление

    $(document).on('click', 'td button', function () {

        var del = $(this).attr('id');

        $(this).parents('tr').remove();

        $.ajax({
            url: "classes/delContact.php",
            type: "POST",
            data: {
                del: del
            },
            success: function () {


            }
        });
    });


//Удаление конец


//Поиск

    $('#search').click(function () {

        var search = $(this).siblings('.form-group').find('input').val();

        $.ajax({
            url: "search.php",
            type: "POST",
            data: {
                search: search
            },
            success: function () {

            }
        });

    });

//Поиск конец


//Вывод определенного контакта

    $(document).on('click', 'td p', function () {


        $(this).css('border-bottom', '0px solid red');
        localStorage.removeItem('name')

        var $mas = [];

        $(this).parents('tr').find('td').each(function () {

            $data = $(this).text();

            $mas.push($data);

        });

        $(this).parents('tr').find('option:first-child').each(function () {

            $priority = $(this).text();

        });
        console.log($mas)
        $mas.splice(2, 1, $priority);


        var number = $('.block').find('p');

        $('.block').fadeIn(300).css('display', 'block');


        for (var i = 0; i < number.length; i++) {

            $('.block').find("p").eq([i]).text($mas[i]);

        }

    });


    $('.close').on('click', function () {

        $('.block').fadeOut(300);

    });


//Вывод определенного контакта конец

//Приязка к контакту

    $(document).on('click', 'td h1', function () {


        var name = $(this).text();

        localStorage.setItem('name', name);

        window.location.reload();

    });


    var alias = localStorage.getItem('name');

    $('#table-id').find('td p').each(function () {

        var newName = $(this).text();

        if (newName === alias) {

            $(this).css('border-bottom', '5px solid red');
        }

    });


//Приязка к контакту конец


});
