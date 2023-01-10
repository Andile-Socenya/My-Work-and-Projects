<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted</title>
</head>
<body>
    <div class="container text-center m-5">
        <h2 class="p-2">Form Submitted</h2>
        <p>Will redirect you back to the support page in less then 10 seconds...</p>
    </div>

    <?php
        $to = "info@magubanetechnologies.co.za";
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = "
            <html>
                <head>
                    <title>Form</title>
                </head>
                <body>
                <br>
                    <h1>Form From $name</h1>
                    <br>
                    <p>$message</p>
                </body>    
            </html>  
        ";
        $headers = "From: <$email>". "\r\n" . "Content-type:text/html;charset=UTF-8";

        mail($to, $subject, $message, $headers);    
    
    ?>
</body>
</html>