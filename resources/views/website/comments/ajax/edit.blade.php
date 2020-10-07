

$('#formeditCommment').on('submit',function(e){
    e.preventDefault();
    var id = $('#idComment').val();
    $('#commentedit_error').html('');

    var formData = $("#formeditCommment").serialize();
        $.ajax({
        url:"{{ route('website.comment.edit') }}",
        type:"post",
        data:$("#formeditCommment").serialize(),
        dataType:'json',
        success:function(data){
            $('.commentAjax_'+id).text(data.comment)

            $('#modalLoginForm').modal('hide');
            $('#formeditCommment')[0].reset();
            swal("! تم تعديل الكومنت بنجاح ",
             " ! للاغلاق اضغط اوكي ",
              "success");
        },



    });

    });
