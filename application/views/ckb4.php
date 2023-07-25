<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<textarea id="ckeditor" name="description"></textarea>
                                    
<script src="//akshayagoldcompany.gstebill.com/ckb4/ckeditor/ckeditor.js">
    
</script>
<script>
    $(function () {
    //CKEditor
    CKEDITOR.replace('ckeditor',{
        filebrowserUploadUrl: '/ckeditor/index',
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.config.height = 300;
    
    

    //TinyMCE
    // tinymce.init({
    //     selector: "textarea#tinymce",
    //     theme: "modern",
    //     height: 300,
    //     plugins: [
    //         'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    //         'searchreplace wordcount visualblocks visualchars code fullscreen',
    //         'insertdatetime media nonbreaking save table contextmenu directionality',
    //         'emoticons template paste textcolor colorpicker textpattern imagetools'
    //     ],
    //     toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    //     toolbar2: 'print preview media | forecolor backcolor emoticons',
    //     image_advtab: true
    // });
    // tinymce.suffix = ".min";
    // tinyMCE.baseURL = '../../plugins/tinymce';
});
</script>

