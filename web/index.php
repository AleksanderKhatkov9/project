
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/ libs/jquery/3.5.1/jquery.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="../resources/boostrap/bootstrap-4.5.3/css/bootstrap.min.css">
    <script src="../resources/boostrap/bootstrap-4.5.3/js/bootstrap.min.js"></script>
    <script src="../resources/boostrap/JS/jQuery/jquery.js"></script>


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
<!--        <a href="menu.html"><img-->
<!--                src="https://img2.freepng.ru/20180429/zte/kisspng-computer-icons-avatar-user-laptop-5ae67d2c9fba76.3873242315250547646543.jpg"-->
<!--                width="50" height="50" alt="Пример"></a>-->
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <a href="menu.html" title="Menu">
            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-caret-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.753l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
            </svg></a>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <a href="add.html" title="add">
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg></a>

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
                            <a href="edit.php?edit=<?php echo $value['id']; ?>">Edit</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="../controller/UserAdd.php?delete=<?php echo $value['id']; ?>">Delete</a>

                        </td>
                    </tr>
                <?php } ?>
            </table>
    </div>
</div>

</body>
</html>