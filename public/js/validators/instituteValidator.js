$(document).ready(function () {
    $.validator.setDefaults({
        errorClass: 'help-block',
        highlight:function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight:function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        }
    });
    $("#add_institute").validate({
        rules: {
            institute:{
                required:true,
                remote:{
                    url: '/check/institute'
                }
            }
        },
        messages:{
            institute:{
                remote:"Institute already exist."
            }
        }
    });

});