<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email= $_POST["email"];
    $password= $_POST["password"];

    try {
        require_once 'db.ini.php';
        require_once 'login_model.php';
        require_once 'login_controller.php';

        $errors = [];

        if (is_input_empty($email, $password)) {
            $errors["empty_input"] = 'Cannot Sumbit Empty Fields!';
        }
        
        $result = get_user($pdo, $email);

        if (is_email_wrong($result)) {
            $errors["login_incorrect"] = 'incorrect login information!';
        }

        if (!is_email_wrong($result) && is_password_wrong($password, $result["password"])) {
            $errors['password_incorrect'] = 'incorrect login information!';
        }

        require_once 'config_session.php';
        
        if($errors){
            $_SESSION["errors_login"] = $errors;
        
            header("Location: ../login.php");
            die();
        }
        
        $newSerssionId = session_create_id();
        $sessionId = $newSerssionId. '_' . $result["id"];
        session_id($sessionId);

        $_SESSION["userId"] = $result['id'];
        $_SESSION["user_firstName"] =htmlspecialchars($result['firstName']);

        $_SESSION['last_regeneration'] = time();

        header("Location: ../index.php?login=success");
        

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}