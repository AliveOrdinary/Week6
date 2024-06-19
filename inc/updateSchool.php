<?php
include('functions.php');

if (isset($_POST['updateSchool'])) {
    $id = $_POST['id'];
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
}

include('../reusable/connection.php');

// update school
$query = "UPDATE schools SET 
`School Name` = '" . mysqli_real_escape_string($connect, $schoolName) . "',
`School Level` = '" . mysqli_real_escape_string($connect, $schoolLevel) . "',
`Phone` = '" . mysqli_real_escape_string($connect, $phone) . "',
`Email` = '" . mysqli_real_escape_string($connect, $email) . "'
WHERE id = $id";

$school = mysqli_query($connect, $query);

if ($school) {
    set_message('School updated successfully', 'success');
    header('Location: ../index.php');
} else {
    echo 'Failed to update school';
}
