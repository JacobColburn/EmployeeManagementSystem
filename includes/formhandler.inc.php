<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email= $_POST["email"];
    $firstName= $_POST["firstName"];
    $lastName= $_POST["lastName"];
    $address= $_POST["address"];
    $phone= $_POST["phone"];
    $ssn= $_POST["ssn"];
    $password= $_POST["password"];
    $salary= $_POST["salary"];

    try {
        require 'db.ini.php';
        
        

        $query = "INSERT INTO employees (email, firstName, lastName, address, phone, ssn, password, salary) VALUES(?,?,?,?,?,?,?,?);";

        $stmt = $pdo->prepare($query);

        $options = [
            'cost' => 12
        ];
        
        $hashedpassword = password_hash($password, PASSWORD_BCRYPT, $options);

        $stmt->execute([$email, $firstName, $lastName, $address, $phone, $ssn, $hashedpassword, $salary]);

        $userId = $pdo->lastInsertId();
        $_SESSION['userId'] = $userId; 
        $_SESSION['email'] = $email;

        $pdo= null;
        $stmt= null;

        

        header("Location: ../index.php");

        die();
        
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else{
    header("Location: ../index.php?RegistrationFailed!");
}