<?php


try {
    $pdo = new PDO("pgsql:host=db; port=5432; dbname=postgres;", "postgres", "postgres");
    $pdo->exec("CREATE TABLE test_table (test text);");
    print_r($pdo);
} catch (PDOException $throwable) {
    echo $throwable->getMessage();
}

