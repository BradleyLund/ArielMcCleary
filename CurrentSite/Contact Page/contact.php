<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "business@arielmccleary.com";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167901006-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167901006-1');
</script>

        <title>Ariel McCleary Contact Form</title>
        <link rel="icon" href="favicon.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="ukulele, Ariel,McCleary,Musician, Singer">
        <meta name="description" content="Ariel McCleary is from Akron, Ohio. She is a solo singer-songwriter who started as a YouTuber and now has over 280,000 subscribers. Contact her here!">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/7e4cf377d7.js" crossorigin="anonymous"></script>         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Special Elite' rel='stylesheet'>
        <link rel="stylesheet" href="styles.css">
        
        
    </head>
    <body>
              <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NWW4KHL"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
        <nav class="navbar navbar navbar-static-top ">
            <div class="container-fluid">
              <div class="navbar-header">
                <p class="top-social">
                    <a class="socials" href="https://www.facebook.com/arielmcclearyofficial/" target="_blank" ><i class="fa fa-facebook-square"></i></a>
                    <a class="socials" href="https://www.instagram.com/arielmcclearyofficial/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a class="socials" href="https://twitter.com/McSquariel?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a class="socials" href="https://www.youtube.com/channel/UCsY1BLbqYnHeDPjiA8uHxYw" target="_blank"><i class="fa fa-youtube"></i></a>
                    <a class="socials" href="https://music.apple.com/us/artist/ariel-mccleary/1490681627" target="_blank"><i class="fa fa-apple"></i></a>
                    <a class="socials" href="https://open.spotify.com/artist/5incGzrobL1vUeuaZR7hLu" target="_blank"><i class="fa fa-spotify"></i></a>
                    <a class="socials" href="https://www.patreon.com/arielmccleary" target="_blank"><i class="fab fa-patreon"></i></a>
                </p>  


                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"><i id="damburger" class="fa fa-bars"></i></span>
                  
                </button>
                
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                
                  <ul class="nav navbar-nav navbar-left ">
                    <li><a href="http://www.arielmccleary.com/index.html">Home</a></li>
                    <li><a href="http://www.arielmccleary.com/Concerts/concerts.html">Concerts</a></li>
                    <li><a href="http://www.arielmccleary.com/Merch/merch.html">Merch</a></li>
                    <li><a href="http://www.arielmccleary.com/About/about.html">About</a></li>
                    <li><a href="http://www.arielmccleary.com/Press/press.html">Press</a></li>
                    <li><a href="http://www.arielmccleary.com/Contact/contact.php">Contact</a></li>
                    
                    
                  </ul>
             
                  <ul class="nav navbar-nav navbar-right hidden-xs">
                      <li><a class="socials" href="https://www.facebook.com/arielmcclearyofficial/" target="_blank" ><i class="fa fa-facebook-square"></i></a></li>
                      <li><a class="socials" href="https://www.instagram.com/arielmcclearyofficial/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                      <li><a class="socials" href="https://twitter.com/McSquariel?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa fa-twitter"></i></a></li>
                      <li><a class="socials" href="https://www.youtube.com/channel/UCsY1BLbqYnHeDPjiA8uHxYw" target="_blank"><i class="fa fa-youtube"></i></a></li>
                      <li><a class="socials" href="https://music.apple.com/us/artist/ariel-mccleary/1490681627" target="_blank"><i class="fa fa-apple"></i></a></li>
                      <li><a class="socials" href="https://open.spotify.com/artist/5incGzrobL1vUeuaZR7hLu" target="_blank"><i class="fa fa-spotify"></i></a></li>
                      <li><a class="socials" href="https://www.patreon.com/arielmccleary" target="_blank"><i class="fab fa-patreon"></i></a></li>
                     
                  
                  </ul>
              </div>
              
            </div>
          </nav>

          <div class="text-center" id="error"><? echo $error.$successMessage; ?></div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 m-auto">
                    <div class="contact-form">
                        <h1>Get in Touch</h1>
                        <form method="post">
                            <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                            </div>            
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Message</label>
                                <textarea class="form-control" id="content" rows="5" name="content" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                            </div>            
                        </form>
                    </div>
                </div>
            </div>
        </div>

         <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
          
            $("form").submit(function(e) {
                
                var error = "";
                
                if ($("#email").val() == "") {
                    
                    error += "The email field is required.<br>"
                    
                }
                
                if ($("#subject").val() == "") {
                    
                    error += "The subject field is required.<br>"
                    
                }
                
                if ($("#content").val() == "") {
                    
                    error += "The content field is required.<br>"
                    
                }
                
                if (error != "") {
                    
                   $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                    
                    return false;
                    
                } else {
                    
                    return true;
                    
                }
            })
            
      </script>

    </body>
</html>