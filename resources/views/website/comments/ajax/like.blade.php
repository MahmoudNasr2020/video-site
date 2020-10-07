
    $(document).on('click','.like_comment',function(){

        var comment_id = $(this).attr('id');

        var $self = $(this);

        $.ajax({
            url:"{{ route('website.likeComment') }}",
            method:"POST",
            data:{
                "_token":"{{ csrf_token() }}",
                commentId:comment_id
            },
            dataType:'json',
            success:function(data)
            {
                if(data.data == 1)
                {
                    $self.css('color','rgb(243, 62, 88)');

                    var count =$self.parent('div').find('span').text();

                    var new_count = parseInt(count) + 1;

                    $self.parent('div').find('span').text(new_count);



                }
                else
                {
                    $self.css('color','#66615b');

                    var count =$self.parent('div').find('span').text();

                    var new_count = parseInt(count) - 1;

                    $self.parent('div').find('span').text(new_count);

                }
            },
            error:function(reject)
            {
                swal("! يجب تسجيل الدخول اولا ",
                " ! للاغلاق اضغط اوكي ",
                 "error");
            }
        });
    });
