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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">
    <link href='https://fonts.googleapis.com/css?family=Hind:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <meta charset="utf-8">
    <header>
      <div class="topnavbar">
        <a href="index.html">
          <h1 id="logo">Janicke's Bakery</h1>
          <h2 id="logogr">Grand Rapids Minnesota</h2>
        </a>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="foods.html">Bakery Goods</a></li>
            <li><a href="hours.html">Hours</a></li>
            <li><a href="openyesno.html">Are We Open Now?</a></li>
            <li><a href="contact.php" class="selected">Contact Us</a></li>
          </ul>
        </nav>
        <a href="tel:12183263073"><img id="phoneIcon" src="img/phone-icon.png"><p id="phoneNum">1 (218) 326-3073</p></a>
      </div>
    </header>
    <div class="center">
      <section>
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
      </form>
    </div>
    <div id="miscInfo">
      <a href="https://www.google.com/maps/dir/''/janicke+bakery/@47.2342404,-93.5990383,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x52b0900194c8ead1:0x212ee2687f20dc36!2m2!1d-93.530372!2d47.2342609">
    </div>
      </section>
      <footer>
        <a href="index.html"><p id="jbakery">&copy; 2015 Janicke's Bakery<img id="footerDonuts" src="img/donuts.png" alt=""></p></a>
        <p id="myname">&copy; John Garrison - Janicke's Cleaner<br /> and Site Creator<img id="footerGithub" src="img/github.png"></p>
      </footer>
  </body>
</html>
