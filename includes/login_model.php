<?php

declare(strict_types= 1);

function get_user(object $pdo, string $email){

    $query ="SELECT * FROM employees WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function get_pass(object $pdo, string $hashedpassword){

    $query ="SELECT * FROM employees WHERE password = :password;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":password", $hashedpassword);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $hashedpassword;
}