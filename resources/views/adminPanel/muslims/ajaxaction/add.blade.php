
    $('.add').on('click',function(e){
        e.preventDefault();
        $('#forms-user')[0].reset();
        $('#id').val('');
        $('#type').val('add');
        $('.h4-subscribe').text('Add Muslim');
        $('#name_error').html('');
        $('#meta_key_error').html('');
        $('#meta_desc_error').html('');
        $('#orangeModalSubscription').modal('show');

    });

