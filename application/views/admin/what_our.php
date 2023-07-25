
<?php include_once('top_panel.php'); ?>
<?php include_once('side_navbar.php'); ?>

<section class="content">
    <div class="container-fluid">
        <!--<div class="block-header">-->
        <!--    <h2>page</h2>-->
        <!--</div>-->
        <form action="<?php echo base_url().'page/what_our_save';?>" id="formData" method="post" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               What Our Customer Add
                            </h2>
                        </div>
                        
                    </div> <!--- card --->
                </div>
            </div>
            
             <!-- CKEditor -->
            <div class="row clearfix">
               
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Description
                            </h2>
                            
                        </div>
                        <div class="body">
                           
                           <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="ckeditor" name="description">
                                    </textarea>
                                </div>
                                
                           </div>
                           <div class="row clearfix">
                                <div class="col-lg-12 col-md-6 col-sm-12 align-right">
                                    <button type="submit" class="btn btn-primary form_submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            <!-- #END# CKEditor -->


    </div>
</section>


    