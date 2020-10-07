

    $(document).on('click','.updateCommentUser',function(){

        var id = $(this).attr('id');
        $.ajax({
            url:"{{ route('website.comment.update') }}",
            type:"POST",
            data:{
                id:id,
                "_token":"{{ csrf_token() }}"
            },
            dataType:'json',
            success:function(data){
                $('#commentUser').text(data.comment);
                $('#idComment').val(data.id);
                $('#modalLoginForm').modal('show');

            },
            error:function(reject){
                var response = $.parseJSON(reject.responseText);
                $.each(response.errors,function(key,val){
                    $('#'+key+'_error').html('<small style="color:red;font-size: 14px;">'+val[0]+'*</small>');
                });
            }

        });

    });
