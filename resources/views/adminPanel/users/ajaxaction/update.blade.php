
    $(document).on('click','.update',function(){
        var id = $(this).attr('id');
        $('#name_error').html('');
        $('#email_error').html('');
        $('#password_error').html('');
        $.ajax({
            url:"{{ route('admin.users.edit') }}",
            type:"post",
            data:{
                id:id,
                "_token":"{{ csrf_token() }}"
            },
            dataType:'json',
            success:function(data){
                $('.h4-subscribe').text('update');
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#id').val(data.id);
                $('#type').val('update');
                $('#orangeModalSubscription').modal('show');
            }

        });


    });



