
<?php

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
        echo "Connected successfully";
        mysqli_close($conn);
        return $conn;
    }
