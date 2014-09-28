<!DOCTYPE html>
<!--The index of my website-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manuela Rios</title>
        <link type = "text/css" rel="stylesheet" href="css/styles.css">
        <!--Font from Google-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <!--JS scripts from SMINT-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/jquery.smint.js" type="text/javascript" ></script>
        <script type="text/javascript">


        $(document).ready( function() {
        	$('.navMenu').smint({ 
        	   'scrollSpeed' : 1000
            });
        });

        </script>
        <!--End of scripts-->
    </head>
    <body>
        <div class = "wrap">
            <!--Very first menu, which includes my picture and short bio-->
            <div class = "section topMenu">
                <div class = "inside">
                    <a href = "https://www.linkedin.com/pub/manuela-rios/58/464/6a" title = "Click for my LinkedIn Profile" target="_blank"> <img class = "circle" src = "images/circlepicburn.png" alt="Click for my LinkedIn Profile"></a>
                    <h1 class = "title">What's up! I'm Manuela.</h1>
                    <h2 class = "subtitle">Aspiring Interaction Designer</h2>
                </div>
            </div>
            <!--End of first menu-->
            <!--Navigation stuff, including an external link for my resume-->
            <!--This navbar is taken care of by SMINT - it sticks it to the top-->
            <div class = "navMenu">
                <div class = "inner">
                    <a href = "#topMenu" class= "navLink">Home</a>
                    <a href = "#back" class= "navLink">Background</a>
                    <a href = "#port" class= "navLink">Portfolio</a>
                    <a href = "#cont" class= "navLink">Contact</a>
                    <a href = "http://tinyurl.com/ManuelaResume" target="_blank"
                        class="navLink extLink end">Resume</a>
                </div>
            </div>
            <!--End of nav stuff-->
            <!--Start of the sections, yay! First background-->
            <div class = "section back">
                <div class = "inner">
                    <h4>I was born in Bogota, Colombia in 1993, and moved to Florida when I was five years old. I am trilingual (speaking Spanish, French, and English) and my hobbies include drumming and programming. I attend Cornell University, majoring in Information Science, and I am the Vice President of Alpha Epsilon Phi. I studied Mobile Software Development in Budapest, Hungary this summer, and so my focus right now is on UX/UI for mobile platforms.</h4>
                </div>
            </div>
            <!--Now portfolio-->
            <div class = "section port">
                <div class = "inner">
                    <h1>Compose - iOS App</h1>
                    <h2>Developed in July 2014</h2>
                    <a href = "https://www.dropbox.com/s/oeii05ehs0jat2w/iCompose.zip?dl=0"> <img id = "compose" src = "images/compose1.png" alt="Compose"></a>
                    <h3>Click any screenshot to download</h3>
                    <div class = "portdes">
                        <h4>Compose is a fast and simple way to save your daily compositions – a modern diary! Attach a photo, a date, a text entry, and soon you can be sharing your entries on social media. To facilitate experience, Compose has a fully-working search and a gorgeous parallax image dashboard.</h4>
                    </div>
                    <a href = "https://www.dropbox.com/s/oeii05ehs0jat2w/iCompose.zip?dl=0"> <img class = "app" src = "images/compose2.png" alt="Compose"></a>
                    <h2>Store and search through your compositions!</h2>
                    <a href = "https://www.dropbox.com/s/oeii05ehs0jat2w/iCompose.zip?dl=0"> <img class = "app" src = "images/compose3.png" alt="Compose"></a>
                    <h2>View your gallery with a beautiful parallax-view dashboard!</h2>
                    <a href = "https://www.dropbox.com/s/oeii05ehs0jat2w/iCompose.zip?dl=0"> <img class = "app" src = "images/compose4.png" alt="Compose"></a> 
                </div>
            </div>
            <!--Contact!-->
            <div class = "section cont">
                <div class = "inner">
                    <h1>Contact Me</h1>
                    <h2>I'd love to hear from you!</h2>
                    <div class = "icon">
                        <a href="http://www.facebook.com/manuelarios9312"> <img src = "images/facebook.png" width="70" height="70" alt="FB"></a>
                        <a href="http://www.twitter.com/yorios9312"> <img src = "images/twitter.png" width="70" height="70" alt="Twitter"></a>
                        <a href="https://plus.google.com/+ManuelaRios93/posts"> <img src = "images/google.png" width="70" height="70" alt="Google"></a>
                    </div>
                    <!-- Actual Contact form -->
                    <div id="contact-form">
                        <form action="#contact-form" method="POST"> 
                            <?php 
                                //Code for the contact form validation
                                //Define variables and set to empty values
                                $name = $email = $comment = "";
                                $nameerror = $emailerror = $commenterror = $successmessage = "";
                                //First data cleaning
                                function test_input($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }
                                if (isset($_REQUEST['submit'])) { 
                                    $name = test_input($_POST["Name"]);
                                    // check if name only contains letters and whitespace
                                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                                        $nameerror = "Only letters and white space allowed for the name"; 
                                    }
                                    $email = test_input($_POST["email"]);
                                    // check if e-mail address syntax is valid
                                    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
                                        $emailerror = "Invalid email format"; 
                                    }
                                    //comment only needs to go through test_input
                                    $comment = test_input($_POST["comment"]);
                                }
                                //success message and automated message to admin/form-filler
                                if (isset($_REQUEST['submit'])) {
                                    if ($nameerror == "" and $emailerror == "") {
                                        $successmessage = "Thank you, your email has been successfully sent".
                                        " and I appreciate you contacting me. ".
                                        "We'll be in touch soon. <br> -- Manuela Rios";
                                        $from = "From: Manuela Rios";
                                        $to = "yorios9312@gmail.com";
                                        //email subject and email message for admin email
                                        $subject = "Admin, you have a comment from ".$name. "";
                                        $message = "Message from ". $name . "\n\nComment: " . $comment;
                                        //email subject and email message for user email
                                        $usersubject = "Manuela Rios has received your information!";
                                        $usermessage = "Thank you, " . $name . ", for your comment!" . "\n". 
                                        "\nManuela is always happy to receive feedback!";
                                        //Mails the comment to the admin
                                        mail($to, $subject, $message, $from);
                                        //Mails an automated email to the customer
                                        mail($email, $usersubject, $usermessage, $from);
                                    }
                                }
                                $array = array($nameerror, $emailerror, $commenterror);
                                    foreach ($array as $error){ 
                                        if ($error != "") { 
                                            echo ("<p><span class='error'>  *".$error."</span></p>");
                                        }
                                    }
                                    if ($successmessage !=""){
                                            print ("<p class='success'><span>".$successmessage."</span></p>");
                                        }
                                    if (($nameerror != "") or ($emailerror != "") or ($commenterror != "")){ 
                                            print ("<p> <span class='error'> Sorry, please submit the form again. </span> </p>");
                                        }
                                    ?> 
                            <label> Name </label> <input type="text" name="Name" placeholder="YOUR NAME" required>      
                            <br>
                            <label> E-mail </label> <input type="email" name="email" placeholder="YOUR EMAIL" required>   
                            <br>    
                            <label> Comment </label> <textarea name="comment" placeholder="ENTER YOUR COMMENTS AND QUESTIONS" required maxlength="800"></textarea>
                            <input id = "submit" type="submit" name="submit" value="Submit"> 
                        </form>
                    </div>
                </div>
            </div>
            <!--End of sections!-->
        </div>
        <!--Code for the footer-->
        <footer>
            &copy; Designed and coded by Manuela Rios using HTML5, CSS3, PHP, and a bit of JQuery and JS as fairy dust - 2014
        </footer>
        <!--End of footer-->
    </body>
</html>