

<?php include 'thankyou.php';?>


<section class="contact-area"  id="contact">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 text-center">
                     <h2>CONTACT ME</h2>
                    <div class="sub-heading">
                        <p>
                           We communicate in an industry built on trust. This can only be achieved through communication. If you have any questions or interested to learn more about my projects, take the time to discuss what you want to know and I will get back to you as soon as possible.

                        </p>
                    </div>
                 </div>
             </div>
             <div class="row">

                 <div class="col-sm-3 divider">
                     <h3>contact</h3>
                     <div class="contact-address">
                         <ul>
                             <li>
                                 <i class="fa fa-home"></i>
                                 <div class="address-phone">
                                     <h4>address</h4>
                                     <span>University of central Florida</span>
                                     <span> 4000 Central Florida Blvd, Orlando, FL 32816</span>
                                 </div>
                             </li>
                                <li>
                                 <i class="fa fa-phone"></i>
                                 <div class="address-phone">
                                     <h4>phone</h4>
                                     <span>407 000 0000</span>
                                     <span>407 000 0000</span>

                                 </div>
                             </li>
                                <li>
                                 <i class="fa fa-paper-plane"></i>
                                 <div class="address-phone">
                                     <h4>email</h4>
                                     <span>sahar.eissa@ucf.edu</span>

                                 </div>
                             </li>
                         </ul>

                     </div>
                 </div>
                 <div class="col-sm-9">
                     <div class="contact-block">
                         <h3>Thank You Joey</h3>


                                                  <?php $name = $_POST['name'];
                         $email = $_POST['email'];
                         $phone = $_POST['phone'];
                         $message = $_POST['message'];
                         $formcontent="From: $name \n Message: $message";
                         $recipient = "joseph.fanfarelli@ucf.edu";
                         $subject = "Sahar's contact Form PHP is Working! YAY!";
                         $mailheader = "From: $email \r\n";
                         mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
                         print  "You have revieved an email form this form!";
                         ?>


                     </div>
                 </div>
             </div>
         </div>

     </section>
<?php include 'footer.php';?>
