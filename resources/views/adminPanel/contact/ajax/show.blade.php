
    $(document).on('click','.show',function(){

        var id = $(this).data('id');
        $.ajax({
            url:"{{ route('contact.show') }}",
            method:"POST",
            data:{
                "_token":"{{ csrf_token() }}",
                id:id,
            },
            dataType:'json',
            success:function(data)
            {
                $('#name_table').text(data.name);
                $('#email_table').text(data.email);
                $('#message_table').text(data.message);
                $('#fullHeightModalRight').modal('show');
            }
        });
    });

