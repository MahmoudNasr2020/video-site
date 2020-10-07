
    $(document).on('click','.update',function(){
        var id = $(this).attr('id');
        $('#name_error').html('');
        $('#meta_key_error').html('');
        $('#meta_desc_error').html('');
        $.ajax({
            url:"{{ route('admin.cat.edit') }}",
            type:"post",
            data:{
                id:id,
                "_token":"{{ csrf_token() }}"
            },
            dataType:'json',
            success:function(data){
                $('.h4-subscribe').text('Edit Muslim');
                $('#name').val(data.name);
                $('#meta_key').val(data.meta_key);
                $('#meta_desc').val(data.meta_desc);
                $('#id').val(data.id);
                $('#type').val('update');
                $('#orangeModalSubscription').modal('show');
            }

        });


    });



