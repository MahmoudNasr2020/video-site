<script>
    $('#contact_us').on('submit',function(e){
        e.preventDefault();
        $('#name_error').html('');
        $('#email_error').html('');
        $('#message_error').html('');
        var form = $(this).serialize();
        $.ajax({
            url:"{{ route('website.contact') }}",
            method:"POST",
            data:form,
            dataType:'JSON',
            success:function(data)
            {
                $('#name_error').html('');
                $('#email_error').html('');
                $('#message_error').html('');
                $('#contact_us')[0].reset();
                swal("!تم الارسال بنجاح ",
                " ! للاغلاق اضغط اوكي ",
                 "success");
            },
            error:function(reject)
            {
                var response = $.parseJSON(reject.responseText);

                $.each(response.errors,function(key,val){
                    $('#'+key+'_error').html('<small style="color:red;font-size: 14px;">'+val[0]+'*</small>');
                });
            }
        });
    });
</script>
