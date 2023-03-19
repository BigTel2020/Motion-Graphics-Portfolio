<?php
if (isset($_POST['submit'])) {
    $to = 'terrysamsalueng@gmail.com'; // Replace with your email address
    $subject = 'New message from contact form';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "Name: $name\nEmail: $email\n\n$message";

    // Additional headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for contacting us!';
    } else {
        echo 'Sorry, an error occurred. Please try again later.';
    }
}
?>

<form method="post">
    <label>Name</label>
    <input type="text" name="name" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Message</label>
    <textarea name="message" required></textarea>

    <input type="submit" name="submit" value="Send">
</form>