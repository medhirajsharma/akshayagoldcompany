
<?php include_once('top_panel.php'); ?>
<?php include_once('side_navbar.php'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Setting/Common Setting</h2>
        </div>

            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Common Setting
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form id="formData" method="post">
                                    <input type="hidden" id="id" name="id">
                                    <div class="col-lg-6 col-md-5 col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control mobile-phone-number" id="mobile_no" name="mobile_no" placeholder="Ex: +00 (000) 000-00-00" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5 col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control mobile-phone-number" id="header_mobile_no" name="header_mobile_no" placeholder="Ex: +00 (000) 000-00-00" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-6 col-md-5 col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="email" class="form-control email" name="email" id="email" placeholder="Ex: example@example.com" required>
                                            </div>
                                        </div>
                                    </div>
                                   <!-- <div class="col-md-2 col-sm-2 col-lg-2">
                                        <button id="addRow" type="button" class="btn btn-info">Add Row</button>
                                    </div>
                                    -->

                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">title</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control title" name="title" id="title" placeholder="Ex: Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">vpn_key</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control keyword" name="keyword" id="keyword" placeholder="Ex: Keyword">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">content_paste</i>
                                            </span>
                                            <div class="form-line">
                                                <textarea name="description" id="description" cols="30" rows="3" class="form-control no-resize" required="" aria-required="true" placeholder="Ex: Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                            <div class="form-group form-float"> 
                                                <div class="form-line">
                                                    <textarea name="header" cols="30" rows="3" class="form-control no-resize" id="header" required="" aria-required="true" placeholder="Ex: Header"></textarea>
                                                    <!--<label class="form-label">credit_card</label>-->
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">view_day</i>
                                            </span>
                                            <div class="form-group form-float"> 
                                                <div class="form-line">
                                                    <textarea name="footer" cols="30" rows="3" class="form-control no-resize" id="footer" required="" aria-required="true" placeholder="Ex: Footer"></textarea>
                                                    <!--<label class="form-label">credit_card</label>-->
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                            <div class="form-group form-float"> 
                                                <div class="form-line">
                                                    <textarea name="header_menu" cols="30" rows="3" class="form-control no-resize" id="header_menu" required="" aria-required="true" placeholder="Ex: Header Menu"></textarea>
                                                    <!--<label class="form-label">credit_card</label>-->
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">view_day</i>
                                            </span>
                                            <div class="form-group form-float"> 
                                                <div class="form-line">
                                                    <textarea name="footer_menu" cols="30" rows="3" class="form-control no-resize" id="footer_menu" required="" aria-required="true" placeholder="Ex: Footer Menu"></textarea>
                                                    <!--<label class="form-label">credit_card</label>-->
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    
                                    
                                     <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <span class="material-icons">3k</span>

                                            </span>
                                            <div class="form-line">
                                                <textarea type="text" class="form-control youtube1" name="youtube1" id="youtube1" placeholder="Youtube 1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                     <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <span class="material-icons">3k</span>
                                            </span>
                                            <div class="form-line">
                                                <textarea type="text" class="form-control youtube2" name="youtube2" id="youtube2" placeholder="Youtube 2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="new_field_add"></div>
                                     <div class="col-lg-3">
                                         <div id="logo"></div>
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">insert_photo</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="logo" id="logo_img">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12 col-md-6 col-sm-12 align-right">
                                        <button type="button" class="btn btn-primary form_submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!--- card --->

                </div>
            </div>


    </div>
</section>


<script type="text/javascript">
    /* $("#addRow").click(function () {
        var html = '';
        html += `
            <div id="inputFormRow">
            <div class="col-lg-5 col-md-5 col-sm-5" >
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">phone</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control mobile-phone-number" name="mobile_no[]" placeholder="Ex: +00 (000) 000-00-00">
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    <div class="form-line">
                        <input type="email" class="form-control email" name="email[]" placeholder="Ex: example@example.com">
                    </div>
                </div>
            </div>
             <div class="col-md-2 col-sm-2 col-lg-2">
                <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
            </div></div>
        `;

        $('.new_field_add').append(html);
    });
*/
    // remove row
    /*$(document).on('click', '#removeRow', function () {
        
        $(this).parent().closest('#inputFormRow').remove();
    });*/

function loadCommonSetting(){
    $.ajax({url: "/dashboard/loadCommonSetting", success: function(result){
        console.log(result);
        if(result.status==true){
            $('#id').val(result.data.id);
            $('#mobile_no').val(result.data.mobile_no);
            $('#header_mobile_no').val(result.data.header_mobile_no);
            $('#email').val(result.data.email);
            $('#title').val(result.data.title);
            $('#keyword').val(result.data.keyword);
            $('#description').val(result.data.description);
            $('#header').val(result.data.header);
            $('#footer').val(result.data.footer);
            $('#header_menu').val(result.data.header_menu);
            $('#footer_menu').val(result.data.footer_menu);
            $('#youtube1').val(result.data.YouTube2);
            $('#youtube2').val(result.data.YouTube2);

            //$('#logo_img').attr("data-img",result.data.logo);
            $('#logo').html('<img src="<?php echo base_url();?>uploads/admin/'+result.data.logo+'" width="100%">');
        }
    }
        
    });
}
loadCommonSetting();

var notyf = new Notyf();
        var url ="<?php echo base_url(); ?>dashboard/addCommonSetting";
        
        $('.form_submit').click(function(e){
           //alert('click');
            e.preventDefault();
            var fdata = new FormData($("#formData")[0]);
            
            $.ajax({
                 
                type: 'POST',
                url: url,
                data:fdata,
                contentType: false,
                processData: false,
                success: function(response)
                {
                   if(response.status==true){
                    notyf.success({
                        message: response.message,
                        duration: 9000,
                          position: {
                            x: 'right',
                            y: 'top',
                          }
                      });
                    loadCommonSetting();
                   }else{
                    notyf.error({
                        message: response.message,
                        duration: 9000,
                          position: {
                            x: 'right',
                            y: 'top',
                          }
                      });
                   }
                   //alert(response);
                    
                   
                }
            });

        });

</script>

    