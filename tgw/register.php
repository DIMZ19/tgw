<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tgacc";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $fname = htmlspecialchars(trim($_POST['fname']));
    $mname = htmlspecialchars(trim($_POST['mname']));
    $lname = htmlspecialchars(trim($_POST['lname']));
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

 
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO tgaccount (Fname, Mname, Lname, Username, Password) 
            VALUES (?, ?, ?, ?, ?)";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $fname, $mname, $lname, $username, $hashedPassword);


    if ($stmt->execute()) {
        echo "Registration successful! You can now <a href='index.html'>log in</a>.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
