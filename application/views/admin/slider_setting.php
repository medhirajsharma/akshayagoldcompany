<?php include_once('top_panel.php'); ?>
<?php include_once('side_navbar.php'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Setting/Slider Setting</h2>
        </div>

            
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Slider Setting
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form id="formData" method="post">
                                    <input type="hidden" id="id" name="id">
                                    <div class="col-lg-12">
                                        <label for="silder_img">Desktop Slider</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">insert_photo</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="slider[]" id="silder_img" multiple="multiple">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="mobile_silder">Mobile Slider</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">insert_photo</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="mobile_silder[]" id="mobile_silder" multiple="multiple">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 float-left">
                                        <button type="button" class="btn btn-primary form_submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!--- card --->

                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body table-responsive slider_table">
                           
                        </div>
                    </div>
                </div>
            </div>


    </div>
</section>
<script>
var notyf = new Notyf();
function loadSliderSetting(){
    var id = 1;
    let html = '';
    $.ajax({url: "/slider/loadSliderSetting", success: function(result){
        console.log(result);
        if(result.status==true){
             html+=` <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Slider</th>
                        <th>Mobile Slider</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>`;
             $.each(result.data, function (key, val) {
                //alert(key + val);
               
             html+=` <tr>
                        <th scope="row">`+id+++`</th>
                        <td><img src="/uploads/admin/slider/`+val['slider']+`" width="100px" ></td>
                        <td><img src="/uploads/admin/slider/`+val['mobile_slider']+`" width="100px" ></td>
                        <td><a href="javascript:" class="text-danger decoration-none slider_delete" data-id="`+val['id']+`">Delete</a></td>
                    </tr>`;
                
            });
            html+=`</tbody>
            </table>`;
            
            $('.slider_table').html(html);
        }else{
            $('.slider_table').html('');
        }
    }
        
    });
}

loadSliderSetting();
$(document).on('click','.slider_delete',function(e){
    //alert('click');
    e.preventDefault();
    
    var id = $(this).data('id');
    var url ="<?php echo base_url(); ?>slider/deleteSlider/"+id;
    console.log(url);
    if(confirm("Do you really want to delete?")){
    
        $.ajax({
         
        type: 'GET',
        url: url,
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
            loadSliderSetting();
            $('#formData')[0].reset();
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
    }
});

$('.form_submit').click(function(e){
        var url ="<?php echo base_url(); ?>slider/addSliderSetting";

           //alert('click');
            e.preventDefault();
            var fdata = new FormData($("#formData")[0]);
            console.log(fdata);
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
                    $("#formData")[0].reset();
                    loadSliderSetting();
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