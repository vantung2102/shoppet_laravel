$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

function loadMore() {
    const page = $("#page").val();

    $.ajax({
        type: "post",
        dataType: "json",
        data: { page },
        url: "services/load-product",
        success: function (response) {
            if (response.html !== "") {
                $("#loadMore").append(response.html);
                $("#page").val(page + 1);
            } else {
                // alert("load xong");
            }
        },
        error: function (response) {
            console.log(response);
        },
    });
}
