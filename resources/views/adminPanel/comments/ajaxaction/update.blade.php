

    $('#forms-edit_comment').on('submit',function(e){
        e.preventDefault();

        $('#comment_error').html('');

        var formData = $("#forms-add").serialize();


            $.ajax({
            url:"{{ route('admin.comment.update') }}",
            type:"post",
            data:$("#forms-edit_comment").serialize(),
            dataType:'json',
            success:function(){
                $('#formEditComment').modal('hide');
                $('#forms-add')[0].reset();
                swal("! تم تعديل الكومنت بنجاح ",
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

