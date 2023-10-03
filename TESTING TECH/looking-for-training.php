
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
        <h3>looking for Training</h3>
      </div>
    </div>
  </section>


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
              <label>Email</label>
              <input type="email" name="Email" required="">
            </div> 
            <div class="col-md-6">
              <label>Phone</label>
              <input type="number" name="Phone" required="">
            </div>
            <div class="col-md-6">
              <label>Company Name</label>
              <input type="text" name="Company" required="">
            </div> 
            <div class="col-md-12">
              <label>Training Need</label>
              <select name="Training Need">
                <option>Select an Option</option>
                <option value="Advance Excel">Advance Excel</option>
                <option value="Power Bi Financial Dashboard">Power Bi Financial Dashboard </option>
                <option value="DevOps DevSecOps">DevOps DevSecOps</option>
                <option value="Career Planning &amp; Counseling">Career Planning &amp; Counseling</option>
                <option value="Legal Risk Management">Legal Risk Management</option>
                <option value="ACAMS Perp Courses">ACAMS Perp Courses</option>
                <option value="AML/CFT Compliance">AML/CFT Compliance</option>
                <option value="Cyber Security &amp; Information Security">Cyber Security &amp; Information Security</option>
              </select>
            </div>   
            <div class="col-md-12">
              <label>Query</label>
              <textarea name="Query" placeholder="Enter Your Query"></textarea>
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