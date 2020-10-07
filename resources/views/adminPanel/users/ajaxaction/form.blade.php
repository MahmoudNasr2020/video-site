

    $('#forms-user').on('submit',function(e){
        e.preventDefault();
        $('#name_error').html('');
        $('#email_error').html('');
        $('#password_error').html('');

        if($('#type').val()=='add'){

            $.ajax({
            url:"{{ route('admin.users.store') }}",
            type:"post",
            data:$("#forms-user").serialize(),
            dataType:'json',
            success:function(){
                $('#forms-user')[0].reset();
                $('#orangeModalSubscription').modal('hide');
                swal("! تم الحفظ ",
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
        }

        if($('#type').val()=='update'){

            $.ajax({
            url:"{{ route('admin.users.update') }}",
            type:"post",
            data:$("#forms-user").serialize(),
            dataType:'json',
            success:function(){
                $('#forms-user')[0].reset();
                $('#orangeModalSubscription').modal('hide');
                swal("! تم التعديل ",
                 " ! للاغلاق اضغط اوكي ",
                  "success");

            },
            error:function(reject){
                var response = $.parseJSON(reject.responseText);
                $.each(response.errors,function(key,val){
                    $('#'+key+'_error').html('<small style="color:red">'+val[0]+'*</small>');
                });
            }


        });
        }


    });

