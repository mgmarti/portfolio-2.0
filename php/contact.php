<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Mehul Prajapati">
  <!--
    ========================================================================
     EXCLUSIVE ON themeforest.net
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
     Template Name   : Benzene - Personal Portfolio Template
     Version         : 1.1
     Author          : bootWeb
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
     Copyright (c) 2017 - bootWeb - https://themeforest.net/user/bootweb

    ========================================================================
  -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <!-- Theme CSS -->
  <link id="pagestyle" rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/responsive.css">
  
</head>

<body>
  <!-- ========== NavBar ========== -->
  <nav id="nav" class="navbar custom-navbar navbar-fixed-top scroll">
    <div class="container">
     <!-- NAVBAR HEADER -->
     <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
       <span class="icon icon-bar"></span>
       <span class="icon icon-bar"></span>
       <span class="icon icon-bar"></span>
     </button>
     <!-- lOGO TEXT HERE -->
     <a href="../index.html" class="navbar-brand"><img src="../images/logo.png" class="img-responsive" alt="image"><p><span class="contrast">Benz</span>ene</p></a>
   </div>
   <!-- NAVIGATION LINKS -->
   <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="../index.html#home">Home</a></li>
     <li><a href="../index.html#about">About</a></li>
     <li><a href="../index.html#service">Service</a></li>
     <li><a href="../index.html#portfolio">Portfolio</a></li>
     <li><a href="../index.html#blog">Blog</a></li>
     <li><a href="../index.html#contact" class="active">Contact</a></li>
   </ul>
 </div>
</div>
</nav>
<!-- ========== End Of NavBar ========== -->

<div class="container">
  <div class="contact-content">

  <?php
//configure
  $from = $_POST["name"];
  $entered_email = $_POST["email"];
  $entered_subject = $_POST["subject"];
  $entered_message = $_POST["message"];
$sendTo = '<personal@website.com>';  //put your email address here
$subject = 'New message from contact form';
$fields = array('name' => 'Name', 'email' => 'Email', 'subject' => 'Subject', 'message' => 'Message');
$okMessage = 'I got your message, thanks for contacting. Will get back soon.';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending
try
{
  $emailText = "";

  foreach ($_POST as $key => $value) {

    if (isset($fields[$key])) {
      $emailText .= "$fields[$key]: $value\n";
    }
  }

  mail($sendTo, $subject, $emailText, "From: " . $from);

  echo "Hi, <strong>$from!</strong> $okMessage <br>";
  ?>
  <br><p class="contact-content-p">Entered information: <br></p>
  <?php
  echo "<strong>Name</strong>: $from <br>
        <strong>Email</strong>: $entered_email <br>
        <strong>Subject</strong>: $entered_subject <br>
        <strong>Message</strong>: $entered_message <br>";
}
catch (\Exception $e)
{
  echo "$errorMessage";
}
?>
</div>
</div>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>