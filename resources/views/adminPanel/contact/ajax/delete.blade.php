
    $(document).on('click','.delete',function(){

        var id =$(this).data('id');
        swal({
                title: "متاكد من الحذف؟",
                text: " ! سوف نقوم بحذف البيانات ولن تتمكن من رايتها مره اخري",
                icon: "warning",
                buttons: true,
                dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {

            $.ajax({
                url:"{{ route('contact.delete') }}",
                method:"POST",
                data:{
                    "_token":"{{ csrf_token() }}",
                    id:id
                },
                dataType:'json',
                success:function()
                {
                      swal("تم الحذف بنجاح", {
                        icon: "success",
                        });
                }
            });

        } else {
            swal(" ! فشل الحذف ");
        }
        });
    });

