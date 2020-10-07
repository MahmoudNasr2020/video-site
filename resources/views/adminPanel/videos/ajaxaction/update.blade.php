<script>
    $('#forms-user').on('submit',function(e){

        e.preventDefault();

        $('#name_error').html('');
        $('#image_error').html('');
        $('#url_error').html('');
        $('#desc_error').html('');
        $('#muslims_error').html('');
        $('#cat_error').html('');
        $('#status_error').html('');
        $('#meta_key_error').html('');
        $('#meta_desc_error').html('');

        var formdata = new FormData(this);

        $.ajax({
            url:"{{ route('admin.video.update') }}",
            type:"post",
            data:formdata,
            processData:false,
            contentType:false,
            cache:false,
            dataType:'json',
            success:function(data){

                $('#image_get').attr('src',"{{ asset('uploads/videos/') }}"+'/'+data.image);

                swal("! تم التعديل ",
                 " ! للاغلاق اضغط اوكي ",
                  "success");

            },
           error:function(reject){
                var response = $.parseJSON(reject.responseText);
                $.each(response.errors,function(key,val){
                    $('#'+key+'_error').html('<small style="color:red;font-size: 14px;">'+val[0]+'*</small>');
                });
            }

        });

    });

</script>

