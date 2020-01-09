

<?php
if($_POST) {
		if(isset($_POST['work'])) {
			if($_POST['work'] == 'Web') {
				echo '<p>Here is our gallery for website design, sorry it is only an image!</p>';
          echo ' <img src="image/gallery.jpg" /> ';
			}
			elseif($_POST['work'] == 'Video') {
				echo '<p>Here is our gallery for  <strong>', $_POST['work'], '</strong>, sorry it is only an image!.</p>';
  echo ' <img src="image/video.jpg" /> ';
			}
      else{
      echo  'Mobile APPS, sorry it is only an image!';
  echo ' <img src="image/Mobile-Apps.jpg" /> ';
      }
		}
	}
?>





<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <select name="work" class="form-control">
      <?php

          $projects = array("Web","Video","Mobils Apps");

          for ($x=0; $x < 3; $x++){
              echo("<option value=" . $projects[$x] . ">" . $projects[$x] . "</option>");
          }
      ?>
  </select>
  <input type="submit" class="submit-button" name="submit" value="submit">
</form>
