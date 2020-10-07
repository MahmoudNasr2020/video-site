
    $(document).on('click','.replay',function(){
        var id = $(this).data('id');
        $('#email_error').html('');
        $('#message_error').html('');
        $.ajax({
            url:"{{ route('contact.replay.show') }}",
            method:"POST",
            data:{
                "_token":"{{ csrf_token() }}",
                id:id
            },
            dataType:'json',
            success:function(data)
            {
                $('#email').val(data.email);
                $('#id').val(data.id);
                $('#modalContactForm').modal('show');
            }
        });
    });


    $('#send_email').on('submit',function(e){
        e.preventDefault();
        $('#email_error').html('');
        $('#message_error').html('');
        var form = $(this).serialize();
        $.ajax({
            url:"{{ route('contact.send') }}",
            method:'POST',
            data:form,
            dataType:'json',
            success:function(data)
            {
                $('#send_email')[0].reset();
                $('#modalContactForm').modal('hide');
                swal("تم ارسال الرد بنجاح", {
                    icon: "success",
                    });
            },
            error:function(reject){
                var response = $.parseJSON(reject.responseText);
                $.each(response.errors,function(key,val){
                    $('#'+key+'_error').html('<small style="color:red;font-size: 14px;">'+val[0]+'*</small>');
                });
            }

        });
    });

