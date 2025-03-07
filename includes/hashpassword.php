<?php
//hashing password for security purposes
$passwordSignup ="";

$options = [
    'cost' => 12
];

$hashedpassword = password_hash($passwordSignup, PASSWORD_BCRYPT, $options);

$password = "";

if (password_verify($password, $hashedpassword)){
    echo "Password is correct";
}
else{
    echo "Password is not correct";
}
