<?php include 'includes/header.php'; ?>

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Contact US</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Contact US</li>
            </ul>
        </div>
    </div>
</div>

<!--###################### Contact US Starts Here ############################-->

<div style="margin-top:0px;" class="row no-margin">
    <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">

            <div style="padding:20px" class="col-sm-7">
                <h2>Contact Form</h2> <br>
                <form action="dashboard/database/create_contact.php" method="POST">
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="number" name="contact" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success btn-sm">Send Message</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-sm-5">

                <div style="margin:50px" class="serv">





                    <h2 style="margin-top:10px;">Address</h2>

                    Smart Computers <br>
                    Daman Street<br>
                    K.K District<br>
                    Phone:+91 9159669599<br>
                    Email:info@smart-eye.in<br>
                    Website:www.smart-eye.com<br>







                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>