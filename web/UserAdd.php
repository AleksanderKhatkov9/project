<?php

include 'C:\xampp\htdocs\dashboard\php-web\dao\DaoUser.php';
include'C:\xampp\htdocs\dashboard\php-web\entity\User.php';

$id = null;
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];


$connection = new DaoUser();
if (isset($_POST['add'])) {  //1
    echo
        "Ваше имя: <b>" . $name . "<br></b>" .
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
        echo "NAME: <b> " . $bin->getName() . "<br></b>" .
        "PASSWORD: <b> " . $bin->getPassword() . "<br></b>" .
        "EMAIL: <b> " . $bin->getEmail() . "<br></b>";
    echo "<br>";
    $connection->save($bin);

    echo "Yes :ADD <br>";
    $new_url = 'http://localhost/dashboard/php-web/web/index.php';
    header('Location: '.$new_url);
    echo "<br>";
} else {
    echo "No: ADD <br>";
}

if (isset($_POST['edit'])) { //2
    $id = $_POST['id'];


    echo "ID : ".$id."<br>";
    echo "Name : ".$name."<br>";
    echo "Password : ".$password."<br>";
    echo "Email : ".$email."<br>";



    $connection->update($id, $name,$password,$email);
    echo "Yes: Edit <br>";
        $new_url = 'http://localhost/dashboard/php-web/web/index.php';
        header('Location: '.$new_url);
} else {
    echo "No: Edit <br>";
}

if (isset($_GET['delete'])) { //3
    $id = $_GET['delete'];
    echo "ID :".$id."<br>";
    $connection->delete($id);
    echo "Yes: Delete <br>";
    $new_url = 'http://localhost/dashboard/php-web/web/index.php';
    header('Location: '.$new_url);
} else {
    echo "No: Delete <br>";
}

//$connection->save($bin);
//$connection->getAll();
//$connection->delete();
//$connection->update();
//$connection ->getId();








