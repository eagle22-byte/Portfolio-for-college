<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $mobile  = htmlspecialchars($_POST["mobile"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<h2>Thank you for contacting me, $name!</h2>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mobile:</strong> $mobile</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "Invalid request!";
}
?>
