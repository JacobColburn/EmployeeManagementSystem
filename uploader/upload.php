<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    // Specify file variables
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    // Separate file extension and convert to lowercase
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // Set array of allowed extensions
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    //check if file is in the allowed array
    if (in_array($fileActualExt, $allowed)) {
        //check if the file error is ok
        if ($fileError === 0) {
            //check if file size is under specific amount
            if ($fileSize < 500000) {
                //give the file a unique id and move its location from tmp to its new destination
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;

                move_uploaded_file($fileTmpName, $fileDestination);
                //let us now the file was uploaded on the homepage
                header("Location: index.php?uploadsuccess");
                // Terminate script execution after redirect
                exit(); 
                //error messages for the if/else loops
            } else {
                echo "Your file is too big";
            }
        } else {
            echo "Error uploading your file";
        }
    } else {
        echo "You cannot upload this file type. Please use one of the following extensions: jpg, jpeg, png, pdf";
    }
}
?>