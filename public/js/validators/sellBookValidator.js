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

    $("#sell_book_form").validate({
        rules: {
            title:{
                required:true,
                maxlength: 200,
            },
            edition:{
                maxlength: 20,
            },
            author:{
                maxlength: 200,
            },
            cover:{
                filesize : 6000000,
            },
            inner_1:{
                filesize : 6000000,
            },
            inner_2:{
                filesize : 6000000,
            },
            price:{
                required:true,
                number:true,
                maxlength: 20,
            }
        },
        messages:{
            title:{
                required:"Please provide a name of your book.",
                maxlength:"Please proveide a name less than 200 character",
            },
            cover:{
                filesize:"Please upload a file less than 6 MB",
            },
            inner_1:{
                filesize:"Please upload a file less than 6 MB",
            },
            inner_2:{
                filesize:"Please upload a file less than 6 MB",
            },
            price:{
                number:"Please enter a price consisting only number",
            }
        }
    });

});