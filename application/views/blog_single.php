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
    text-align:justify;
   
}

.box{
    font-family: 'Source Sans Pro', sans-serif;
    text-align: center;
    overflow: hidden;
    position: relative;
    z-index: 1;
} 
.box:before{
    content: '';
    background: repeating-linear-gradient(to right,rgba(0,0,0,0.4),rgba(0,0,0,0.4) 20px,transparent 20px,transparent 25px);
    height: 100%;
    width: 100%;
    opacity: 0;
    transform: skewY(30deg);
    position: absolute;
    left: 0;
    top: -100%;
    z-index: 1;
    transition: all 0.4s ease 0s;
}
.box:hover:before{
    opacity: 0.8;
    transform: skew(0);
    top: 0;
}
.box img{
    width: 100%;
    height: auto;
}
.box .box-content{
    /*background: linear-gradient(to right,transparent,#EE5A24,#EE5A24,#EE5A24,transparent);*/
    background: linear-gradient(to right,transparent,#ce7980,#b22c37,#af232e,transparent);
    width: 100%;
    padding: 5px 0;
    opacity: 0;
    transform: scaleX(0);
    position: absolute;
    bottom: 10px;
    left: 0;
    z-index: 2;
    transition: all 0.4s ease 0s;
}
.box:hover .box-content{
    opacity: 1;
    transform: scaleX(1);
}
.box .title{
    color: #fff;
    font-size: 25px;
    font-weight: 800;
    text-transform: capitalize;
    margin: 0;
}

.box .icon li a:hover{ box-shadow: 0 0 10px #EE5A24; }
@media only screen and (max-width:990px){
    .box{ margin: 0 0 30px; }
}

.blog_title:hover{
    color:#000;
    cursor: auto;
}
</style>
<?php
// echo "<pre>";
// print_r($blog);
// echo "</pre>";
?>
<section id="blog_single">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <img src="<?php echo base_url().'/uploads/admin/blog/'.$blog['image'];?>">
                    <div class="box-content">
                        <h1 class="title"><?php echo $blog['title'];?></h1>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-12">
                 <div class="bolg_content">
                    <div class="meta_">
                        <?php 
                        echo date('d-M-Y',  strtotime($blog['created_at']));
                        ?>
                    </div>
                    <a href="javascript:" class="blog_title fs-2"> <?php echo $blog['title'];?>
                    </a>
                   <?php 
                    echo $blog['description']
                   ?> 
                </div>
            </div>
        </div>
    </div>
</section>