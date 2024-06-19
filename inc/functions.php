<?php
session_start();
function set_message($message, $class)
{
    $_SESSION['message'] = $message;
    $_SESSION['className'] = $class;
}

function get_message()
{
    if (isset($_SESSION['message'])) {
        echo '<div class="alert alert-' . $_SESSION['className'] . '" role="alert" >' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']);
        unset($_SESSION['className']);
    }
}
