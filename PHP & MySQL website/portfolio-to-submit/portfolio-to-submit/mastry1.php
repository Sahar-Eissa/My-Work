

<?php
$username = "sa418774";
$password = "pFY45nw9wXEKcH6j";
$dbname = "sa418774";
$user = $_POST['auser'];
$connection = mysqli_connect("pax.cah.ucf.edu","$username","$password","$dbname") or die(mysqli_error());
mysql_select_db("sa418774");
$result = mysqli_query("SELECT * FROM admins");
while($row= mysql_fetch_array($result)){
	echo $row['Username']."".$row['password']."". $row['email'];
	echo "<br/>"
}
mysqli_query($connection,$sql);
mysqli_close($connection);

 ?>
