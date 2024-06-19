<?php

// print_r($_POST);
// Array ( [schoolName] => Test [schoolLevel] => secondary [phone] => +91 89075 23540 [email] => vrnavaneeth135@gmail.com )
include('functions.php');

$schoolName = $_POST['schoolName'];
$schoolLevel = $_POST['schoolLevel'];
$phone = $_POST['phone'];
$email = $_POST['email'];

include('../reusable/connection.php');

$query = "INSERT INTO schools 
(`School Name`,
 `School Level`,
  `Phone`, `Email`)
   VALUES 
   ('" . mysqli_real_escape_string($connect, $schoolName) . "',
              '" . mysqli_real_escape_string($connect, $schoolLevel) . "',
              '" . mysqli_real_escape_string($connect, $phone) . "',
              '" . mysqli_real_escape_string($connect, $email) . "')";

$school = mysqli_query($connect, $query);

if ($school) {
    set_message('School added successfully', 'success');
    header('Location: ../index.php');
} else {
    echo 'Failed to add school';
}
