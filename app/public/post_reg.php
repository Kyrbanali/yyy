
<a href="get_reg.php">Get REG</a>
<BR>

<?php

$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['psw'];
try {
    $pdo = new PDO("pgsql:host=db; dbname=postgres;", "postgres", "postgres");

    $pdo->exec("insert into users(name, email, password) values ('$name', '$email', '$password')");

    print_r($pdo);
} catch (PDOException $throwable) {
    echo $throwable->getMessage();
}

