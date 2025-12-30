<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require "../config.php";

$data = [
    'user_id' => $_POST['user_id'],
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'mobile' => $_POST['mobile'],
    'email' => $_POST['email'],
    'address' => $_POST['address'],
    'class' => $_POST['class'],
    'course' => $_POST['course'],
    'joining_year' => $_POST['joining_year'],
    'dob' => $_POST['dob'],
    'blood_group' => $_POST['blood_group']  
];

$user_id  = $data['user_id'];
$user_first_name  = $data['first_name'];
$user_last_name  = $data['last_name'];
$user_mobile   = $data['mobile'];
$user_email = $data['email'];
$user_address = $data['address'];
$user_class = $data['class'];
$user_course = $data['course'];
$user_joining_year = $data['joining_year'];
$user_dob = $data['dob'];
$user_blood_group = $data['blood_group'];

$query = "UPDATE somlalit_user SET user_first_name='$user_first_name', user_last_name='$user_last_name', user_mon='$user_mobile', user_email='$user_email', user_address='$user_address', user_class='$user_class', user_course='$user_course', user_joining_year='$user_joining_year', user_dob='$user_dob', user_bloofgroup='$user_blood_group' WHERE user_id=$user_id";

if (mysqli_query($conn, $query)) {
    header("Location: /nij/index.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}