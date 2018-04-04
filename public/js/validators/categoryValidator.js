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
    $("#add_category").validate({
        rules: {
            category:{
                required:true,
                remote:{
                    url: '/check/category'
                }
            }
        },
        messages:{
            category:{
                remote:"Category already exist."
            }
        }
    });

});