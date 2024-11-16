<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: VRSStudentLogin.html");
    exit();
}

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

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id=$user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Landing Page</title>
    <link rel="stylesheet" href="studentLandingStyle.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $user['first_name']; ?>!</h1>
        <button id="logoutButton" class="btn btn-outline-danger btn-lg shadow">Logout</button>
    </header>
    <div class="logo-container">
        <a href="VRSHome.html">
            <img src="CCIT-removebg.png" alt="Home Page">
        </a>
        <div class="text-container">
            <p class="large-text">College of Communications and Information Technology</p>
            <p class="small-text">President Ramon Magsaysay State University</p>
        </div>
    </div>
    <div class="content">
        <h2>Your Information</h2>
        <table border="1">
            <tr>
                <th>ID Number</th>
                <td><?php echo $user['id_number']; ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $user['last_name']; ?></td>
            </tr>
            <tr>
                <th>First Name</th>
                <td><?php echo $user['first_name']; ?></td>
            </tr>
            <tr>
                <th>Middle Name</th>
                <td><?php echo $user['middle_name']; ?></td>
            </tr>
            <tr>
                <th>Sex</th>
                <td><?php echo $user['sex']; ?></td>
            </tr>
            <tr>
                <th>Course</th>
                <td><?php echo $user['course']; ?></td>
            </tr>
            <tr>
                <th>Year Level</th>
                <td><?php echo $user['year_level']; ?></td>
            </tr>
            <tr>
                <th>Vehicle Type</th>
                <td><?php echo $user['vehicle_type']; ?></td>
            </tr>
            <tr>
                <th>Vehicle Make</th>
                <td><?php echo $user['vehicle_make']; ?></td>
            </tr>
            <tr>
                <th>Vehicle Model</th>
                <td><?php echo $user['vehicle_model']; ?></td>
            </tr>
            <tr>
                <th>Vehicle Year</th>
                <td><?php echo $user['vehicle_year']; ?></td>
            </tr>
            <tr>
                <th>Vehicle Color</th>
                <td><?php echo $user['vehicle_color']; ?></td>
            </tr>
            <tr>
                <th>Plate Number</th>
                <td><?php echo $user['plate_number']; ?></td>
            </tr>
            <tr>
                <th>House No.</th>
                <td><?php echo $user['house_no']; ?></td>
            </tr>
            <tr>
                <th>Street</th>
                <td><?php echo $user['street']; ?></td>
            </tr>
            <tr>
                <th>Province</th>
                <td><?php echo $user['province']; ?></td>
            </tr>
            <tr>
                <th>Municipality</th>
                <td><?php echo $user['municipality']; ?></td>
            </tr>
            <tr>
                <th>Barangay</th>
                <td><?php echo $user['barangay']; ?></td>
            </tr>
            <tr>
                <th>Purok</th>
                <td><?php echo $user['purok']; ?></td>
            </tr>
        </table>
    </div>
    <footer>
        VRS Capstone &#169; 2024 by Dagun, Esman, Literatus, Mendoza
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('logoutButton').addEventListener('click', function() {
                logout();
            });
        });

        function logout() {
            // Clear the session
            fetch('logout.php')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.replace("VRSStudentLogin.html");
                    } else {
                        alert('Error logging out.');
                    }
                })
                .catch(error => console.error('Error logging out:', error));
        }
    </script>
</body>
</html>
