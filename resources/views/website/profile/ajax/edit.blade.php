
    $('#btn-setting').on('click',function(){

        var id = $(this).data('id');

        $.ajax({
            url:"{{ route('profile.edit') }}",
            method:"POST",
            dataType:'JSON',
            data:{
                id:id,
                "_token":"{{ csrf_token() }}"
                },
            success:function(data)
            {
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#bio').val(data.bio);
                $('#id').val(data.id);
                $('#setting').slideToggle(500);
            }
        });
    });

