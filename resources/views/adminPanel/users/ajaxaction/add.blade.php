
    $('.add').on('click',function(e){
        e.preventDefault();
        $('#forms-user')[0].reset();
        $('#id').val('');
        $('#type').val('add');
        $('.h4-subscribe').text('Add User');
        $('#name_error').html('');
        $('#email_error').html('');
        $('#password_error').html('');
        $('#orangeModalSubscription').modal('show');

    });

