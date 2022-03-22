$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

// delete menu
function removeRow(id, url) {
    if (confirm("Xóa vĩnh viễn. Bạn có chắc ?")) {
        $.ajax({
            type: "delete",
            dataType: "json",
            data: { id },
            url: url,
            success: function (response) {
                if (response.success === true) {
                    alert(response.message);
                    console.log(response.message);
                }
            },
            error: function (response) {
                alert(response.message);
                console.log(response.message);
            },
        });
    }
}

//upload file form
$("#upload").change(function () {
    const form = new FormData();

    form.append("file", $(this)[0].files[0]);

    $.ajax({
        processData: false,
        contentType: false,
        type: "post",
        dataType: "JSON",
        data: form,
        url: "/admin/upload/service",
        success: function (response) {
            if (response.success === true) {
                $("#image_show").html(
                    '<a href="' +
                        response.url +
                        '" target="_blank">' +
                        '<img src="' +
                        response.url +
                        '" width="100px"></a>'
                );

                $("#thumbnail").val(response.url);
            } else {
                alert("Upload File Lỗi");
            }
        },
        error: function (error) {
            console.log(error);
        },
    });
});

// function uploadFile() {
//     const form = new FormData();

//     form.append("file", $("#upload")[0].files[0]);

//     $.ajax({
//         processData: false,
//         contentType: false,
//         type: "POST",
//         dataType: "json",
//         data: form,
//         url: "/admin/upload/service",
//         success: function (response) {
//             console.log(response);
//         },
//         error: function (response) {
//             console.log(response);
//         },
//     });
// }
