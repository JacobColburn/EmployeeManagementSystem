<?php
error_reporting(E_ALL);

// databse connection file
require_once 'db.ini.php';


//start a session
session_start(); 

// Check if the user is logged in
if(isset($_SESSION["userId"])) {
    // Fetch user information from the database
    $userId = $_SESSION["userId"];

    // fetch the user information from the database using PDO statement to query the database.
    $stmt = $pdo->prepare("SELECT * FROM employees WHERE id = ?");
    $stmt->execute([$userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //set the user variables from the database
    if($user) {
        $email = $user["email"];
        $password = $user["password"];
        $firstName = $user['firstName'];
        $lastName = $user["lastName"];
        $address = $user["address"];
        $phone = $user["phone"];
        $salary = $user["salary"];
        $ssn = $user["ssn"];
    } 
} else {
    // Redirect to login page if the user is not logged in
    header("Location: login.php");
    exit;
}

