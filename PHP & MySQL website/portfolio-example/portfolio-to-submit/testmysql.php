<?php
$username = "sa418774";
$password = "pFY45nw9wXEKcH6j";
$dbname = "sa418774";

$connection = mysqli_connect("pax.cah.ucf.edu","$username","$password","$dbname");

if(!$connection){
  print "<br/> could not connect, I'm sorry, try again!.<br/>";
  die(mysqli_error());
  }
  else{
    print 'Happily connected';
    mysqli_close($connection);
  }
 ?>
