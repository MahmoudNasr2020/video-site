<script>
    $(document).ready(function(){
        loadData('');

        function loadData(id="")
        {
            $.ajax({

                url:"{{ route('home.videos') }}",
                method:"POST",
                dataType:"json",
                data:{
                    id:id,
                    "_token":"{{ csrf_token() }}",
                },
                success:function(data){
                    if(data.response =='success')
                    {
                        $('#loadData').append(data.data);
                    }
                    else
                    {
                        $('#dataMore').show();
                    }

                },
                error:function(){

                }
            });
        }

        $(document).on('click',"#load_more_data",function(){

            $(this).parent().remove();
            $(this).remove();

            var id = $(this).data('id');

            loadData(id);
        });
    });
</script>
