<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_number = $_POST["id_number"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE id_number='$id_number' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: student_landing.php");
        exit();
    } else {
        echo "Invalid ID Number or Password";
    }
}

$conn->close();
?>
