


        var idVideo = $('#videos').data('id');

        load_data('');

        function load_data(id=""){
            $.ajax({
                url:"{{ route('website.loadData') }}",
                type:'post',
                data:{
                    id:id,
                    idVideo:idVideo,
                    "_token":"{{ csrf_token() }}"
                    },
                dataType:"json",
                success:function(data){
                    $('#comments-ajax').append(data.data);

                },
            });
        }

        $(document).on('click', '#load_more_button', function(){
            var id = $(this).data('id');

            setTimeout(function() {
                load_data(id);
                $('.loader').hide();
            },1500);
            $(this).remove();
            $('.loader').show();

           });






