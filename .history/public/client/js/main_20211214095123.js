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
        success: function (response) {
            console.log(response);
        },
        error: function (response) {
            console.log(response);
        },
    });
}
