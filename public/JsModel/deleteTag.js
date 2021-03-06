function actionDelete(event) {
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Xoá Tag này?',
        text: "Chú ý: Không thể hoàn tác hành động này!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xóa!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().parent().parent().remove();
                        Swal.fire(
                            'Thành công!',
                            'Xóa thành công.',
                            'success'
                        )
                    }
                },
                error: function (data) {

                }
            })

        }
    });
}


$(function () {
    $(document).on('click', '.action_delete', actionDelete);
});