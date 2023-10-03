<?php include 'include/header.php';?>

<style>
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
<section class="inn-banner">
    <div class="container">
        <div class="inn-cap">
            <h3>Are You Trainer</h3>
        </div>
    </div>
</section>


<!--<form action="https://formsubmit.co/arsalan12mazhar@gmail.com" method="POST">-->
<!--        <input type="hidden" name="_cc" value="">-->
<!--        <input type="hidden" name="_next" value="https://tech20four.com/thank-you.php">-->
<!--        <input type="hidden" name="_captcha" value="false">-->
<!--        <input type="hidden" name="_template" value="table"> -->
<!--        <input type="text" name="Name" required="">-->
<!--        <input type="text" name="email" required="">-->
<!--        <button type="submit">Submit</button>-->
<!--        </form>-->


<section class="query-form-sec">
    <div class="container">
        <div class="modal-blk">
            <form action="https://formsubmit.co/arsalan12mazhar@gmail.com" method="POST">
                <input type="hidden" name="_cc" value="info@tech20four.com">
                <input type="hidden" name="_next" value="https://tech20four.com/thank-you.php">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_captcha" value="false">

                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="Name" required="">
                    </div>
                    <div class="col-md-6">
                        <label>Area of Experties</label>
                        <input type="text" name="Area of Experties" required="">
                    </div>
                    <div class="col-md-6">
                        <label>Phone</label>
                        <input type="number" name="Phone" required="">
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" name="Email" required="">
                    </div>
                    <div class="col-md-12">
                        <label>Experiences In Years</label>
                        <input type="number" name="Experiences In Years" required="">
                    </div>
                    <div class="col-md-6">
                        <label>City</label>
                        <input type="text" name="City" required="">
                    </div>
                    <div class="col-md-6">
                        <label>Country</label>
                        <input type="text" name="Country" required="">
                    </div>
                    <div class="col-md-6">
                        <label>Origination (Optional)</label>
                        <input type="text" name="Origination">
                    </div>
                    <div class="col-md-6">
                        <label>Are You Certified as a trainer?</label>
                        <input type="text" name="Are You Certified as a trainer?" required="">
                    </div>
                    <div class="col-md-12">
                        <label>Training experience do you have in a corporate setting?</label>
                        <input type="text" name="Training experience do you have in a corporate setting?" required="">
                    </div>
                    <div class="col-md-6">
                        <label>Favorite subject to teach?</label>
                        <input type="text" name="Favorite subject to teach?" required="">
                    </div>
                    <div class="col-md-6">
                        <label>Training Fees</label>
                        <input type="number" name="Training Fees" required="">
                    </div>
                    <div class="col-md-12">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<?php include 'include/contact-footer.php';?>




<?php include 'include/footer.php';?>