
    $(document).on('click','.delete',function(){
        var id = $(this).attr('id');
        swal({
            title: "هل انت متاكد؟",
            text: " ! سنقوم بحذف الملف",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url:"{{ route('admin.cat.delete') }}",
                    type:"POST",
                    data:{
                        "_token":"{{ csrf_token() }}"
                        ,id:id
                    },
                    success:function(){
                            swal("تم الحذف بنجاح ", {
                                icon: "success",
                        });
                    }
                });
            }
            else {
                    swal("فشل الحذف");
                }
          });

    });


