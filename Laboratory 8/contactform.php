<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "albertohl2000@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = $name." wrote you this message using PHP Form:\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: form.php?mailsend");
}

