<?php
$slider = $this->db->get('slider')->result_array();
?>

<style>
    .navbar-brand {
    
    margin-left: 4rem;}
</style>
<section id="desktop_slider">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">


 
  <!-- Indicators/dots -->
  <!-- <div class="carousel-indicators">
      <?php $i=0; foreach($slider as $key=>$value){ ?>
      
      <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $i;?>" class="<?php if($i==0){echo "active";} ?>"></button>
          
     <?php $i++; } ?>
    
    
  </div> -->
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    
     <?php $i=0; foreach($slider as $key=>$value){ ?>
      
       <div class="carousel-item <?php if($i==0){echo "active";} ?>">
          <img src="<?php echo base_url()."uploads/admin/slider/".$value['slider'];?>" alt="" class="d-block" style="width: 100% !important; height: auto !important;" width="300px" height="300px">
        </div>
          
     <?php $i++; } ?>
    
    
   
  </div>
  

</div>

</section>

<section id="mobile_slider">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">


 
  <!-- Indicators/dots 
  <div class="carousel-indicators">
      <?php $i=0; foreach($slider as $key=>$value){ ?>
      
      <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $i;?>" class="<?php if($i==0){echo "active";} ?>"></button>
          
     <?php $i++; } ?>
    
    
  </div>-->
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    
     <?php $i=0; foreach($slider as $key=>$value){ ?>
      
       <div class="carousel-item <?php if($i==0){echo "active";} ?>">
          <img src="<?php echo base_url()."uploads/admin/slider/".$value['mobile_slider'];?>" alt="" class="d-block" style="width: 100% !important; height: auto !important;" width="300px" height="300px">
        </div>
          
     <?php $i++; } ?>
    
    
   
  </div>
  

</div>

</section>
<!--
  <section class="about" style="padding-left: 10px;
    padding-right: 10px;">
    <div class="container" style="background-image: url('assets/images/img1.webp');">
      <div class="why_akshay_gold p-5" style="margin-top: -15px;">
          <h1 class="text-center">Why Akshaya Gold</h1>
          <span class="heading_border"></span>
            <!--<div class="text-center">-->
            <!--  <img src="assets/images/strip_line.png"  alt="...">  -->
            <!--</div>-- >
            <div>
          <p class="fs-4"><b>
         Akshaya gold company is considered to be the best professional Gold Buyers in Bangalore | Chennai. We are present all-over Karnataka and Tamilnadu for providing the best services for your gold. We provide business services for all locations, you can sell gold for cash which is near to your place.</b></p>
        </div>
      </div>
    </div>
  </section>
 -->
<?php //include 'service.php'; ?>
<!--       Services Start -->


<section>
    <div class="container">
        <div class="col-lg-12 pt-3">
                <h1 class="text-center">SERVICES</h1>
                <div class="text-center">
                <img src="assets/images/2a.webp" class="mx-auto" alt="..." width="210" height="20">  
              </div>
            </div>
    </div>
    </div>
</section>
    
