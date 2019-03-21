$(document).ready(function () {

    //-----------------------------MODIFY USER INFORMATION---------------

    $('.modify').on('click', function () {
        var id = $(this).data('id');
        var form = document.getElementById('modifyInfo');
        var formData = new FormData(form);
        formData.append('id', id);
        $.ajax({
            url: '../controller/modifyInfo.php',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            complete: function (data) {
            },
        });
    });

    //-------------------------ADD POSTS---------------------------

    $('.addNewPost').on('click', function () {
        var form = document.getElementById('postForm');
        // var form = $(this).parents('form')[0];
        var formData = new FormData(form);
        $.ajax({
            url: '../controller/addPostsController.php',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            complete: function (data) {
                 window.location.reload();
            },
        });
    });

    //-------------------------UPDATE POSTS---------------------------

    $('.update').on('click', function () {
        var id = $(this).data('id');
        var div = $(this).parents('form')[0];
        console.log(div)
        var formData = new FormData(div);
        formData.append('id', id);
        $.ajax({
            url: '../controller/updateController.php',
            type: 'POST',
            // data: {id:id},
            data: formData,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            complete: function (data) {
                location.reload(data);
            }
        })
    });

    //-------------------------DELETE POSTS---------------------------

    $('.delete').on('click', function () {
        var remove = $(this).parents('div.post');
        var id = $(this).data('id');
        var div = document.getElementById('postRow');
        var formData = new FormData(div);
        formData.append('id', id);
        $.ajax({
            url: '../controller/deleteController.php',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            complete: function (data) {
                if (data) {
                    remove.remove();
                } else {
                    alert("article can't be deleted");
                }
            }
        })
    });

});

