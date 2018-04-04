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
    $("#add_subcategory").validate({
        rules: {
            sub_category:{
                required:true,
                remote:{
                    url: '/check/subcategory'
                }
            }
        },
        messages:{
            sub_category:{
                remote:"Sub-Category already exist."
            }
        }
    });

});