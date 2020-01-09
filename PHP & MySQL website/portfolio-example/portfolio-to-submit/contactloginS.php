<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sahar Eissa</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/slicknav.min.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="js/caroufredsel.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/gallery.js" type="text/javascript"></script>
</head>
<body>
  <header>
       <div class="container ">
           <div class="row center">
               <a href="https://tandtprojects.cah.ucf.edu/~sa418774/portf/index.php" class="logo animated bounceInLeft"><img src="image/logo.png"></a>
               <nav class="animation" data-animation="bounceInRight">
                   <ul class="menu" id="menu">


                                            <li><a href="https://tandtprojects.cah.ucf.edu/~sa418774/portf/index.php#Academia">Academia</a></li>
                                            <li><a href="https://tandtprojects.cah.ucf.edu/~sa418774/portf/index.php#Portfolio">Potfolio</a></li>
                     <li><a href="https://tandtprojects.cah.ucf.edu/~sa418774/portf/admin.php">Admin login</a></li>
                                            <li><a href="https://tandtprojects.cah.ucf.edu/~sa418774/portf/index.php#contact">Contact</a></li>

                   </ul>

               </nav>
           </div>
       </div>
   </header>
<?php include 'Slider.php';?>
<section class="contact-area"  id="contact">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 text-center">
                     <h2>Sorry!</h2>
                    <div class="sub-heading">
                        <p>
There is a problem with your registeration form, please check the errors below                   </div>
                 </div>
             </div>
             <div class="row">


               <?php
$error_message="";
$auser = "";
$apass = "";
$first = "";
$last= "";
$email = "";


               if(isset($_POST['submit'])){

               $auser = $_POST['auser'];
               $apass = $_POST['apass'];
               $first = $_POST['first'];
               $last= $_POST['last'];
               $email = $_POST['email'];



if(empty($auser) or empty($apass) or empty($last) or empty($first) or empty($email)){
  include "form.php";
    $error_message = "*One field or more is blank";
    echo $error_message;
}

else{
    header('Location: https://tandtprojects.cah.ucf.edu/~sa418774/portf/data2.php');


               }
}

               ?>

                     </div>
                 </div>
             </section>
             <?php include 'footer.php';?>
             <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
               <script src="js/main.js" type="text/javascript"></script>
               <script src="js/smoothscroll.js" type="text/javascript"></script>
               <script src="js/jquery.slicknav.min.js" type="text/javascript"></script>
             </body>
             </html>
