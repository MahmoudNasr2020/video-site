

    $('#form_user_setting').on('submit',function(e){
        e.preventDefault();
        $('#name_error').text('');
        $('#email_error').text('');
        $('#image_error').text('');
        $('#password_error').text('');
        $('#bio_error').text('');
        var formdata = new FormData(this);
        $.ajax({
            url:"{{ route('profile.update') }}",
            method:"POST",
            data:formdata,
            cache:false,
            processData:false,
            contentType:false,
            dataType:'json',
            success:function(data)
            {
                $('#img_user').attr('src',"{{ asset('uploads/videos/') }}" +'/'+ data.image);
                $('#title').text(data.name);
                $('#description').text(data.bio);
                $('#password').val('');
                $('#password').text('');
                $('#password-confirm').val('');
                $('#password-confirm').text('');
                $('#image').val('');
                $('#image').text('');
                swal("! تم التعديل بنجاح ",
                " ! للاغلاق اضغط اوكي ",
                 "success");
            },
            error:function(reject)
            {
                var response = $.parseJSON(reject.responseText);
                $.each(response.errors,function(key,val){
                    $('#'+key+'_error').append('<small style="color:red;font-size: 14px;">'+val[0]+'*</small>')
                });
            }
        });
    });

