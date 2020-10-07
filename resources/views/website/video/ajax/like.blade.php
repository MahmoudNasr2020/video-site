<script>
    $(document).on('click','#like_button',function(){

        var video_id = $(this).data('videoid');

        $.ajax({
            url:"{{ route('website.like') }}",
            method:'POST',
            data:{
                video_id:video_id,
                "_token":"{{ csrf_token() }}",
            },
            dataType:'json',
            success:function(data)
            {
                if(data.data == 1)
                {
                    $('#like_button').css('color','rgb(243, 62, 88)');

                    var count = $('#count').text(); //1

                    var new_count = parseInt(count) + 1;

                    var data_count = $('#count').data('count');//1

                    var new_data_count = parseInt(data_count) + 1; //2

                    $('#count').text(new_count);

                    $('#count').attr('data-count',new_data_count);


                }
                else
                {
                    $('#like_button').css('color','');

                    var count = $('#count').text(); // 2

                    var new_count = parseInt(count) - 1; //1

                    var data_count = $('#count').data('count');//2

                    var new_data_count = parseInt(data_count) - 1; //2

                    $('#count').text(new_count);

                    $('#count').attr('data-count',new_count);






                }
            },
            error:function()
            {
                swal("! يجب تسجيل الدخول اولا ",
                " ! للاغلاق اضغط اوكي ",
                 "error");
            }
        });
    });
</script>
