<?php include_once('top_panel.php'); ?>
<?php include_once('side_navbar.php'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Branch Add</h2>
        </div>

        <form action="<?php echo base_url('branch/post_save')?>" id="form" method="post" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="body">
                                <h2 class="card-inside-title">Branch</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="city" id="city" placeholder="branch" />
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>

                            <h2 class="card-inside-title">Latitude Longitude</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="lat" id="lat" placeholder="Latitude" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Longitude" name="long" id="long" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Name" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="seo_title"  id="seo_title" placeholder="Seo_title" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="seo_keyword" id="seo_keyword" placeholder="seo_keyword" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="seo_description" id="seo_description" cols="15" rows="2" class="form-control no-resize" required="" aria-required="true" placeholder="Ex: Seo_description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <h2 class="card-inside-title">Status</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                            <select class="form-control show-tick" name="status">
                                               <option value="enable">Enable</option>
                                               <option value="disable">Disable</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                               
                               <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control" name="address" id="address" placeholder="address" />

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile" />

                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    
                                        <div class="form-line focused">
                                        <input type="file" class="form-control" name="image_uplode" id="image_uplode" placeholder="image_uplode" />

                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control"  name="url" id="url" placeholder="Url" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control"  name="google_map_url" id="google_map_url" placeholder="Google map url" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control"  name="header" id="header" placeholder="Header" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control"  name="footer" id="footer" placeholder="Footer" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                         <input type="text" class="form-control"  name="page_title" id="page_title" placeholder="Page Title" />
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

 


