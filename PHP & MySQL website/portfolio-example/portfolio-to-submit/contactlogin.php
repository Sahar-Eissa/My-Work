

<section class="contact-area"  id="contact">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 text-center">
                     <h2>Admin Log in</h2>
                    <div class="sub-heading">
                        <p>
This is a demonestartion for the backend provided on the Teachers' website. Please register using the form below.
                        </p>
                        <p>
* indicates a required field                        </p>
                    </div>
                 </div>
             </div>
             <div class="row">


               <form  action="contactloginS.php"  method="POST" name="subject">
                Account Username *:  <input type="text"  class="form-control" name="auser"  value="<?php echo $auser; ?>"> <br>
            Account Password *: <input type="text" class="form-control"  name="apass"  value="<?php echo $apass; ?>"><br>
            First Name *:  <input type="text" class="form-control"  name="first"  value="<?php echo $first; ?>"><br>
            Last Name *:     <input type="text" class="form-control"  name="last"  value="<?php echo $last; ?>"><br>
            Email *:  <input type="text" class="form-control" name="email"   value="<?php echo $email; ?>"><br>
                                <input type="submit" class="submit-button" name="submit" value="sign up">

                 </form>

                     </div>
                 </div>
             </section>
