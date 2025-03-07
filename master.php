<?php
//error reports
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once 'includes/login_view.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Employee Portal</title>
</head>
<body>
  <div class="jumbotron">
      <div class="containerMain">
          <h1>Farmer John's<h1>

      </div>
  </div>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="btn btn-secondary btn-padding" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-secondary btn-padding" aria-current="page" href="#aboutUs">AboutUs</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-secondary btn-padding" href="#contactUs">ContactUs</a>
                </li>
            </ul>
        </div>
        <div class="navbar-text text-center"> <!-- Added text-center class here -->
        <?php echo isset($_SESSION["user_firstName"]) ? $_SESSION["user_firstName"] : ''; ?>
        </div>
        <ul class="navbar-nav ml-auto">
            <?php
            session_start();
            if (isset($_SESSION['userId'])) {
                echo '<li class="nav-item"><a class="btn btn-secondary btn-padding" href="profile.php">Profile</a></li>';
                echo '<li class="nav-item"><a class="btn btn-danger btn-padding" href="logout.php">Logout</a></li>';
            } else {
                echo '<li class="nav-item"><a class="btn btn-primary btn-padding" href="login.php">Login</a></li>';
                echo '<li class="nav-item"><a class="btn btn-secondary btn-padding" href="reg.php">Registration</a></li>';
            }
            ?>
        </ul>
    </div>
  </nav>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


