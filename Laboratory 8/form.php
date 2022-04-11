<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Form</title>
        <link 
        href="stylesheet.css"
        rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <p>SEND EMAIL</p>
            <form class="contact-form" action="contactform.php" method="post">
                <input type="text" name="name" placeholder="Full name"><br><br>
                <input type="text" name="mail" placeholder="Email"><br><br>
                <input type="text" name="subject" placeholder="Subject"><br><br>
                <textarea name="message" placeholder="Message"></textarea> <br> <br>
                <button type="submit" name="submit">SEND EMAIL</button>
            </form>
        </div>
    </body>
</html> 