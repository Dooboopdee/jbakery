<?php
if(isset($_POST['submit'])){
    $to = "johntgarrison@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you! " . $name;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Janicke's Bakery</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Hind:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="favicon.ico">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <div class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Janicke's Bakery</a>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="foods.html">Bakery Goods</a></li>
                <li><a href="hours.html">Hours</a></li>
                <li><a href="openyesno.html">Are We Open?</a></li>
                <li class="active"><a href="#">Contact Us!</a></li>
                <!--<a href="tel:12183263073"><img id="phoneIcon" src="img/phone-icon.png"><p id="phoneNum">1 (218) 326-3073</p></a>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container" id="topContainer">
        <div class="row">
          <div class="colum-md-6" id="topRow">
            <h3 class="mainheadline">Contact Us</h3>
            <p>Have a question? Or maybe some feedback or an idea you'd like to tell us? Fire away! We'd love to hear back from you!</p>
            <!-- https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/My_first_HTML_form -->
            <!-- Form for feedback -->
            <form action="" method="post">
              <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name"><br>
              </div>
              <div>
                <label for="mail">Email:</label>
                <input type="text" name="email" id="mail"><br>
              </div>
              <div>
                <label for="msg">Message:</label>
              <textarea name="message" id="msg"></textarea><br>
              </div>
                <input type="submit" name="submit" value="Submit">
              <a href="https://www.google.com/maps/dir/''/janicke+bakery/@47.2342404,-93.5990383,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x52b0900194c8ead1:0x212ee2687f20dc36!2m2!1d-93.530372!2d47.2342609"></a>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container" id="bottomContainer">
        <div class="row">
          <div class="colum-md-6" id="bottomRow">
            <a href="index.html"><p>&copy; 2015 Janicke's Bakery<img id="footerDonuts" src="img/donuts.png" alt=""></p></a>
            <p>&copy; John Garrison - Janicke's Cleaner<br /> and <a href="http://www.github.com/Dooboopdee">Site Creator<img id="footerGithub" src="img/github.png"></a></p>
          </div>
        </div>
      </div>
    </footer>
    <script>
      $(#topContainer).css("height",$(window).height());
    </script>
  </body>
</html>
