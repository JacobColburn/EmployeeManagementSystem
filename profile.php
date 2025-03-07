<?php 
    error_reporting(E_ALL ^ E_NOTICE);
    include_once 'includes/viewProfile.php';
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="css"href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Profile</title>
</head>
<body>
    <?php require 'master.php'; ?>
        <div class="container">
                                        <!-- welcome user to their profile and uppercase thier name -->
            <h1>Welcome to your Profile, <?php echo $firstName; ?>
            <div class="container">
               <h3>First Name : <?php echo $firstName; ?> </h3>
               <h3>Last Name : <?php echo $lastName; ?></h3>
               <h3>Social Security # : <?php echo $ssn; ?></h3>
               <h3>Email : <?php echo $email; ?></h3>
               <h3>Address : <?php echo $address; ?></h3> 
               <h3>Phone : <?php echo $phone; ?></h3>
               <h3>Salary : <?php echo $salary; ?></h3>
                
            </div>
        </div>
        
    <?php require_once 'footer.php'; ?>
</body>
</html>