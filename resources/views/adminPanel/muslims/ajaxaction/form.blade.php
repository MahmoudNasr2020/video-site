

    $('#forms-user').on('submit',function(e){
        e.preventDefault();
        $('#name_error').html('');
        $('#meta_key_error').html('');
        $('#meta_desc_error').html('');

        if($('#type').val()=='add'){

            $.ajax({
            url:"{{ route('admin.muslim.store') }}",
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
            url:"{{ route('admin.muslim.update') }}",
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
                    $('#'+key+'_error').html('<small style="color:red;font-size: 15px;">'+val[0]+'*</small>');
                });
            }


        });
        }


    });

