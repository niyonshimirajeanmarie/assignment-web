<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "registration_db";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$city = $_POST['city'];
$pin_code = $_POST['pin_code'];
$state = $_POST['state'];
$country = $_POST['country'];
$hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";
$qualification = $_POST['qualification'];
$courses_applied = $_POST['courses_applied'];

$sql = "INSERT INTO student_tb (first_name, last_name, email, mobile, gender, dob, address, city, pin_code, state, country, hobbies, qualification, courses_applied)
VALUES ('$first_name', '$last_name', '$email', '$mobile', '$gender', '$dob', '$address', '$city', '$pin_code', '$state', '$country', '$hobbies', '$qualification', '$courses_applied')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>