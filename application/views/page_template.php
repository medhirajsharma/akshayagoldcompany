<?php
// echo "<pre>";
// print_r($page);
// echo "</pre>";
?>

<section id="page_single">
    
    <img src="<?php echo base_url().'/uploads/admin/page/'.$page['image'];?>" width="100%">
    
    <div class="container"> 
        <div class="text-center mt-4 mb-4">
        <h2 style="color: #530101;"><?php echo $page['title'];?></h2>
        </div>
        <?php echo $page['description'];?>
    </div>
    
    
</section>

