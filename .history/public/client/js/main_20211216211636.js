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

// amount product

$(".btn-minus--amount").on("click", function () {
    let numberProduct = Number($(this).next().val());
    if (numberProduct > 0) {
        $(this)
            .next()
            .val(numberProduct - 1);
    }
    let x = "15yu" - 5;
    console.log(x);
});

$(".btn-plus--amount").on("click", function () {
    let numberProduct = Number($(this).prev().val());
    $(this)
        .prev()
        .val(numberProduct + 1);
});

function plus() {
    var quanty = document.getElementById("amount").value;
    document.getElementById("amount").value = parseInt(quanty) + 1;
}

function minus() {
    var quanty = document.getElementById("amount").value;
    if (parseInt(quanty) > 1) {
        document.getElementById("amount").value = parseInt(quanty) - 1;
    }
}

/*Amount product on Mobile*/
function plus_mobile() {
    var quantity = document.getElementById("amount_mobile").value;
    document.getElementById("amount_mobile").value = parseInt(quantity) + 1;
}

function minus_mobile() {
    var quantity = document.getElementById("amount_mobile").value;
    if (parseInt(quantity) > 1) {
        document.getElementById("amount_mobile").value = parseInt(quantity) - 1;
    }
}

// Select image
function changeImage(id) {
    let imagePath = document.getElementById(id).getAttribute("src");
    console.log(imagePath);
    document.getElementById("img-main").setAttribute("src", imagePath);
}

// Like and dislike
var heartvar = document.getElementById("heart");
function like() {
    if (heartvar.style.color == "red") {
        heartvar.style.color = "grey";
    } else {
        heartvar.style.color = "red";
    }
}
