$(document).ready(function () {
    //-----------------------------CHANGE USER INFORMATION---------------

    $('.modify').on('click', function () {
        var id = $(this).data('id');
        // console.log(id); OK
        var form = document.getElementById('modifyInfo');
        var formData = new FormData(form);
        // console.log(formData.get('fName'));  OK
        // console.log(formData.get('lName'));  OK
        // console.log(formData.get('picture')); OK
        // console.log(formData.get('password'));
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
                // window.location.reload(data);
                // document.getElementById("modifyInfo").reset();
            },
        });
    });

    $('.addNewPost').on('click', function () {
        var form = document.getElementById('postForm');
        var formData = new FormData(form);
        console.log(formData.get('postPicture'));
        $.ajax({
            url: '../controller/addPostsController.php',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            complete: function (data) {
                // window.location.reload(data);
            },
        });
    });

});

