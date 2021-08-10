function actionDelete(event) {
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Bạn có chắc chắn muốn xóa bài viết này không? Xoá danh mục sẽ bao gồm việc xoá các bài đăng trong danh mục',
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
                            'Xóa danh mục thành công.',
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