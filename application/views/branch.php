<style>
.branch-img{
height:300px;
}

.branch-img img{
height:100%;
}
.card{
    background-color:#af232e;
}
p,a{
    color:white;
    text-decoration:none;
}
</style>

<section class="about_section pt-5 pb-5">
<div class="container">
<h2 class="text-center">BRANCHES</h2>

<?php
//print_r($karnataka);
?>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
     <div class="branch-img"><img src="<?php echo base_url('assets/images/ifile_1110.jpg')?>" class="card-img-top" alt="..."></div>

      <div class="card-body">
        <h2 style="text-align:center;color:#ddc058;text-decoration:none;" class="col-md-12 zero_margin">
            <a style="text-align:center;color:#ddc058;" href="<?php echo base_url().'branches/Karnataka' ; ?>">Karnatak</a></h2>
           
           <div class="row">
          <?php foreach($karnataka as $key=>$value){ ?>
           <div class="col-6">
            <a href="<?php echo base_url().'branches/'.$value->city.'/'. $value->url ; ?>"><p  class="col-md-12 zero_margin"><i class="fas fa-map-marker-alt"></i> <?php echo $value->name?></p></a>
           
           </div>
           <?php } ?>
         
           </div>
           
           
      </div>
    </div>
  </div>
  
  <div class="col-sm-6">
    <div class="card">
     <div class="branch-img"><img src="<?php echo base_url('assets/images/ifile_1111.jpg')?>" class="card-img-top" alt="..."></div>
        <div class="card-body">
         <h2 style="text-align:center;color:#ddc058;" class="col-md-12 zero_margin">
             <a style="text-align:center;color:#ddc058;" href="<?php echo base_url().'branches/Tamilnadu' ; ?>">Tamilnadu</a></h2>

           <div class="row">
            <?php foreach($tamilnadu as $key=>$value){ ?>
           <div class="col-6">
            <a href="<?php echo base_url().'branches/'.$value->city.'/'. $value->url ; ?>"><p  class="col-md-12 zero_margin"><i class="fas fa-map-marker-alt"></i> <?php echo $value->name?></p></a>
           
           </div>
           <?php } ?>
         
            </div>
            
            
        </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="text-center mt-5">
            <a href="/branch_locator" class="text-success"><h2>Branch Locator</h2></a>
        </div>
    </div>
</div>
    
</div>
    
    </div>
</section>