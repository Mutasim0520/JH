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
    $("#add_district").validate({
        rules: {
            district:{
                required:true,
                remote:{
                    url: '/check/district'
                }
            }
        },
        messages:{
            district:{
                remote:"District already exist."
            }
        }
    });

});