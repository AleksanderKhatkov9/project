<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php
echo "My first PHP script!<br>";
?>
<?php
include 'C:\xampp\htdocs\dashboard\php-web\dao\DaoUser.php';
?>

<table class="table">
    <?php
    $var = new DaoUser();
    $param = $var->getAll();
    //    var_dump($param);
    ?>


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
                <a href="?id=<?php echo $value->id; ?>"></a><a href="Edit.html">Edit</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="delete?id=<c:out value='${book.id}' />">Delete</a>

            </td>
        </tr>
    <?php } ?>

</body>
</html>