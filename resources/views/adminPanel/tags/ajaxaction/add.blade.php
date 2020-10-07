
    $('.add').on('click',function(e){
        e.preventDefault();
        $('#forms-user')[0].reset();
        $('#id').val('');
        $('#type').val('add');
        $('.h4-subscribe').text('Add Tag');
        $('#name_error').html('');
        $('#orangeModalSubscription').modal('show');

    });

