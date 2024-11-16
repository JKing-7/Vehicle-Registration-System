<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id_number = isset($_POST["id_number"]) ? $_POST["id_number"] : '';
  $password = isset($_POST["password"]) ? $_POST["password"] : '';
  $last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : '';
  $first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : '';
  $middle_name = isset($_POST["middle_name"]) ? $_POST["middle_name"] : '';
  $sex = isset($_POST["sex"]) ? $_POST["sex"] : '';
  $course = isset($_POST["course"]) ? $_POST["course"] : '';
  $year_level = isset($_POST["year_level"]) ? $_POST["year_level"] : '';
  $vehicle_type = isset($_POST["vehicle_type"]) ? $_POST["vehicle_type"] : '';
  $vehicle_make = isset($_POST["vehicle_make"]) ? $_POST["vehicle_make"] : '';
  $vehicle_model = isset($_POST["vehicle_model"]) ? $_POST["vehicle_model"] : '';
  $vehicle_year = isset($_POST["vehicle_year"]) ? $_POST["vehicle_year"] : '';
  $vehicle_color = isset($_POST["vehicle_color"]) ? $_POST["vehicle_color"] : '';
  $plate_number = isset($_POST["plate_number"]) ? $_POST["plate_number"] : '';
  $house_no = isset($_POST["house_no"]) ? $_POST["house_no"] : '';
  $street = isset($_POST["street"]) ? $_POST["street"] : '';
  $province = isset($_POST["province"]) ? $_POST["province"] : '';
  $municipality = isset($_POST["municipality"]) ? $_POST["municipality"] : '';
  $barangay = isset($_POST["barangay"]) ? $_POST["barangay"] : '';
  $purok = isset($_POST["purok"]) ? $_POST["purok"] : '';

  $sql = "INSERT INTO users (id_number, password, last_name, first_name, middle_name, sex, course, year_level, vehicle_type, vehicle_make, vehicle_model, vehicle_year, vehicle_color, plate_number, house_no, street, province, municipality, barangay, purok)
  VALUES ('$id_number', '$password', '$last_name', '$first_name', '$middle_name', '$sex', '$course', '$year_level', '$vehicle_type', '$vehicle_make', '$vehicle_model', '$vehicle_year', '$vehicle_color', '$plate_number', '$house_no', '$street', '$province', '$municipality', '$barangay', '$purok')";

  if ($conn->query($sql) === TRUE) {
    header("Location: VRSSuccess.html");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
