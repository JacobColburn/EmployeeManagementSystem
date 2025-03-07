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
    <title>Registration</title>
</head>
<body>
<?php require 'master.php'; ?>
    <div class="container">
        
        <h2>Welcome to the Team!</h2><br>
        <h5>Please fill out your profile information below. Once complete click the create button to finalize your profile.</h5>

        <br/>
        <form action="includes/formhandler.inc.php" method="POST">
            <div class="register">
                <label for="emailInput" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="register">
                <label for="fnameInput" class="form-label">First Name</label>
                <input type="name" name="firstName" class="form-control" id="fnameInput" aria-describedby="nameHelp">
                <div id="nameExample" class="form-text">ex.) John</div>
            </div>
            <div class="register">
                <label for="lnameInput" class="form-label">Last Name</label>
                <input type="name" name="lastName" class="form-control" id="lnameInput" aria-describedby="nameHelp">
                <div id="nameExample" class="form-text">ex.) Doe</div>
            </div>
            <div class="register">
                <label for="addressInput" class="form-label">Address</label>
                <input type="address"  name="address" class="form-control" id="addressInput" aria-describedby="emailHelp">
                <div id="addressHelp" class="form-text">ex.) 1500 windoor view</div>
            </div>
            <div class="register">
                <label for="phoneInput" class="form-label">Phone</label>
                <input type="phone" name="phone" class="form-control" id="phoneInput" aria-describedby="phoneHelp">
                <div id="phoneHelp" class="form-text">format (xxx-xxx-xxxx)</div>
            </div>
            <div class="register">
                <label for="ssnInput" class="form-label">Social Security Number</label>
                <input type="ssn" name="ssn" class="form-control" id="ssnInput" aria-describedby="ssnHelp">
                <div id="ssnHelp" class="form-text">All this information is kept private.</div>
            </div>
            <div class="register">
                <label for="passwordInput1" class="form-label">New Password</label>
                <input type="password" name="password" class="form-control" id="passwordInput1">
            </div>
            <div class="register">
                <label for="salary" class="form-label">Salary</label>
                <input type="salary" name="salary" class="form-control" id="salary">
                
            </div>
            
            <br />
            <button type="submit" class="btn btn-secondary btn-lg">Create Profile!</button> 
        </form>
        <br/>
        
    </div>
<?php require_once 'footer.php'; ?>
</body>
</html>