<?php

include 'DaoUser.php';
include 'User.php';
$id = 1;
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
echo "Ваше имя: <b>".$name."<br></b>".
     "Ваш пароль:<b> ". $password."<br></b>".
     "Ваш email: <b> ". $email."<br></b>";

/*Connection*/
$connection = new DaoUser();
//$connection->OpenCon();
echo '<br>';
$bin = new User();
$bin->setId($id);
$bin->setName($name);
$bin->setPassword($password);
$bin->setEmail($email);


echo "<br>";
echo "RESULT BIN <br>";
echo '<br>';
echo "ID: <b> ".$bin->getId()."<br></b>".
    "NAME: <b> ".$bin->getName()."<br></b>".
    "PASSWORD: <b> ".$bin->getPassword()."<br></b>".
    "EMAIL: <b> ".$bin->getEmail()."<br></b>";

$connection->save($bin);
$connection->getAll();






