<?php
$firstName = $lastName = $gender = $email = $studentId = '';
$classes = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $gender = htmlspecialchars($_POST['gender']);
    $email = htmlspecialchars($_POST['email']);
    $studentId = htmlspecialchars($_POST['studentId']);
    $classes = isset($_POST['classes']) ? $_POST['classes'] : [];

    echo '<h3>Submitted Information:</h3>';
    echo '<p>First Name: ' . $firstName . '</p>';
    echo '<p>Last Name: ' . $lastName . '</p>';
    echo '<p>Gender: ' . $gender . '</p>';
    echo '<p>Email: ' . $email . '</p>';
    echo '<p>Student ID: ' . $studentId . '</p>';
    echo '<p>Selected Classes: ' . implode(', ', $classes) . '</p>';
}
?>
