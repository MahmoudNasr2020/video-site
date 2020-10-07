
    $(document).on('click','.updateComment',function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $('#comment_error').html('');
        $.ajax({
            url:"{{ route('admin.comment.edit') }}",
            type:"post",
            data:{
                id:id,
                "_token":"{{ csrf_token() }}"
            },
            dataType:'json',
            success:function(data){
                $('.h4-subscribe').text('Edit Comment');
                $('#commentEdit').val(data.comment);
                $('#id_commentEdit').val(data.id);
                $('#type_commentEdit').val('update');
                $('#formEditComment').modal('show');
            }

        });


    });


