<?php 
    error_reporting(E_ALL ^ E_NOTICE);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Employee Login</title>
</head>
<body>

<?php
 require 'master.php'; 
 check_login_errors();
 ?>

<form action="includes/verifyLogin.php" method="post">
<div>
<div class="smcontainer">
    <h1 style="text-align: center;">Welcome to the Login Page</h1>
    
    <div class="login">
        <input 
            type="text" 
            name="email" 
            class="form-control" 
            placeholder="Enter your email address" 
            required
        />
    </div>

    <div class="login">       
        <input 
            type="password" 
            name="password"  
            class="form-control" 
            placeholder="Enter Your Password" 
            required
        />
        
    </div> 

    <button type="submit" class="btn btn-primary">Login</button>
</div>
</div>

</form>



<?php require_once 'footer.php'; ?>
</body>
</html>