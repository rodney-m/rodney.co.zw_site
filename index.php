<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name']; // Get Name value from HTML Form
    $email_id = $_POST['email']; // Get Email Value
    $subject = $_POST['subject']; // Get Subject 
    $phone = $_POST['phone']; // Get phone No
    $msg = $_POST['message']; // Get Message Value

    $to = "me@rodney.co.zw"; // You can change here your Email
    $subject = "'$name' has been sent a mail"; // This is your subject

    // HTML Message Starts here
    $message = "
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

    if (mail($to, $subject, $message, $headers)) {
        // Message if mail has been sent
        echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
    } else {
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
    <meta property="og:description" content="Rodney is a developer based in Harare, Zimbabwe but working globally. Ever need a great app or website to represent your business online? Give him a call." />
    <meta property="og:image" content="images/open-graph.png" />

    <!-- Twitter cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@rodney_263">
    <meta name="twitter:creator" content="@rodney_263">
    <meta name="twitter:url" content="https://rodney.netlify.com">
    <meta name="twitter:title" content="Rodney Mupanduki">
    <meta name="twitter:description" content="Rodney is a developer based in Harare, Zimbabwe but working globaly. Ever need a great app or website to represent your business online? Give him a call">
    <meta name="twitter:image" content="images/open-graph.png">

    <meta name="keywords" content="Freelance Web Developer, Zimbabwe, Website Designer, Website Developer, web designer, web developer, EPK, Electronic Press Kits">
    <meta name="description" content="Rodney is a freelance developer based in Harare, Zimbabwe but working globaly. Ever need a great app or website to represent your business online? Give him a call">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Poppins&display=swap" rel="stylesheet">
    <title>Rodney Mupanduki</title>
    <link rel="stylesheet" href="default.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link id="theme-style" rel="stylesheet" href="">
</head>

<body>
    <section class="s1">
        <div class="main-container">
            <div class="greeting-wrapper">
                <h1>Hi, Im Rodney Mupanduki</h1>
            </div>

            <div class="intro-wrapper">
                <div class="nav-wrapper">
                    <div class="dots-wrapper">
                        <div id="dot-1" class="browser-dot"></div>
                        <div id="dot-2" class="browser-dot"></div>
                        <div id="dot-3" class="browser-dot"></div>
                    </div>

                    <ul id="navigation">
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="left-column">
                    <img id="profile_pic" src="images/rodney.png" alt="rodney">
                    <h5 style="text-align: center; line-height: 0;">Personalize theme</h5>

                    <div id="theme-options-wrapper">
                        <div data-mode="light" id="light-mode" class="theme-dot"></div>
                        <div data-mode="blue" id="blue-mode" class="theme-dot"></div>

                    </div>

                    <p id="settings-note">Theme settings will be saved for <br> your next visit</p>
                </div>

                <div class="right-column">
                    <div id="preview-shadow">
                        <div id="preview">
                            <div id="corner-tl" class="corner"></div>
                            <div id="corner-tr" class="corner"></div>
                            <h3>What I Do</h3>
                            <p>
                                I approach each project with passion and creativity matching the purpose of a
                                website with a great design
                            </p>

                            <div id="corner-br" class="corner"></div>
                            <div id="corner-bl" class="corner"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s2">
        <div class="main-container">
            <div class="about-wrapper">
                <div class="about-me">
                    <h4>More about me</h4>

                    <p>
                        I am a student at Harare Institute of technology and I enjoy working on the frontend.
                    </p>
                    <p>
                        I describe myself as a passionate and creative person who pays particular attention to detail.
                    </p>
                    <p>
                        I am also the Google Developers Student Clubs Lead for my campus
                    </p>



                </div>
                <div class="social-links">

                    <h3>Find me on Social Media</h3>

                    <a target="_blank" href="https://instagram.com/rodney.zw" class=""><i class="fab fa-instagram"></i> @rodney.zw </a>
                    <a target="_blank" href="https://twitter.com/rodney_263" class=""><i class="fab fa-twitter"></i> @rodney_263 </a>
                    <a target="_blank" href="https://www.facebook.com/anesu.rodney.1" class=""><i class="fab fa-facebook-f"></i> @Rodney Mupanduki </a>
                    <a target="_blank" href="mailto:me@rodney.co.zw" class=""><i class="fas fa-envelope-square"></i> me@rodney.co.zw</a>
                    <a target="_blank" href="tel:+263713257355" class=""><i class="fas fa-phone"></i> +263 713 257 355</a>
                </div>

            </div>
        </div>
    </section>

    <section class="s1" id="portfolio">
        <div class="main-container">
            <h3 style="text-align: center;">Some of my past projects</h3>
            <div class="post-wrapper">

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/whatsapp-clone.png" alt="post thubnail">
                        <div class="post-preview">
                            <h6 class="post-title">WhatsApp Clone</h6>
                            <p class="post-intro">
                                <em>WhatsApp Clone, </em>
                                WhatsApp clone app with chat rooms for Desktops, App is not optimized for mobile phones, therefore open on a desktop or use desktop mode on your phone browser
                            </p>
                            <a target="_blank" href="https://whatsapp-clone-edf2e.web.app/">View</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/tinder-clone.png" alt="post thubnail">
                        <div class="post-preview">
                            <h6 class="post-title">Tinder Clone</h6>
                            <p class="post-intro">
                                <em>Tinder clone, </em>
                                tinder clone app with swipe effect
                            </p>
                            <a target="_blank" href="https://tinder-clone-8d38b.web.app/">View</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/fourlanos.png" alt="post thubnail">
                        <div class="post-preview">
                            <h6 class="post-title">Fourlanos Website</h6>
                            <p class="post-intro">
                                <em>Fourlanos, </em>
                                Website for Dr Fourlanos
                            </p>
                            <a target="_blank" href="https://fourlanos.se">View</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/digitalhub.png" alt="post thubnail">
                        <div class="post-preview">
                            <h6 class="post-title">Online Store</h6>
                            <p class="post-intro">
                                <em>Digital Hub, </em>an online store that sells electronic gadgets
                            </p>
                            <a target="_blank" href="http://digitalhub.co.zw">View</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/1.png" alt="post thubnail">
                        <div class="post-preview">
                            <h6 class="post-title">Personal Website</h6>
                            <p class="post-intro">
                                <em>Landing Page </em>Design for a landing page for my website
                            </p>
                            <a href="https://rodney.netlify.app/">View</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/richrosehomes.png" alt="post thubnail">
                        <div class="post-preview">
                            <h6 class="post-title">Business Website</h6>
                            <p class="post-intro">
                                <em>Rich Rose Homes, </em>Domestic helper company
                            </p>
                            <a href="https://richrosehomes.co.zw/">View</a>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </section>

    <section class="s2" id="contact">
        <div class="main-container">
            <h3 style="text-align: center;">Get In Touch</h3>

            <form id="contact-form" method="POST" action="index.php">
                <label>Name</label>
                <input type="text" class="input-field" name="name">

                <label>Subject</label>
                <input type="text" class="input-field" name="subject">

                <label>Email</label>
                <input type="email" class="input-field" name="email">

                <label>Phone</label>
                <input type="text" class="input-field" name="phone">

                <label>Message</label>
                <textarea class="input-field" name="message"></textarea>

                <div class="g-recaptcha" data-sitekey="6LfrZCsaAAAAAKkoFxiqP8msstxMkpdVJopj89w4"></div>
                <!-- <span>
                    if(isset($recaptchaErrors[0]))
                    echo $recaptchaErrors[0];
                </span> -->


                <input id="submit-btn" type="submit" name="submit" value="Send">
            </form>

        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>