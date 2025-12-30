<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "../config.php";

$user_name         = $_POST['first_name'] ?? '';
$user_last_name    = $_POST['last_name'] ?? '';
$user_mno          = $_POST['mobile'] ?? '';
$user_email        = $_POST['email'] ?? '';
$user_address      = $_POST['address'] ?? '';
$user_class        = $_POST['class'] ?? '';
$user_course       = $_POST['course'] ?? '';
$user_joining_year = $_POST['joining_year'] ?? '';
$user_dob          = $_POST['dob'] ?? '';
$user_bloofgroup   = $_POST['blood_group'] ?? '';

$query = "INSERT INTO somlalit_user 
(user_first_name, user_last_name, user_mon, user_email, user_address, user_class, user_course, user_joining_year, user_dob, user_bloofgroup)
VALUES 
('$user_name', '$user_last_name', '$user_mno', '$user_email', '$user_address', '$user_class', '$user_course', '$user_joining_year', '$user_dob', '$user_bloofgroup')";

if (mysqli_query($conn, $query)) {
    header("Location: /nij/index.php");
    exit();
} else {
    echo "MySQL Error: " . mysqli_error($conn);
}
