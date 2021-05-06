<?php

class DaoUser
{

    function OpenCon()
    {
        // TODO: Implement OpenCon() method.
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных

//        $hostAll = $host;
//        $userAll = $user;
//        $passwordAll = $password;
//        $databaseAll = $database;

//        echo 'Host= ' . $hostAll . '<br>';
//        echo 'User= ' . $userAll . '<br>';
//        echo 'Password= ' . $passwordAll . '<br>';
//        echo 'Data= ' . $databaseAll . '<br>';

        $conn = mysqli_connect($host, $user, $password, $database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully <br>";
        mysqli_close($conn);
        return $conn;
    }

    function save(User $binUser)
    {
        $this->OpenCon();

        $varId = $binUser->getId();

        $varName = $binUser->getName();
        $varPassword = $binUser->getPassword();
        $varEmail = $binUser->getEmail();

        echo "****************************<br>";
        echo $varId."<br>";
        echo $varName."<br>";
        echo $varPassword."<br>";
        echo $varEmail."<br>";
        echo "****************************";
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных

        $link = mysqli_connect($host, $user, $password, $database);
        $sql = "INSERT INTO phpdb.user (id, name, password, email) Values ('$varId','$varName','$varPassword',' $varEmail')";

//        $stmt->execute([$varId,  $varName,  $varPassword,$varEmail]);
//        $pdo->prepare($sql)->execute([$varId,  $varName,  $varPassword,$varEmail]);
        $result = mysqli_query($link, $sql);

        if ($result =="") {
            echo("<br>Data Input OK <br>");
        } else {
            echo("<br>Data Input Failed <br>");
        }
    }

    public function getAll()
    {

        $this->OpenCon();

//        $var1 = $binUser->getName();
//        echo "NAME !!!".$var1;

        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных

        $link = mysqli_connect($host, $user, $password, $database);

        $sql = "SELECT * FROM phpdb.user";

        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_row($result)) {
//            print($row[0]."<br>");
//            print($row[1]."<br>");
//            print($row[2]."<br>");
//            print($row[3]."<br>");
        echo "<br>";
            echo("ID:<b>".$row[0]."<br></b>".
                "Name:<b>".$row[1]."<br></b>".
                "Password:<b>".$row[2]."<br></b>".
                "Email:<b>".$row[3]."<br></b>");
        }

    }
}