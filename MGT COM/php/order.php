<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    <h1>Order Received</h1>
    <p>Will redirect you back to the support page in less then 10 seconds...</p>

    <?php
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $suburb = $_POST['suburb'];
        $postal = $_POST['postal'];
        $product = $_POST['product'];
        $data = $_POST['data'];
        $subject = "New Order";
        $header = "Content-type:text/html;charset=UTF-8";
        $message = "
        <html>
            <head>
                <title>New Order</title>
            </head>
            <body>
            <br>
                <h1>New Order from $name $surname</h1>
                <br>
                <h4>Personal Details</h4>
                <ul>
                    <li>Full Name: $name $surname</li>
                    <li>Email: $email</li>
                    <li>Phone Number: $phone</li>
                    <li>Email: $email</li>
                </ul><br>
                <h4>Address</h4>
                <p>$street</p>
                <p>$city</p>
                <p>$suburb</p>
                <p>$postal</p><br>
                <h4>Order Details</h4>
                <p>Product: $product</p>
                <p>Data Amount: $data</p>
            </body>    
        </html>         
        ";

        mail("info@magubanetechonologies.co.za", $subject, $message, $header);
    

    ?>
</body>
</html>