<section class="pt-2 pb-5 service__" style="background-image:url('<?php echo base_url();?>assets/images/Dot.webp'); background-size: cover; ">
    
    <div class="container pt-3 pb-5">
        <div class="row">
            
            <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="serviceWrapper">
                        <div class="w3_quarter_content">
                            <div class="icon__">
                                <img src="<?php echo base_url();?>assets/images/sell_gold.webp" width="50px">
                            </div>
                           
                           <p class="heading_1 txt_clr fs-4 pt-5">Spot Cash For Your Jewellery</p>
                           <p>Akshaya gold is always considered the best for paying highest cash for gold, compared to other gold buyers. </p>
                           <p><a href="#" class="services_read_more">Read more</a></p>
                        </div> 
                    </div>
                    
                </div>
            
            
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="serviceWrapper">
                        <div class="w3_quarter_content">
                            <div class="icon__">
                                <img src="<?php echo base_url();?>assets/images/sell_old_gold.webp" width="50px">
                           </div>
                           
                           <p class="heading_1 txt_clr fs-4 pt-5">We Buy Gold</p>
                           <p class="description">We offer quick and easy process to sell your gold and we buy all type of gold bars, jewellery, scrap gold. </p>
                           <p><a href="#" class="services_read_more">Read more</a></p>
                        </div> 
                    </div>
                    
                </div>
            
            
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="serviceWrapper">
                        <div class="w3_quarter_content">
                            <div class="icon__">
                           <img src="<?php echo base_url();?>assets/images/pledge_gold.webp" width="50px" >
                           </div>
                           
                           <p class="heading_1 txt_clr fs-4 pt-5">We Release Your Pledge Gold</p>
                           <p class="description">We release your gold form all banks, gold loan company, Pawn brokers instantly pay you the difference amount. </p>
                           <p><a href="#" class="services_read_more">Read more</a></p>
                        </div> 
                    </div>
                    
                </div>
            
            
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="serviceWrapper">
                        <div class="w3_quarter_content">
                            <div class="icon__">
                           <img src="<?php echo base_url();?>assets/images/diamond.webp" width="50px">
                           </div>
                           
                           <p class="heading_1 txt_clr fs-4 pt-5">We Buy Your Diamond</p>
                           <p class="description">We buy Diamond from customer for market value and promise to provide the right amount for your Diamond. </p>
                           <p><a href="#" class="services_read_more">Read more</a></p>
                        </div> 
                    </div>
                    
                </div>

        </div>
    </div>
</section>

<!-- Services end-->

<section class="about_us" style="background-image:url('assets/images/about_background.webp'); background-size: cover; ">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-7 col-sm-6">
          <div class="text-center mt-3">
            <h2 style="color:#ffff66;">About Us</h2>
            
            <span class="heading_border yellow"></span>
          </div>

          <p class="text-white fs-5" style="font-size: 1.2rem !important; line-height: 1.4;" >Transparency and Honesty are the main pillars that we always stand upon. We as the Best Gold Company in Bangalore| Chennai, buy all kinds of Gold related products. Considered as the best Gold buyers, we provide an accurate valuation for your gold and check purity right in front of you. Our gold company also buys used and unused ornaments, and provide you with instant cash for gold. We have an excellent support team for our customers who will give top-notch service to our customer base over the period of time we have backed happy customers with our quality and transparent service.</p>
        </div>
        <div class="col-lg-6 col-md-5 col-sm-6">
          <div class="mob_m">
            <img src="assets/images/img2.webp" style="width: 100% !important; height: auto !important;" width="300px" height="300px">
          </div>
          
        </div>

      </div>
      
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-3 mb-3">
          <h1 class="p-0 m-0" style="color: #530101;">Our Customer</h1>
          <span class="heading_border"></span>
        </div>
      </div>
    </div>
  </section>
<style>
    .counter h3 {
    font-size: calc(1.3rem + .6vw);
    font-weight: 500;
    }
