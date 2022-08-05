var Telformat = /^[0-9]+$/;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;



function checkCapcha() {
    if ($("#textCapcha").val() != "" && $("#capcha").val() != "") {

        var textCapcha = $("#textCapcha").val();
        var capcha = $("#capcha").val();

        if (textCapcha != capcha) {
            $(".erCapcha").css("display", "block");
            return false;
        } else if (textCapcha == capcha) {
            $(".erCapcha").css("display", "none");
            return true;
        } else {
            $(".erCapcha").css("display", "none");
            return false;
        }
    } else {
        $(".erCapcha").css("display", "none");
        return false;
    }
}

function checkEmailValid() {

    var mailValid = $("#email").val();

    if (mailValid != "") {
        if (!mailValid.match(mailformat)) {
            $(".erEmail").css("display", "block");
            return false;
        } else if (mailValid.match(mailformat)) {
            $(".erEmail").css("display", "none");
            return true;
        }
    } else {
        $(".erEmail").css("display", "block");
        return false;
    }
}


function checkTelValid() {

    var TelValid = $("#tel").val();

    if (TelValid != "") {
        if (!TelValid.match(Telformat)) {
            $(".erTel").css("display", "block");
            return false;
        } else if (TelValid.match(Telformat)) {
            $(".erTel").css("display", "none");
            return true;
        }
    } else {
        $(".erTel").css("display", "block");
        return false;
    }
}

$(document).ready(function() {


    $("#contact_confirm").click(function() {
        var textCapcha = $("#textCapcha").val();
        var capcha = $("#capcha").val();
        var contact = $("#contact_name").val();
        var tel = $("#tel").val();
        var email = $("#email").val();
        var Cusmsg = $("#Cusmsg").val();
        var company = $("#company").val();
        var fax = $("#fax").val();

        if (capcha != "" && contact != "" && tel != "" && email != "" && Cusmsg != "" && company != "") {
            $(".erContact").css("display", "none");
            $(".erTel").css("display", "none");
            $(".erEmail").css("display", "none");
            $(".erDetail").css("display", "none");
            $(".erCompany").css("display", "none");
            if (textCapcha != capcha) {
                alert("กรุณากรอกข้อความตามรูปให้ถูกต้องด้วยค่ะ");
                $(".erCapcha").css("display", "block");
                $(".erCapchaBlack").css("display", "none");
                return false;

            } else if (!tel.match(Telformat)) {
                alert("กรุณากรอกเบอร์โทรให้ถูกต้อง");
                $(".erTel").css("display", "block");
                return false;
            } else if (!email.match(mailformat)) {
                alert("กรุณากรอก Email ให้ถูกต้อง");
                $(".erEmail").css("display", "block");
                return false;
            } else if (textCapcha == capcha && email.match(mailformat) && tel.match(Telformat)) {
                $(".erCapcha").css("display", "none");
                $(".erCapchaBlack").css("display", "none");

                $.ajax({
                    type: "post",
                    url: "mailFromCus.php",
                    data: { textCapcha: textCapcha, capcha: capcha, contact: contact, tel: tel, company: company, Cusmsg: Cusmsg, fax: fax, email: email },
                    dataType: "html",
                    cache: false,
                    success: function(data) {
                        if (data) {
                            alert("ข้อมูลของท่านได้ส่งเรียบร้อยแล้วค่ะ ทางบริษัทจะติดต่อกลับนะคะ");
                            window.location.href = "contact.php";
                        } else {
                            alert("กรุณากรอกข้อมูลให้ถูกต้อง");
                        }
                    }
                })

            } else {
                $(".erCapcha").css("display", "block");
                $(".erCapchaBlack").css("display", "none");
                return false;
            }
        } else {
            if (capcha == "" && contact == "" && tel == "" && email == "" && Cusmsg == "" && company == "") {
                alert("กรุณากรอกข้อมูลให้ครบถ้วนด้วยค่ะ");
                $(".erEmail").css("display", "block");
                $(".erTel").css("display", "block");
                $(".erContact").css("display", "block");
                $(".erCapcha").css("display", "block");
                $(".erCapchaBlack").css("display", "none");
                $(".erDetail").css("display", "block");
                $(".erCompany").css("display", "block");
                return false;
            }
            if (company == "") {
                alert("กรุณากรอกชื่อบริษัทด้วยค่ะ");
                $(".erCompany").css("display", "block");
                return false;
            }
            if (contact == "") {
                alert("กรุณากรอกชื่อผู้ติดต่อด้วยค่ะ");
                $(".erContact").css("display", "block");
                $(".erCompany").css("display", "none");
                return false;
            }
            if (tel == "") {
                alert("กรุณากรอกเบอร์โทรศัพด้วยค่ะ");
                $(".erTel").css("display", "block");
                $(".erCompany").css("display", "none");
                $(".erContact").css("display", "none");
                return false;
            }
            if (email == "") {
                alert("กรุณากรอกอีเมล์ด้วยค่ะ");
                $(".erTel").css("display", "none");
                $(".erEmail").css("display", "block");
                $(".erCompany").css("display", "none");
                $(".erContact").css("display", "none");
                return false;
            }
            if (Cusmsg == "") {
                alert("กรุณากรอกข้อความด้วยค่ะ");
                $(".erDetail").css("display", "block");
                $(".erTel").css("display", "none");
                $(".erEmail").css("display", "none");
                $(".erCompany").css("display", "none");
                $(".erContact").css("display", "none");
                return false;
            }
            if (capcha == "") {
                alert("กรุณากรอกข้อความตามรูปด้วยค่ะ");
                $(".erCapcha").css("display", "block");
                $(".erCapchaBlack").css("display", "none");
                $(".erDetail").css("display", "none");
                $(".erTel").css("display", "none");
                $(".erEmail").css("display", "none");
                $(".erCompany").css("display", "none");
                $(".erContact").css("display", "none");
                return false;
            }
            return false;
        }
    });
});