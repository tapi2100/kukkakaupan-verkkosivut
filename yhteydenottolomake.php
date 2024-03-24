<!-- contact-form.php -->

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send email
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Message from Kukkakauppa Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send mail using PHP mail function
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo "<p>Your message has been sent successfully. We will get back to you soon!</p>";
    } else {
        // Email failed to send
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <button type="submit">Send Message</button>
</form>
