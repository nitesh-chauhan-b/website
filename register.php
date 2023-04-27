<?php

$conn = mysqli_connect("localhost", "root", "nikul");

if ($conn->connect_error) {
    die("Connection is failed :" . $conn->connect_error);
}

mysqli_select_db($conn, 'practice');

if (isset($_POST['Register'])) {
    $name = $_POST['name'];

    $email = $_POST['email'];
    $phone = $_POST['phone']

    $sql = "SELECT * FROM register where email ='$email' and user_name ='$name'";
    $query = $conn->query($sql);

    $count = mysqli_num_rows($query);

    if ($count >= 1) {
        echo "Email alredy exists";
    } else {
        echo "Register Successful!";
    }
}

?>