<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    //echo "New record fhfgghfhgfgh successfully".$name.$message;//

    if ($name && $email && $message) {
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo "error";
        }
    }
}
