<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $majority = $_POST['majority'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform any necessary processing or validation with the form data

  // Display a success message
  echo "Welcome $name. Your phone number is: $phone. Your username is: $username.";


} else {
  // Redirect to the form page if accessed directly
  header("Location: index.html");
  exit;
}
?>
