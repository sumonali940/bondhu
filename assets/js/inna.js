function download(a) {
    var o = $("<a style='display:none' id='js-downloder'>").attr("href", a).attr("download", "bondhubloodbank.png").appendTo("body");
    o[0].click(), o.remove(), $("#btnDownload").text("Download");
}
function saveCapture(a) {
    html2canvas(a, { scale: 2 }).then(function (a) {
        download(a.toDataURL("image/png"));
    });
}
function readURL(a) {
    if (a.files && a.files[0]) {
        var o = new FileReader();
        (o.onload = function (a) {
            $("#blah").attr("src", a.target.result);
        }),
            o.readAsDataURL(a.files[0]);
    }
}
$("#c_name").keyup(function () {
    (name = $("#c_name").val()), $("#c_o_name").text(name);
}),
    $("#blood_group").change(function () {
        (blood = $("#blood_group").val()), $("#c_o_blood").text(blood), $(".c_group").text(blood);
    }),
    $("#c_mobile").keyup(function () {
        (mobile = $("#c_mobile").val()), $("#c_o_mobile").text(mobile);
    }),
    $("#c_address").keyup(function () {
        (address = $("#c_address").val()), $("#c_o_address").text(address);
    }),
    $("#btnDownload").click(function () {
        saveCapture(document.querySelector("#card")), $("#btnDownload").text("Loading....");
    }),
    $("#imgInp").change(function () {
        readURL(this);
    }),
    $("#blah").attr("src", "assets/img/avatar.png"),
    $("#btnDownload").click(function () {
        var a = $("#c_name").val(),
            o = $("#blood_group").val(),
            e = $("#c_mobile").val(),
            n = $("#c_address").val();
        $.ajax({ url: "ajaxRequest.php", type: "POST", data: { card: "card", name: a, blood: o, mobile: e, address: n }, success: function (a) {} });
    });

$("#cbg_0").click(function () {
    $("#card").addClass("cbg0");
    $("#card").removeClass("cbg1");
    $("#card").removeClass("cbg2");
    $("#card").removeClass("cbg3");
    $("#card").removeClass("cbg4");
    $("#card").removeClass("cbg5");
});
$("#cbg_1").click(function () {
    $("#card").addClass("cbg1");
    $("#card").removeClass("cbg0");
    $("#card").removeClass("cbg2");
    $("#card").removeClass("cbg3");
    $("#card").removeClass("cbg4");
    $("#card").removeClass("cbg5");
});
$("#cbg_2").click(function () {
    $("#card").addClass("cbg2");
    $("#card").removeClass("cbg0");
    $("#card").removeClass("cbg1");
    $("#card").removeClass("cbg3");
    $("#card").removeClass("cbg4");
    $("#card").removeClass("cbg5");
});
$("#cbg_3").click(function () {
    $("#card").addClass("cbg3");
    $("#card").removeClass("cbg0");
    $("#card").removeClass("cbg1");
    $("#card").removeClass("cbg2");
    $("#card").removeClass("cbg4");
    $("#card").removeClass("cbg5");
});
$("#cbg_4").click(function () {
    $("#card").addClass("cbg4");
    $("#card").removeClass("cbg0");
    $("#card").removeClass("cbg1");
    $("#card").removeClass("cbg2");
    $("#card").removeClass("cbg3");
    $("#card").removeClass("cbg5");
});
$("#cbg_5").click(function () {
    $("#card").addClass("cbg5");
    $("#card").removeClass("cbg0");
    $("#card").removeClass("cbg1");
    $("#card").removeClass("cbg2");
    $("#card").removeClass("cbg3");
    $("#card").removeClass("cbg4");
});
