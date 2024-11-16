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
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $admin_username = $_POST["username"];
    $admin_password = $_POST["password"];

    // Hash the password for security
    $hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin_credentials (first_name, middle_name, last_name, age, sex, username, password) VALUES ('$first_name', '$middle_name', '$last_name', $age, '$sex', '$admin_username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Admin account created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
