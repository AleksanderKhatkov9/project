<?php
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
echo "Ваше имя: <b>".$name."<br></b>".
     "Ваш пароль:<b> ". $password."<br></b>".
     "Ваш email: <b> ". $email."<br></b>";
