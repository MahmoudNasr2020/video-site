<script>
    function loadsearch (id='',segment='')
    {
        $.ajax({
            url:"{{ route('website.loadSearch') }}",
            method:"POST",
            data:{
                "_token":"{{ csrf_token() }}",
                id:id,
                segment:segment
            },
            dataType:'json',
            success:function(data)
            {
                if(data.response == 'success')
                {

                    $('#loadDataSearch').append(data.data);
                }
                else
                {
                    $('#load_more_data_search').remove();
                    $('#dataMoreSearch').show();
                }
            }
        });
    }

    $(document).on('click','#load_more_data_search',function(){
        var id = $(this).data('id');
        var segment = $(this).data('search');
        $(this).parent().remove();
        $(this).remove();
        setTimeout(function(){
            loadsearch(id,segment);
            $('.loader').hide();
        },1000);
        $('.loader').show();


    });
</script>
