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

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than {0}');

    $("#book_request_form").validate({
        rules: {
            title:{
                required:true,
                maxlength: 200,
            },
            phone:{
                required:true,
                number:true,
            }
        },
        messages:{
            title:{
                required:"Please provide a name of your book.",
                maxlength:"Please proveide a name less than 200 character",
            },
            phone:{
                number:"Please provide a valid phone number"
            }
        }
    });

});