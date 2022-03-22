$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

function loadMore() {
    const offset = $("#page").val();

    $.ajax({
        type: "post",
        dataType: "json",
        data: { offset },
        url: "services/load-product",
        success: function (response) {
            console.log(response);
        },
        error: function (response) {
            console.log(response);
        },
    });
}
