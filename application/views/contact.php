<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
   <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section id="contact" class="contact_demo pt-5 pb-5">
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_info">
                        <h3 class="heading_1 fs-4">Our Call Center Support</h3>
                        <p>For any assistance call us on 8880 140 140 from 9:00 AM TO 7:PM</p>
                        <h3 class="heading_1 fs-4">Email Support</h3>
                        <p>Send us an email at <a href="mailto:akshayagoldcompany916@gmail.com" style="text-decoration:none;">akshayagoldcompany916@gmail.com</a></p>
                        <h3 class="heading_1 fs-4">Address</h3>
                        <p><span class="heading_1 fs-4">Akshaya Gold Company</span><br/>
                        # 17, 524 First floor Maruthi plaza ,
                        2nd main road, above ICICI bank Vyalikaval,
                        Bengaluru, Karnataka 560003</p>
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                    <div class="form-container">
                        <div class="form-icon">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <form class="form-horizontal" method="post" id="formData">
                            <h3 class="title">Contact Us</h3>
                            <div class="form-group">
                                <span class="input-icon"><i class="fas fa-user"></i></span>
                                <input class="form-control" type="text" placeholder="Name" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fas fa-envelope"></i></span>
                                <input class="form-control" type="email" placeholder="Email Address" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fas fa-mobile-alt"></i></span>
                                <input class="form-control" type="number" placeholder="Mobile number" name="mobile" id="mobile">
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fas fa-pencil-alt"></i></span>
                                <textarea class="form-control" rows="4" cols="120" placeholder="Message" name="message" id="message"></textarea>
                            </div>
                            <button class="btn contact_">Send Message <i class="fa fa-long-arrow-alt-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var notyf = new Notyf();
    $('.contact_').click(function(e){
        e.preventDefault();
       var url = "<?php echo base_url().'welcome/sendMail';?>";
       var fdata = new FormData($("#formData")[0]);
       $.ajax({    
            type: 'POST',
            url: url,
            data:fdata,
            contentType: false,
            processData: false,
            success: function(response)
            {
               if(response.status==true){
                notyf.success({
                    message: response.message,
                    duration: 9000,
                      position: {
                        x: 'right',
                        y: 'top',
                      }
                  });
                $("#formData")[0].reset();
                loadSliderSetting();
               }else{
                notyf.error({
                    message: response.message,
                    duration: 9000,
                      position: {
                        x: 'right',
                        y: 'top',
                      }
                  });
               }
               //alert(response);
                
               
            }
        });
        
    });
</script>
