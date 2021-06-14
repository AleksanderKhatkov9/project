<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <!--    <script src="https://ajax.googleapis.com/ajax/ libs/jquery/3.5.1/jquery.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="../resources/boostrap/bootstrap-4.5.3/css/bootstrap.min.css">
    <script src="../resources/boostrap/bootstrap-4.5.3/js/bootstrap.min.js"></script>
    <script src="../resources/boostrap/JS/jQuery/jquery.js"></script>
    <!--    <script src="../resources/boostrap/JS/js/validEdit.js"></script>-->

    <style>
        #link {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }
    </style>
    <script>
        function showForm() {
            // document.getElementById("id").hidden = false;
            document.getElementById("id").hidden = true;
        }
    </script>


</head>
<body>

<?php
include 'C:\xampp\htdocs\dashboard\php-web\dao\DaoUser.php';
include 'C:\xampp\htdocs\dashboard\php-web\entity\Param.php';
?>

<?php
$id = $_GET['edit'];
//echo "REs= ".$id;
$var = new DaoUser();
$param = $var->getId($id);
//var_dump($var);
//$par = new Param();
//$param2 = $var->get_Param($id, $par);
?>

<?php foreach ($param as $value) { ?>
    <?php $name = $value['name'] ?>
    <?php $password = $value['password'] ?>
    <?php $email = $value['email'] ?>
<?php } ?>


<div class="container">
    <div class="jumbotron">

        <!--        <a href="menu.html"><img src="https://img2.freepng.ru/20180429/zte/kisspng-computer-icons-avatar-user-laptop-5ae67d2c9fba76.3873242315250547646543.jpg"-->
        <!--                                 width="50" height="50" alt="Пример"></a>-->

        <!--        <a href="menu.html" title="Menu" >-->
        <!--            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-caret-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">-->
        <!--                <path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.753l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>-->
        <!--            </svg></a>-->

        <br><br><br>
        <form action="../controller/UserAdd.php" method="POST" onclick="showForm()">
            <table class="table">
                <h3 class="text-info">Редактировать
                    <tr>
                        <td class="text-primary"></td>
                        <td><input type="text" readonly="readonly" id="id" name="id" value="<?php echo $id ?>"
                                   size="0"/></td>
                    </tr>


                    <tr>
                        <td class="text-primary">Имя</td>
                        <td><input type="text" id="name" name="name" value="<?php echo $name ?>" size="30"/></td>
                    </tr>
                    <tr>
                        <td class="text-primary">Пароль</td>
                        <td><input type="password" id="password" name="password" value="<?php echo $password ?>"
                                   size="30"/>
                    </tr>
                    <tr>
                        <td class="text-primary">Почта</td>
                        <td><input type="email" id="email" name="email" value="<?php echo $email ?>" size="30"/>
                    </tr>
            </table>
            <button type="submit" class="btn btn-success" name="edit" id="edit">Отправить</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="click" class="btn btn-danger" name="update" id="del">Отмена</button>
        </form>
    </div>
</div>
</body>
</html>