<?php

include 'C:\xampp\htdocs\dashboard\php-web\dao\DaoUser.php';
include'C:\xampp\htdocs\dashboard\php-web\entity\User.php';

$id = null;
//$id = $_GET["id"];
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];

$connection = new DaoUser();

if (isset($_POST['add'])) {
    echo "Ваше имя: <b>" . $name . "<br></b>" .
        "Ваш пароль:<b> " . $password . "<br></b>" .
        "Ваш email: <b> " . $email . "<br></b>";

    echo '<br>';
    $bin = new User();
    $bin->setId($id);
    $bin->setName($name);
    $bin->setPassword($password);
    $bin->setEmail($email);

    echo "<br>";
    echo "RESULT BIN <br>";
    echo '<br>';
    echo "ID: <b> " . $bin->getId() . "<br></b>" .
        "NAME: <b> " . $bin->getName() . "<br></b>" .
        "PASSWORD: <b> " . $bin->getPassword() . "<br></b>" .
        "EMAIL: <b> " . $bin->getEmail() . "<br></b>";
    echo "<br>";
    $connection->save($bin);

    echo "Yes :ADD <br>";
    echo "<br>";
} else {
    $connection->getAll();
    echo "No: ADD <br>";
}

if (isset($_POST['edit'])) {
//    $connection->update();
    echo "Yes: Edit <br>";
} else {
    echo "No: Edit <br>";
}

if (isset($_GET['delete'])) {
    $connection->delete();
    echo "Yes: Delete <br>";
} else {
    echo "No: Delete <br>";
}






//$connection->save($bin);
//$connection->getAll();
//$connection->delete();
//$connection->update();