</style>
  <section class="pt-2 pb-2 " style="background-image:url('assets/images/our_customer_background.webp');
  background-size: cover;
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-position: center center;
    ">
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <div class="counter-icon"><i class="fas fa-building"></i></div>
                    <span class="counter-value" data-max="2"></span>
                    <h3>STATES</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <div class="counter-icon"><i class="fas fa-city"></i></div>
                    <span class="counter-value" data-max="20"></span>
                    <h3>CITIES</h3>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <div class="counter-icon"><i class="fas fa-boxes"></i></div>
                    <span class="counter-value" data-max="40"></span>
                    <h3>BRANCHES</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <div class="counter-icon"><i class="fas fa-users"></i></div>
                    <span class="counter-value" data-max="20894"></span>
                    <h3>HAPPY CUSTOMERS</h3>
                </div>
            </div>
        </div>
    </div>
  </section>
    <section class="pt-5 pb-5 service__" style="background-image:url('assets/images/dot_background.webp'); background-size: cover; ">
      <div class="container">
        <div class="col-lg-12">
          <h1 class="text-center" style="color: #530101;">Sell Your Gold In 3 Easy Step</h1>
          <span class="heading_border"></span>
        </div>
      </div>
      <style type="text/css">
       
      </style>

      <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6">
              <div class="sell_gold_icon">
                <div class="icon__sell">
                  <img src="assets/images/step1.webp" class="mx-auto" height="150px" width="150px">
                </div>
                <div class="text-end box__">
                  <p class="heading_1_2  mob_heading fs-6 pt-2">Bring any gold,silver or dimanod item </p>
                  <div class="right-h2-text-p">
                    <h2 class="right-h2-text">Step 1</h2>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
               <div class="sell_gold_icon">
                <div class="icon__sell">
                  <img src="assets/images/step2.webp" class="mx-auto" height="150px" width="150px">
                </div>
                <div class="text-end">
                  <p class="heading_1_2  mob_heading fs-6 pt-2">Check your gold , silver purity for free on the XRF Gold Testing Machine </p>
                  <div class="right-h2-text-p">
                    <h2 class="right-h2-text">Step 2</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
               <div class="sell_gold_icon">
                <div class="icon__sell">
                  <img src="assets/images/step3.webp" class="mx-auto" height="150px" width="150px">
                </div>
                <div class="text-end">
                  <p class="heading_1_2  mob_heading fs-6 pt-2">Get instent cash for your Gold thought Cheque , NEFT or RTGS </p>
                  <div class="right-h2-text-p">
                    <h2 class="right-h2-text">Step 3</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <?php include'review.php'?>
 

    <section class="faq_sec">
<style>
    .accordion-button {
    /*background-image: url(/assets/images/faq1.png);*/
    background-size: cover;
    background-repeat: repeat;
    /*height: 78px;*/
    width: 100%;
    border-bottom-left-radius: 26px !important;
    border-top-right-radius: 20px !important;
    margin-bottom: 8px;
    border: none !important;
}
.accordion-item {
    border: none;
}
.btn-style{
    color: #fff;
    /*position: absolute;*/
    /*bottom: 10px;*/
    left: 0;
    right: 0;
    /*margin: 10px;*/
    text-decoration: none;
    border-radius: 10px;
    /*box-shadow: 1px 1px 6px 0px #af232e;*/
    background: radial-gradient( circle farthest-corner at -0.2% 99.7%, rgb(238 205 112) 0%, rgb(174 34 45 / 99%) 100.2% );
    /*padding: 5px 8px;*/
    vertical-align: middle;
}
.btn-style:hover{
    color: #af232e;
    border: 1px solid #af232e;
    box-shadow: -1px 0 3px 0 #af232e;
    background: #fff;
}
.btn:focus {
  outline: none !important;
  box-shadow: none !important;
}
.card{
    border: 1px solid #530101 !important;
}

.read_more_data{
    display:none;
}
</style>
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
        <h1 class="text-center mt-3">FAQ</h1>
        <span class="heading_border"></span>
        <!--<div class="text-center mb-3">-->
          <!--<img src="assets/images/strip_line.png" style="width: 15%;">-->
        <!--</div>--></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item" id="accordion-button1" >
              <h2 class="accordion-header " id="flush-headingOne">
                <button style="background-image: url(/assets/images/faq_1.webp); "  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Do you release Pledge Gold?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Yes, we release pledged gold from all NBFC’S, pawn brokers and banks.</div>
              </div>
            </div>
            <div class="accordion-item" id="accordion-button2" >
              <h2 class="accordion-header" id="flush-headingTwo">
                <button style="background-image: url(/assets/images/faq_3.webp); " class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                 What documents are required for selling Gold?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                A valid ID Proof (Addhar card, Identity card, Driving license)<br>
                A valid and latest Address Proof<br>
                Passport size photo
                </div>
              </div>
            </div>
            <div class="accordion-item" id="accordion-button3" >
              <h2 class="accordion-header" id="flush-headingThree">
                <button style="background-image: url(/assets/images/faq_5.webp); " class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                 What are your branch timings?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Opening time - 9:30 Am<br>
