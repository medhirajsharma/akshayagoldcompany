<style>
<style>
.branch-img{
height:300px;
}

.branch-img img{
height:100%;
}
.inside-branch{
    float: left;
    width: 100%;
    padding: 30px;
    text-align: center;
    background: rgb(58, 0, 0);
    background: -webkit-radial-gradient(circle, rgba(58, 0, 0, 1) 0%, rgba(92, 0, 0, 1) 50%, rgba(26, 0, 0, 1) 100%);
    background: -o-radial-gradient(circle, rgba(58, 0, 0, 1) 0%, rgba(92, 0, 0, 1) 50%, rgba(26, 0, 0, 1) 100%);
    background: -webkit-radial-gradient(circle, rgb(83, 1, 1) 0%, rgb(92, 0, 0) 50%, rgb(26, 0, 0) 100%);
    background: -o-radial-gradient(circle, rgb(83, 1, 1) 0%, rgb(92, 0, 0) 50%, rgb(26, 0, 0) 100%);
    background: radial-gradient(circle, rgb(83, 1, 1) 0%, rgb(92, 0, 0) 50%, rgb(26, 0, 0) 100%);
    min-height: 500px;
}

.inside-branch{
    float: left;
    width: 100%;
    padding: 30px;
    text-align: center;
    background: rgb(58, 0, 0);
    background: -webkit-radial-gradient(circle, rgba(58, 0, 0, 1) 0%, rgba(92, 0, 0, 1) 50%, rgba(26, 0, 0, 1) 100%);
    background: -o-radial-gradient(circle, rgba(58, 0, 0, 1) 0%, rgba(92, 0, 0, 1) 50%, rgba(26, 0, 0, 1) 100%);
    background: -webkit-radial-gradient(circle, rgb(83, 1, 1) 0%, rgb(92, 0, 0) 50%, rgb(26, 0, 0) 100%);
    background: -o-radial-gradient(circle, rgb(83, 1, 1) 0%, rgb(92, 0, 0) 50%, rgb(26, 0, 0) 100%);
    background: radial-gradient(circle, rgb(83, 1, 1) 0%, rgb(92, 0, 0) 50%, rgb(26, 0, 0) 100%);
    min-height: 500px;
}
.inside-branch h2{
    
    text-align: center;
    color: #ddc058;
    display: inline-block;
    margin-bottom: 10px;
    height:80px;
    overflow:hidden;
}
.inside-branch ul{
    
    float: left;
    width: 100%;
    margin-bottom: 30px;
}
.inside-branch ul li{
    
    list-style: none;
    margin-left: 20px;
    line-height: 22px;
    margin-top: 15px;
    text-align: left;
    color: #cacaca;
    float: left;
    width: 100%;
    position: relative;
}
.inside-branch ul li i{
    
    position: absolute;
    margin-left: -20px;
    color: #fff;
    left: 0;
}
/*.inside-branch a{
    
}*/
.get_direction{
    padding:10px;
    background:#ddc058;
    
    color: black;
}
 .inside-branch ul li a{
    padding: 0px;
    background: none;
    color: #cecece;
 }
</style>
<section class="about_section pt-5 pb-5">

<div class="container">

<?php
 //print_r($karnataka);
?>

<div class="row row-cols-1 row-cols-md-3 g-4">
  
  <?php 
  foreach($karnataka as $key=>$value){
      
  ?>
   <div class="col">
    <div class="card">
      <div class="card-body inside-branch">
        <ul>
         <a href="<?php echo base_url().'branches/'.$value->city.'/'. $value->url ; ?>" style="background-color:transparent !important;text-decoration:none;">
            <h2><?php echo $value->name;?></h2>
            </a>
            
           
            <div class="branch-img">
            <a href="<?php echo base_url().'branches/'.$value->city.'/'. $value->url ; ?>"><img src="<?php echo base_url('uploads/admin/branch/'.$value->image_uplode)?>" class="card-img-top" alt="..." width="100%"></a>
           </div>

         
         <li><i class="fas fa-map-marker-alt"></i><a href="<?php echo $value->google_map_url;?>" target="_new">
         
         <?php 
         
         echo $value->address
         ?>
         </a></li>
      </ul>
      <a href="<?php echo $value->google_map_url;?>" target="_blank" style="text-decoration:none;" class="get_direction">Get Direction</a>
      </div>
      </div>
  </div>
  <?php } ?>
 
</div>



</div>

</section>