<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    

              <!--TAB AREA-->
            <div class="row">
                
                <div class="enquire-form homepage-3 homepage-4">
                    <h2 class="text-capitalize">Enquire Now</h2><br />

                    <form id="digita-contact-form" action="mail_enquiry.php"
                        method="POST">
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
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Contact Number*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Company Name" name="comp_name" placeholder="Your Company Name*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Company Webiste" name="comp_web" placeholder="Your Website Url*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Budget" name="budget" placeholder="Your Budget*" required="required">
                        </div>

                        
                        <div class="form-group">
                            <textarea id="Message" class="form-control" rows="3" name="message" placeholder="Write Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-blue" style="left: 50%;">
                                <img src="assets/img/icons/send-icon.png" alt="place your img">
                            </button>
                        </div>
                        <p class="contact-send-message"></p>
                    </form>
                </div>

            </div>

  </div>

</div>


