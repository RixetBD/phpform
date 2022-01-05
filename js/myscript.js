$('#pass_put_eye').click(function () {
    var pass_input = document.getElementById('pass_put');
    if (pass_input.type == 'password') {
        pass_input.type = 'text';
    } else {
        pass_input.type = 'password';
    }
});

$('#pass_con_eye').click(function () {
    var con_pass_input = document.getElementById('pass_con_put');
    if (con_pass_input.type == 'password') {
        con_pass_input.type = 'text';
    } else {
        con_pass_input.type = 'password';
    }
});

$(document).ready(function () {
    $('#pass_put_eye').click(function () {
        $('#pass_put_eye').toggleClass("fa-eye-slash");
    });
});

$(document).ready(function () {
    $('#pass_con_eye').click(function () {
        $('#pass_con_eye').toggleClass("fa-eye-slash");
    });
});