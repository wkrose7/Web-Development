<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // You can add email sending functionality here
    // For example, using PHP's mail() function

    echo "Thank you, $name. Your message has been received.";
} else {
    echo "There was an error processing your form. Please try again.";
}

?>
