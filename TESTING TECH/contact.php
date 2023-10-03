<?php include 'include/header.php';?>
<style>
.con-form {
    background: #000000;
    margin: -5px 0 0px;
    padding: 60px 0 40px;
}

.float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 20px;
    right: 30px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 40px;
    box-shadow: 2px 2px 3px #999;
    z-index: 1000;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/qr/ZLAZRQ2BXAMSE1" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i> </a>

<section class="con-form">
    <div class="container">
        <div class="sec-heading">
            <span>Contact</span>
            <h3>Let's connect<br>We'd love to help you</h3>

        </div>
        <form action="https://formsubmit.co/arsalan12mazhar@gmail.com" method="POST">
            <input type="hidden" name="_cc" value="info@tech20four.com">
            <input type="hidden" name="_next" value="https://tech20four.com/thank-you.php">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_captcha" value="false">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-control">
                        <!--<select name="project-type" placeholder="Project Type">-->
                        <!--  <option value="Project Type">Project Type</option>-->
                        <!--  <option value="Mobile Apps Development">Mobile Apps Development</option>-->
                        <!--  <option value="Microservices">Microservices</option>-->
                        <!--  <option value="Product Development">Product Development</option>-->
                        <!--  <option value="eCommerce Development">eCommerce Development</option>-->
                        <!--  <option value="Monitoring & Maintenance">Monitoring & Maintenance</option>-->
                        <!--</select>-->

                        <select name="Training Need">
                            <option>Select an Option</option>
                            <option value="Advance Excel">Advance Excel</option>
                            <option value="Power Bi Financial Dashboard">Power Bi Financial Dashboard </option>
                            <option value="DevOps DevSecOps">DevOps DevSecOps</option>
                            <option value="Career Planning &amp; Counseling">Career Planning &amp; Counseling</option>
                            <option value="Legal Risk Management">Legal Risk Management</option>
                            <option value="ACAMS Perp Courses">ACAMS Perp Courses</option>
                            <option value="AML/CFT Compliance">AML/CFT Compliance</option>
                            <option value="Cyber Security &amp; Information Security">Cyber Security &amp; Information
                                Security</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control">
                        <input type="text" placeholder="Full Name" name="Name" required="">
                        <!-- <input type="text" placeholder="Your phone no" name=""> -->

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-control">
                        <input type="text" placeholder="Your email" name="Email" required="">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-control">
                        <input type="tel" placeholder="Your phone no" name="phone" required="">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-control">
                        <textarea placeholder="How can we help?" name="message" required=""></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="case-stud-btn">
                        <input type="submit" name="" value="Send">
                        <!-- <a href="">Explore More</a> -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



<?php include 'include/contact-footer.php';?>




<?php include 'include/footer.php';?>