
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/ libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<?php
include 'C:\xampp\htdocs\dashboard\php-web\dao\DaoUser.php';
?>

<div class="container">

    <?php
    $var = new DaoUser();
    $param = $var->getAll();
    //    var_dump($param);
    ?>


    <div class="jumbotron">
        <a href="menu.html"><img
                src="https://img2.freepng.ru/20180429/zte/kisspng-computer-icons-avatar-user-laptop-5ae67d2c9fba76.3873242315250547646543.jpg"
                width="50" height="50" alt="Пример"></a>
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="add.html"/><img
            src="http://s1.iconbird.com/ico/2013/8/429/w128h1281377937728185024computerimac3.png"
            width="50" height="50" alt="Пример"></a>

            <table class="table">
                <h2 class="align-content-center">List Users</h2>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>


                <?php foreach ($param as $value) { ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['password'] ?></td>
                        <td><?php echo $value['email'] ?></td>

                        <td>
<!--                            <a href="UserAdd.php?edit=--><?php //echo $value['id']; ?><!--">Edit</a>-->
                            <a href="edit.php?edit=<?php echo $value['id']; ?>">Edit</a>


<!--                            </a><a href="edit.php">Edit</a>-->
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="UserAdd.php?delete=<?php echo $value['id']; ?>">Delete</a>

                        </td>
                    </tr>
                <?php } ?>
            </table>
    </div>
</div>

</body>
</html>