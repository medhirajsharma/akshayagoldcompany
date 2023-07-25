
<?php
// echo "<pre>";
// print_r($blog);
// echo "</pre>";
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
<!--font-family: 'Josefin Sans', sans-serif;
font-family: 'Nunito Sans', sans-serif;-->

<style>
body {
    font: 16px "Nunito","Source Sans Pro",sans-serif;
    line-height: 1.8;
    color: #596172;
    -webkit-overflow-scrolling: touch;
    margin: 0 auto;
    background: #fff;
    -ms-word-wrap: break-word;
    word-wrap: break-word;
    letter-spacing: 0.5px;
   
}
/*.fullimage {
    height: 300px;  
}
.cover {
    background-repeat: no-repeat!important;
    background-position: center center!important;
    background-size: cover!important;
}*/



.box {
	/*font-family: 'PT Sans', sans-serif;*/
	text-align: center;
	overflow: hidden;
	position: relative;
}

.box:before,
.box:after {
	content: '';
	background: linear-gradient(#6D6027, #D3CBB8);
	width: 100%;
	height: 0;
	opacity: 0.1;
	position: absolute;
	right: 0;
	bottom: 0;
	z-index: 1;
	transition: all 0.4s ease-in-out;
}

.box:after {
	top: 0;
	bottom: auto;
	left: 0;
	right: auto;
}

.box:hover:before,
.box:hover:after {
	width: 100%;
	height: 100%;
	opacity: 0.5;
}

.box img {
	width: 100%;
	height: auto;
	opacity: 1;
	transition: all 0.6s ease;
}

.box:hover img {
	filter: hue-rotate(50deg);
}

.box .box-content {
	color: #fff;
	width: 100%;
	padding: 0 20px;
	opacity: 0;
	transform: translateX(-50%) translateY(-50%);
	position: absolute;
	top: 70%;
	left: 50%;
	z-index: 2;
	transition: all .5s ease;
}

.box:hover .box-content {
	opacity: 1;
	top: 50%;
}
.box .title{
    font-family: "Josefin Sans",sans-serif;
    font-weight: 700;
    font-size: 30px;
    margin-bottom: 40px;
    line-height: 1.45;
    letter-spacing: 0px;
    color: #fff;
    text-transform: capitalize;
    margin: 0 0 5px;
}

/*.box .title {
	font-size: 25px;
	font-weight: 700;
	letter-spacing: 1px;
	text-transform: capitalize;
	margin: 0 0 5px;
}*/

@media only screen and (max-width:990px) {
	.box {
		margin: 0 0 30px;
	}
}

.blog-page-item a{
    text-decoration:none;
}
.pagination{
    float: right;
   /* background: #af232e;*/
}
.pagination .active{
    background-color:#af232e;
}
.pagination .active a{
    color:#fff;
}
.pagination  li a{
    /*color:#fff;*/
}
.pagination  li{
    padding: 0px 5px;
    border: 1px solid #af232e;
}

</style>



<section id="blog" class="pb-5 pt-2">
    <div class="container">
      <div class="row">
          <?php  foreach($blog as $k=>$v){ ?>
           <div class="col-md-4 col-lg-4 col-sm-6 pt-3 ">
                <div class="bolg_warpper">
                    <a href="<?php echo base_url().'blogSingle/'.$v['id']; ?>">
                    <div class="box">
                        <img src="<?php echo base_url().'/uploads/admin/blog/'.$v['image'];?>">
                        <div class="box-content">
                            <h1 class="title"><?php echo $v['title'];?></h1>
                            <!--<span class="post">Web designer</span>-->
                            
                        </div>
                    </div>
                    </a>
                  
                    <div class="bolg_content">
                        <div class="meta_">
                            <?php 
                            echo date('d-M-Y',  strtotime($v['created_at']));
                            ?>
                        </div>
                        <a href="<?php echo base_url().'/blogSingle/'.$v['id']; ?>" class="blog_title"> <?php echo $v['title'];?>
                        </a>
                       <?php 
                        $x=20;
                        $parts = explode(' ',$v['description']);
                        //echo "<pre>"; print_r(sizeof($parts)); echo "</pre>";
                        if (sizeof($parts)>$x) {
                            $parts = array_slice($parts,0,$x);
                        }
                        echo implode(' ',$parts);
                       ?> 
                    </div>
                </div>
                
            </div>
            <?php } ?>
      </div>
      <div class="row">
          <div class="col-mg-12">
              <?php echo "<pre>"; print_r($links); echo"</pre>"; ?>
          </div>
      </div>
    </div>
       
</section>