Closing time - 6:00 Pm<br>
If you are planning to visit us after office hours please inform the customer care by calling 8880 140 140.

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item" id="accordion-button4" >
              <h2 class="accordion-header" id="flush-headingOne2">
                <button style="background-image: url(/assets/images/faq_2.webp); "  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne2">
                  Do you work on Sundays?
                </button>
              </h2>
              <div id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Yes, only corporate office will be open on Sunday.</div>
              </div>
            </div>
            <div class="accordion-item" id="accordion-button5" >
              <h2 class="accordion-header" id="flush-headingTwo">
                <button style="background-image: url(/assets/images/faq_4.webp); " class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                  Will you buy Diamond and Silver?
                </button>
              </h2>
              <div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Yes, we buy all kind of diamond and silver.</div>
              </div>
            </div>
            <div class="accordion-item" id="accordion-button6" >
              <h2 class="accordion-header" id="flush-headingThree">
                <button  style="background-image: url(/assets/images/faq_6.webp); "  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
                  Mode of payment?
                </button>
              </h2>
              <div id="flush-collapseThree2" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Payments are available in all modes like cash, NEFT, RTGS and Cheque.</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
  </section>
  <section class="media mb-4">
    <div class="container">
       <div class="row">
        <div class="col-12 mt-3 mb-3">
          <h1 class="text-center">What our customer search for</h1>
          <span class="heading_border"></span>
        </div>
        <!--<div class="col-lg-6 col-md-6 col-sm-12">-->
        <!--  <?php echo $c_setting['YouTube1']; ?>-->
        <!--  </div>-->
        <!--<div class="col-lg-6 col-md-6 col-sm-12">-->
        <!--    <?php echo $c_setting['YouTube2']; ?>-->
        <!--  </div>-->
        <?php
        $sql="SELECT * FROM `what_our` ORDER BY `what_our`.`id` ASC LIMIT 4";
        $r= $this->db->query($sql)->result();
        foreach($r as $key => $v){
        
        ?>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card mb-2">
                <div class="card-body text-center">
                     <?php echo $v->description;?>
                </div>
            </div>
        </div>
        <?php } ?>
         
      </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="javascript:" class="btn btn-style mt-2 read_more_btn"> Read More</a>
                </div>
            </div>
        </div>
        <div class="read_more_data">
            <div class="row mt-2">
                
                <?php 
                $sql="SELECT * FROM `what_our` ORDER BY `what_our`.`id` ASC LIMIT 1000 OFFSET 4";
                $r= $this->db->query($sql)->result();
                foreach($r as $key => $v){
        
        ?>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card mb-2">
                <div class="card-body text-center">
                     <?php echo $v->description;?>
                </div>
            </div>
        </div>
        <?php } ?>
             
            
        </div>
        </div>
        <!--<div class="row mt-3">-->
        <!--    <div class="col-lg-6 col-md-6 col-sm-12  mt-3 footer_img  ">-->
        <!--      <div class="text-white">-->
        <!--        <h2 class="heading_1 pt-5 ps-5 pe-5">-->
        <!--          Corporate Office (Karnataka)-->
        <!--        </h2>-->
        <!--        <p class="fs-4 m-5">-->
        <!--            Akshaya Gold Company - #95, Bheema Jyothi Colony, Siddaiah Park Road, Basaveshwara Nagar, Bangalore – 560079-->
        <!--        </p>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--    <div class="col-lg-6 col-md-6 col-sm-12">-->
        <!--      <div class="text-center">-->
        <!--        <img src="assets/images/system.webp" width="100%" style="height: 312px;margin-top: 20px;">-->
        <!--      </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
  </section>
 