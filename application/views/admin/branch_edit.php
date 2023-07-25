<?php include_once('top_panel.php'); ?>
<?php include_once('side_navbar.php'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Branch Edit</h2>
        </div>

            <form action="<?php echo base_url('branch/post_update/'.$branch_edit->id)?>" id="form" method="post" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <h2 class="card-inside-title">Branch Edit</h2> 
                           <div class="body">
                            
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="city" id="city" placeholder="city"  value="<?php echo $branch_edit->city?>" />
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                         <?php
                        // print_r($branch_edit);
                         ?>
                            <h2 class="card-inside-title">Latitude Longitude</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  class="form-control" name="lat" id="lat" placeholder="Latitude" value="<?php echo $branch_edit->lat?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Longitude" name="long" id="long"  value="<?php echo $branch_edit->long?>"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $branch_edit->name?>"  />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="seo_title"  id="seo_title" placeholder="Seo_title" value="<?php echo $branch_edit->seo_title?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="seo_keyword" id="seo_keyword" placeholder="seo_keyword" value="<?php echo $branch_edit->seo_keyword?>"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="seo_description" id="seo_description" cols="30" rows="3" class="form-control no-resize" required="" aria-required="true" placeholder="Ex: Seo_description"><?php echo $branch_edit->seo_description?> </textarea>

                                        </div>
                                    </div>
                                </div>
                               
                               
                            </div>

                            

                            <h2 class="card-inside-title">Status</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">

                                            <select  name="status" class="form-control">
                                              <option value="enable" <?php if($branch_edit->status=='enable'){echo 'selected';}?>>Enable</option>
                                              <option value="disable" <?php if($branch_edit->status=='disable'){echo 'selected';}?>>Disable</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control" name="address" id="address" placeholder="address" value="<?php echo $branch_edit->address?>" />

                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile" value="<?php echo $branch_edit->mobile?>"/>

                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                        <input type="file" class="form-control" name="image_uplode" id="image_uplode" />
                                        <input type="hidden" class="form-control" name="image" id="image"  value="<?php echo $branch_edit->image_uplode?>"/>

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control"  name="url" id="url" placeholder="Url" value="<?php echo $branch_edit->url;?>"/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control"  name="google_map_url" id="google_map_url" placeholder="Google map url" value="<?php echo $branch_edit->google_map_url;?>"/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control"  name="header" id="header" placeholder="Header" value="<?php echo $branch_edit->header;?>"/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control"  name="footer" id="footer" placeholder="Footer" value="<?php echo $branch_edit->footer;?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control"  name="page_title" id="page_title" placeholder="Page Title" value="<?php echo $branch_edit->page_title;?>"/>
                                        </div>
                                </div>
                                </div>
                            </div>
                         </div>
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
                            <textarea id="ckeditor" name="description">
                            <?php echo $branch_edit->description ?>
                           </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
            
            
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                         <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                        </div>

                    </div>
                </div>
            </div>

            </form>
            
        </div>
</section>

 


