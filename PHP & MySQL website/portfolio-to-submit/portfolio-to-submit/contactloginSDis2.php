



<section class="contact-area"  id="contact">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 text-center">
                     <h2>Here is your information</h2>
                    <div class="sub-heading">
                        <p>
This is all your saved information                   </div>
                 </div>
             </div>
             <div class="row">


               <?php
               $username = "sa418774";
               $password = "pFY45nw9wXEKcH6j";
               $dbname = "sa418774";
 $user = $_POST['auser'];
               $connection = mysqli_connect("pax.cah.ucf.edu","$username","$password","$dbname") or die(mysqli_error());
                   $sql ="SELECT * FROM admins  WHERE Username ='".$user."' LIMIT 1";
                   $result = mysqli_query($connection, $sql);
                   if(mysqli_num_rows($result) == 1){
                     $row = mysqli_fetch_row($result);
                    print "Username: " . $row[1]. "<br>";
                     print "Password: " . $row[2]. "<br>";
                        print "Email: " . $row[5]. "<br>";
                         exit();
                   }else{
                     print "Account Does Not Exist";
                     exit();
                   }
               mysqli_query($connection,$sql);
               mysqli_close($connection);

                ?>

                     </div>
                 </div>
             </section>
            
