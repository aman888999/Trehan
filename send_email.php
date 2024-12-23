<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Set up email parameters
    $to = "mandatepropcartt@gmail.com"; // Change this to your email address
    $subject = "Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMobile: $mobile";

    // Write data to text file
    $data = "Name: $name\nEmail: $email\nMobile: $mobile\n\n";
    file_put_contents('form-data.txt', $data, FILE_APPEND); // Append data to the file

    // Send email
    $mailSent = mail($to, $subject, $body);

    // Return response
    if ($mailSent) {
        // Redirect to the thank you page
        header("Location: thankyou.html");
        exit();
    } else {
        echo 'Error: Email could not be sent.';
    }
}
?>
