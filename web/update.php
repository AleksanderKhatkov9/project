
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/ libs/jquery/3.5.1/jquery.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="../resources/boostrap/bootstrap-4.5.3/css/bootstrap.min.css">
    <script src="../resources/boostrap/bootstrap-4.5.3/js/bootstrap.min.js"></script>
    <script src="../resources/boostrap/JS/jQuery/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../resources/boostrap/css/fon.css">


</head>

<body>
<?php
include 'C:\xampp\htdocs\dashboard\php-web\dao\DaoUser.php';
?>

<div class="container">

    <div class="header">
        <h1>My web application</h1>
        <p>A website created by me.</p>
    </div>

    <div class="navbar">
        <a href="add.html" title="Добавить">Добавить</a>
        <a href="update.php" title="Информация">Вывод информации</a>
        <a href="index.html" title="Назад">Меню</a>
    </div>


    <?php
    $var = new DaoUser();
    $param = $var->getAll();
    //    var_dump($param);
    ?>


    <div class="row">
        <div class="container">
    <div class="jumbotron">

            <table class="table">
                <h2 class="align-content-center">Информация</h2>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Пароль</th>
                    <th>Почта</th>
                    <th>Действия</th>
                </tr>


                <?php foreach ($param as $value) { ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['password'] ?></td>
                        <td><?php echo $value['email'] ?></td>

                        <td>
                            <a href="edit.php?edit=<?php echo $value['id']; ?>">Редактировать</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="../controller/UserAdd.php?delete=<?php echo $value['id']; ?>">Удалить</a>

                        </td>
                    </tr>
                <?php } ?>
            </table>
    </div>
</div>

    <div class="container mt-3">
        <div class="footer">
            <div class="media border p-3">
                <img src="../resources/image/face.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle"
                     style="width:60px;">
                <div class="media-body">
                    <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <p style="font-size:30px">
                        &#128512; &#128516; &#128525; &#128400;
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>