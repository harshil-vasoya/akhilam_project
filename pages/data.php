<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/php.css">
</head>
<body>


    
    
    <?php


        $conn = new mysqli("localhost", "root", "", "DS_projects");

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 

        $name = $_POST["name"];
        $email = $_POST["mail"];
        $number = $_POST["number"];

        $sql = "INSERT INTO data VALUES ('$name','$email','$number')";


        if ($conn->query($sql) === TRUE) {
        echo '
        <div class="main-box">
            <h1>Your Inquire has been <span style="font-size: 3rem;">Successfully</span> submitted</h1>
            <h2>you will get your response back in 24 working hours.</h2>
            <a href="contact.html">Go Back To Contact</a>
        </div>';
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    ?>




</body>
</html>