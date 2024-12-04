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

   
    $username = htmlspecialchars(trim($_POST['Username']));
    $password = htmlspecialchars(trim($_POST['Password']));


    $sql = "SELECT Password FROM tgaccount WHERE Username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        
        if (password_verify($password, $hashedPassword)) {
            
        
            header("Location: main.php");
            exit;
        } else {
           
            echo "Incorrect username or password.";
        }
    } else {
      
        echo "Account does not exist.";
    }

   
    $stmt->close();
}


$conn->close();
?>
