<?php
// include'config.php';

// if(isset($_POST['submit']))
//         {

//         $service = $_POST['service'];
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $contact = $_POST['contact'];
//         $company = $_POST['company'];
//         $website = $_POST['website'];
//         $budget = $_POST['budget'];
//         $msg = $_POST['msg'];
        
         
//         $query = "INSERT INTO `enquiry`('service',`name`, `email`, `contact`, `company`, `website`, `budget`, `msg`) 
//         VALUES ('$service','$name','$email',$contact,'$company','$website','$budget','$msg')";
       

//         $run=mysqli_query($con,$query);
//         // mysqli_select_db($con,'nlpadmin');
//         // $con->close();
//         if ($run === TRUE) {
//             echo "New record is inserted successfully";
//         } 
//         else{
//             echo"Please insert the data";
//          }
//         }



?>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    

              <!--TAB AREA-->
            <div class="row">
                
                <div class="enquire-form homepage-3 homepage-4">
                    <h2 class="text-capitalize">Enquire Now</h2><br />

                    <form method="POST">
                        <div class="form-group">
                            Select Service:
                            <select id="service" name="service" >
                                <option value="Services">Services</option>
                                <option value="Website Developement">Website Developement</option>
                                <option value="Application Development">Application Development</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Search Engine Optimization">Search Engine Optimization</option>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="Name" name="name" placeholder="Your Name*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="Email" name="email" placeholder="Email Address*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" name="contact" placeholder="Your Contact Number*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Company Name" name="company" placeholder="Your Company Name*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Company Webiste" name="website" placeholder="Your Website Url*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Budget" name="budget" placeholder="Your Budget*" required="required">
                        </div>

                        
                        <div class="form-group">
                            <textarea id="Message" class="form-control" rows="3" name="msg" placeholder="Write Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" formaction="mail_enquiry.php" class="btn btn-blue" style="left: 50%;">
                                <img src="assets/img/icons/send-icon.png" alt="place your img">
                            </button>
                        </div>
                        <!-- <p class="contact-send-message"></p> -->
                    </form>
                </div>

            </div>

  </div>

</div>


