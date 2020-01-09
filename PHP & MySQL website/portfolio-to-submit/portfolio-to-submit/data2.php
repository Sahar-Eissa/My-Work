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
<?php
$username = "sa418774";
$password = "pFY45nw9wXEKcH6j";
$dbname = "sa418774";

$connection = mysqli_connect("pax.cah.ucf.edu","$username","$password","$dbname") or die(mysqli_error());


  $user = $_POST['auser'];
  $pass = $_POST['apass'];
  $first = $_POST['first'];
  $last = $_POST['Last'];
  $email = $_POST['email'];
  $sql ="INSERT INTO admins (Username, password,fn,last,email) VALUES ('$user','$pass','$first','$last','$email')";
mysqli_query($connection,$sql);
mysqli_close($connection);

 ?>

             <section class="contact-area"  id="contact">
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-12 text-center">
                                  <h2>Welcome!</h2>
                                 <div class="sub-heading">
                                     <p>
             Thank you for registering with us. your data is now saved in our database. select what do you want to see from our portfolio.
                                     </p>

                                 </div>
                              </div>
                          </div>

<?php include 'mastry.php';?>
                              </div>
                          </section>


<?php include 'footer.php';?>
<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
  <script src="js/main.js" type="text/javascript"></script>
  <script src="js/smoothscroll.js" type="text/javascript"></script>
  <script src="js/jquery.slicknav.min.js" type="text/javascript"></script>
</body>
</html>
