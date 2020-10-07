


    $('#addCommentUser').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url:"{{ route('website.comment.add') }}",
            method:"post",
            data:$(this).serialize(),
            success:function(data){

                    $("#addCommentUser")[0].reset();
                    $('#addComment').text('');
                    $('#comments-ajax').html('');
                    setTimeout(function(){
                        load_data('');
                        $('.loader').hide();
                    },1500);
                    $('.loader').show();


            }
            ,error:function(){

                swal("! يجب تسجيل الدخول اولا ",
                " ! للاغلاق اضغط اوكي ",
                 "error");
            }
        });


    });
