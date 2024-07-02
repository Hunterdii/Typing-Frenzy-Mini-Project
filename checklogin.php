<?php
    // Check if the form is submitted
    if(isset($_POST['login'])) {
        // Get the input values
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        // Connect to the database
        $con = mysqli_connect("localhost","root","","registration");

        // Construct the SQL query to check if the entered username and password match with the data stored in the database
        $sql = "SELECT * FROM user_table WHERE email='$email' AND pwd='$pwd'";
        $result = mysqli_query($con, $sql);

        // Check if there is a row with the entered username and password
        if(mysqli_num_rows($result) > 0) {
            header('Location: main.php');
            exit();
        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
            header('Location: index.php');
            exit();
        }
    }
?>
