<?php


class DaoUser
{

    function OpenCon()
    {
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных

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
        echo $varId . "<br>";
        echo $varName . "<br>";
        echo $varPassword . "<br>";
        echo $varEmail . "<br>";
        echo "****************************";
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных

        $link = mysqli_connect($host, $user, $password, $database);
        $sql = "INSERT INTO phpdb.user (name, password, email) Values ('$varName','$varPassword',' $varEmail')";

        $result = mysqli_query($link, $sql);

        if ($result == "") {
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
        $list = array();

        while ($row = mysqli_fetch_row($result)) {
//            echo "<tr>";
//            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
//            echo "</tr>";
            $list = $result;
        }
//            var_dump($list);
        return $list;
    }

    public function delete($id_del)
    {
        $id = $id_del;
        echo "DELETE" . $id_del;
        $this->OpenCon();
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных
        $link = mysqli_connect($host, $user, $password, $database);
        $sql = "DELETE FROM phpdb.user WHERE id= $id;";
        $result = mysqli_query($link, $sql);

        if ($result == "") {
            echo("<br>Data Delete OK <br>");
        } else {
            echo("<br>Data Delete Failed <br>");
        }
    }


    public function getId($getId)
    {
        $id = $getId;

        $this->OpenCon();
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных
        $link = mysqli_connect($host, $user, $password, $database);

        $sql = "SELECT * FROM phpdb.user WHERE id= $id;";
        $result = mysqli_query($link, $sql);

        $list = array();

        while ($row = mysqli_fetch_row($result)) {
//            echo "<tr>";
//            for ($j = 0; $j < 4; ++$j) echo "<td>$row[$j]</td>";
//            echo "</tr>";

            $list = $result;
        }
        return $list;
    }



    public function update($id_edit,$name_edit, $password_edit, $email_edit)
    {

        $id = $id_edit;
        $name = $name_edit;
        $pass = $password_edit;
        $email = $email_edit;

        $this->OpenCon();
        $host = 'localhost'; // адрес сервера
        $user = "root"; // имя пользователя
        $password = '[]1234#msql*[]/%?&&&?'; // пароль
        $database = 'phpdb'; // имя базы данных
        $link = mysqli_connect($host, $user, $password, $database);
        $sql = "UPDATE phpdb.user SET name = '$name', password = '$pass', email = '$email' WHERE id=$id";
        $result = mysqli_query($link, $sql);
        if ($result != "") {
            echo("<br>Data Update OK <br>");
        } else {
            echo("<br>Data Update Failed <br>");
        }
    }
}