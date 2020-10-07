
    $(document).on('click','.update',function(){
        var id = $(this).attr('id');
        $('#name_error').html('');
        $.ajax({
            url:"{{ route('admin.tags.edit') }}",
            type:"post",
            data:{
                id:id,
                "_token":"{{ csrf_token() }}"
            },
            dataType:'json',
            success:function(data){
                $('.h4-subscribe').text('Edit Tag');
                $('#name').val(data.name);
                $('#id').val(data.id);
                $('#type').val('update');
                $('#orangeModalSubscription').modal('show');
            }

        });


    });



