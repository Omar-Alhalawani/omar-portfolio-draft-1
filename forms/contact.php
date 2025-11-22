<?php
// ******************************************************
// NOTE: GitHub Pages does NOT run PHP.
// This file is only for future use on a PHP-enabled server.
// ******************************************************

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = strip_tags(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // Email settings
    $to = "omar.alhalawani2006@gmail.com";
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

    $body = "You received a new message from your website contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Message sent successfully!";
    } else {
        http_response_code(500);
        echo "Error sending email.";
    }

} else {
    http_response_code(403);
    echo "Request blocked.";
}
?>
