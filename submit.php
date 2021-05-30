<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $subject = $_POST['subject']; // Get Subject 
        $phone = $_POST['phone']; // Get phone No
        $msg = $_POST['message']; // Get Message Value
         
        $to = "me@rodney.co.zw"; // You can change here your Email
        $subject = "'$name' has been sent a mail"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <h1>New Contact Request</h1>
                <hr/>
                <h3>Name :</h3>
                <p>$name</p>
                <h3>Email :</h3>
                <p>$email_id</p>
                <h3>Phone :</h3>
                <p>$phone</p>
                <h3>Subject :</h3>
                <p>$subject</p>
                <h3>Message :</h3>
                <p>$msg</p>
                <hr/>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Subject: </strong></td>
                            <td style='width:400px'>$subject</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: rodney.co.zw <me@rodney.co.zw>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
        $headers .= 'Cc: rodneymupanduki@gmail.com' . "\r\n"; // If you want add cc
         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Rodney Mupanduki">

    <!-- Facebook open graph -->
    <meta property="og:url" content="http://rodney.co.zw" />
    <meta property="og:title" content="Rodney Mupanduki" />
    <meta property="og:description"
        content="Rodney is a developer based in Harare, Zimbabwe but working globaly. Ever need a great app or website to represent your business online? Give him a call" />
    <meta property="og:image" content="images/open-graph.png" />

    <!-- Twitter cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@rodney_263">
    <meta name="twitter:creator" content="@rodney_263">
    <meta name="twitter:url" content="https://rodney.netlify.com">
    <meta name="twitter:title" content="Rodney Mupanduki">
    <meta name="twitter:description"
        content="Rodney is a developer based in Harare, Zimbabwe but working globaly. Ever need a great app or website to represent your business online? Give him a call">
    <meta name="twitter:image" content="images/open-graph.png">

    <meta name="keywords" content="Website Designer, Website Developer, web designer, web developer, EPK, Electronic Press Kits">
    <meta name="description"
        content="Rodney is a developer based in Harare, Zimbabwe but working globaly. Ever need a great app or website to represent your business online? Give him a call">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Poppins&display=swap" rel="stylesheet">
    <title>Rodney Mupanduki</title>
    <link rel="stylesheet" href="default.css">

    <link id="theme-style" rel="stylesheet" href="">

    style{
        .submit-message{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify content : center;
            alighn-items: center;
        }

        .message-box{
            padding : 30px;
        }

        .message-box .btn{
            color : #ffffff;
            background: #333333;
            padding 20px 30px;
        }
    }
</head>

<body>

<section class="submit-message">
    <div class="message-box">
        <h3>Thank you for filling the form. </h3>
        <a href="index.html" class="btn">Back</a>
    </div>
</section>

</body>
</html>