<?php
error_reporting(E_ALL ^ E_NOTICE);

class dbConnect
{

    private $servername;
    private $user;
    private $pass;
    private $dbname;

    public function connect()
    {
        $this->servername = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->dbname = "employee_db";

        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $pdo;


        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();

        }
    }

    public function viewEmployees()
    {
        $sql = "SELECT * FROM employees";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $employees = $stmt->fetchAll();

        echo '<div class="employee-grid">';
        foreach ($employees as $employee) {
            echo '<div class="employee">';
            echo $employee["firstName"] . " " . $employee["lastName"];
            echo '</div>';
        }
        echo '</div>';
    }


    //public function registerEmployee($email, $password, $firstName, $lastName, $SSN, $address, $phone, $salary){
    //$sql = "INSERT INTO employees(email, password, firstName, lastName, SSN, address, phone, salary) VALUES (?,?,?,?,?,?,?,?)";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([$email, $password, $firstName, $lastName, $SSN, $address, $phone, $salary]);

    //}

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    ;

    <?php
    require 'master.php';

    ?>

    <div class="container-welcome">
        <h1>Welcome to Farmer John's!

            We’re your neighborhood market dedicated to bringing
            you fresh produce, quality products, and unbeatable deals.
            Whether you’re stocking up on pantry essentials or looking
            for something special for dinner, we’re here to make your
            shopping experience easy and enjoyable.
            Thank you for choosing us! - Farmer John

        </h1>

    </div>

    </br>
    <div class="container">
        <h1>Our Fresh, Quality Produce</h1>
        </br>
        <div class="row">
            <div class="col-sm-4">
                <img src="uploader/uploads/lettuce.jfif" alt="Produce 1" width="100%" class="product-img">
                <h3>Lettuce</h3>
            </div>
            <div class="col-sm-4">
                <img src="uploader/uploads/tomatos.jpg" alt="Produce 2" width="100%" class="product-img">
                <h3>Tomatos</h3>
            </div>
            <div class="col-sm-4">
                <img src="uploader/uploads/onions.jpg" alt="Produce 3" width="100%" class="product-img">
                <h3>Onions</h3>
            </div>
            <div class="col-sm-4">
                <img src="uploader/uploads/potatoes.jfif" alt="Produce 3" width="100%" class="product-img">
                <h3>Potatoes</h3>
            </div>
            <div class="col-sm-4">
                <img src="uploader/uploads/carrots.jpg" alt="Produce 3" width="100%" class="product-img">
                <h3>Carrots</h3>
            </div>
            <div class="col-sm-4">
                <img src="uploader/uploads/oranges.jfif" alt="Produce 3" width="100%" class="product-img">
                <h3>Oranges</h3>
            </div>
            <div class="col-sm-4">
                <img src="uploader/uploads/grapes.jfif" alt="Produce 3" width="100%"class="product-img">
                <h3>Grapes</h3>
            </div>
            <div class="col-sm-4">
                <img src="uploader/uploads/bananas.jfif" alt="Produce 3" width="100%" class="product-img">
                <h3>Bananas</h3>
            </div>
            <div class="col-sm-4">
                <img src="uploader/uploads/red apples.jfif" alt="Produce 3" width="100%" class="product-img">
                <h3>Red Apples</h3>
            </div>
            <div class="col-sm-4">
                <img src="uploader/uploads/yellow apples.jpg" alt="Produce 3" width="100%" class="product-img">
                <h3>Green Apples</h3>
            </div>
        </div>
    </div>
    
    </br>
    <div class="container" type="db" id="aboutUs">

        <h2>About Us</h2>

        <p>
            Farmer John's is a family-owned and operated farming business
            that specializes in growing and selling fresh produce.
            Our mission is to provide our customers with the best possible
            selection of locally grown, organic fruits and vegetables,
            while offering a wide range of quality products and deals.
        </p>
        <p>
            We strive to create a welcoming and supportive environment for our customers,
            by offering quality service, customer satisfaction,
            and a friendly and knowledgeable staff.
        </p>
        <p>
            Were always looking for new innovative individuals to join the team.
            Take a look at our current team of amazing employees!
        </p>
        </br>
        <div class="container-welcome">
            <p>
                <?php
                $object = new dbConnect;
                //$object -> registerEmployee("tommyboy1@gmail.com","password5","Tommy", "Boothe", "005", "157 lazy dr", "667-543-8441", "49000.00" );
                $object->viewEmployees();
                ?>
            </p>
        </div>
    </div>

    <div class="container" id="contactUs">
        <h2>Contact Us</h2>
        <p>
            Thank you for choosing Farmer John’s Grocery! We’re delighted to have you as part of our community and truly
            value your interest in our store.
        </p>
        <p>
            Whether you have questions about our fresh produce, need help with an order, or simply want to share your
            thoughts, our friendly team is here to assist you. We believe that your feedback and inquiries help us serve
            you better every day.
        </p>
        <p>
            Please feel free to reach out to us by email at <a
                href="mailto:info@farmerjohn.com">info@farmerjohn.com</a>. If you prefer to speak with someone directly,
            give us a call at (999) 999-888 we aim to respond to all inquiries as quickly as possible.
        </p>
        <p>
            At Farmer John’s Grocery, we are committed to providing you with a seamless shopping experience and
            outstanding customer service. Your satisfaction is our top priority, and we welcome any suggestions or
            comments you may have.
        </p>
        <p>
            Thank you for being a valued member of our community. We look forward to hearing from you and hope you have
            a wonderful day!
        </p>
    </div>

    <?php require_once 'footer.php'; ?>
</body>

</html>