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
        $sql = "INSERT INTO phpdb.user (name, password, email) Values ('$varName','$varPassword',' $varEmail')";

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
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных

        $link = mysqli_connect($host, $user, $password, $database);
        $sql = "SELECT * FROM phpdb.user";
        $result = mysqli_query($link, $sql);


        while ($row = mysqli_fetch_row($result)) {
        echo "<br>";
            echo("ID:<b>".$row[0]."<br></b>".
                "Name:<b>".$row[1]."<br></b>".
                "Password:<b>".$row[2]."<br></b>".
                "Email:<b>".$row[3]."<br></b>");
        }

        return $row;

    }


public function delete()
    {
        $this->OpenCon();
        $id = 1;
//        $varId = $bin->setId();
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных
        $link = mysqli_connect($host, $user, $password, $database);
        $sql = "DELETE FROM phpdb.user WHERE id= $id;";
        $result = mysqli_query($link, $sql);
        if ($result =="") {
            echo("<br>Data Delete OK <br>");
        } else {
            echo("<br>Data Delete Failed <br>");
        }
    }

        public function update(){
        $this->OpenCon();
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных
        $link = mysqli_connect($host, $user, $password, $database);
        $sql = "UPDATE phpdb.user SET name = 'Dima', password = '999999', email = 'bendar01@tut.by' WHERE id=16";
        $result = mysqli_query($link, $sql);
            if ($result !="") {
                echo("<br>Data Update OK <br>");
            } else {
                echo("<br>Data Update Failed <br>");
            }
    }
}