<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $hobbies = htmlspecialchars($_POST['hobbies']);

    echo "
    <h1>Registration Details</h1>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Date of Birth:</strong> $dob</p>
    <p><strong>Gender:</strong> $gender</p>
    <p><strong>Hobbies:</strong> $hobbies</p>
    ";
} else {
    echo "Invalid request method.";
}
?>
