
    $('.add').on('click',function(e){
        e.preventDefault();
        $('#forms-user')[0].reset();
        $('#id').val('');
        $('#type').val('add');
        $('.h4-subscribe').text('Add Video');
        $('#name_error').html('');
        $('#url_error').html('');
        $('#desc_error').html('');
        $('#muslims_error').html('');
        $('#cat_error').html('');
        $('#image_error').html('');
        $('#status_error').html('');
        $('#meta_key_error').html('');
        $('#meta_desc_error').html('');
        $('#fullHeightModalTop').modal('show');

    });

