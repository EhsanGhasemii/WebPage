<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $majority = $_POST['majority'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Process the form data (e.g., store it in a database, send an email, etc.)

    // Redirect to a success page
    header('Location: success.php');
    exit;
}
?>
