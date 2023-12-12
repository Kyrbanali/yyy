<?php
echo 123;

try {
    $pdo = new PDO("pgsql:host=db; port=5432; dbname=postgres;", "postgres", "postgres");

    print_r($pdo);
} catch (PDOException $throwable) {
    echo $throwable->getMessage();
}

