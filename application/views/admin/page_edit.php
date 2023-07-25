
<?php include_once('top_panel.php'); ?>
<?php include_once('side_navbar.php'); ?>

<section class="content">
    <div class="container-fluid">
        <!--<div class="block-header">-->
        <!--    <h2>page</h2>-->
        <!--</div>-->
            <form action="<?php echo base_url().'page/page_update';?>" id="formData" method="post" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Page Edit
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                
                                    <input type="hidden" id="id" name="id" value="<?php echo $page->id; ?>">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">title</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control title" name="seo_title" id="seo_title" value="<?php echo $page->seo_title; ?>" placeholder="Ex: SEO Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">vpn_key</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control keyword" name="seo_keyword" id="seo_keyword" value="<?php echo $page->seo_keyword; ?>" placeholder="Ex: SEO Keyword">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">content_paste</i>
                                            </span>
                                            <div class="form-line">
                                                <textarea name="seo_description" value="<?php echo $page->seo_description; ?>" id="seo_description" cols="40" rows="5" class="form-control no-resize" required="" aria-required="true" placeholder="Ex: SEO Description"><?php echo $page->seo_keyword; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">insert_photo</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="image" id="image" value="<?php echo $page->image; ?>"><?php echo $page->image; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">forum</i>
                                            </span>
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="status" id="status">
                                                    <option value="">-- Select Status --</option>
                                                    <option value="publish" <?php if($page->status=='publish'){ echo 'selected'; } ?>>Publish</option>
                                                    <option value="unpublish" <?php if($page->status=='unpublish'){ echo 'selected'; } ?>>Unpublish</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                   
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">playlist_play</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control url" value="<?php echo $page->url;?>" name="url" id="url" placeholder="Ex: Url">
                                            </div>
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">title</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control title" name="title" id="title" value="<?php echo $page->title;?>" placeholder="Ex: Page Title">
                                        </div>
                                    </div>
                                </div>
                                   
                                   
                               
                            </div>
                            
                            
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
                                        <?php echo $page->description;?>
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




    