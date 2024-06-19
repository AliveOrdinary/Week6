<?php
include('functions.php');
require('../reusable/connection.php');
if (isset($_GET['deleteSchool'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM schools WHERE id = $id";
    $school = mysqli_query($connect, $query);
    if ($school) {
        set_message('School deleted successfully', 'danger');
        header('Location: ../index.php');
    } else {
        echo 'Failed to delete school';
    }
}
