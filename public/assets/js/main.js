$(document).ready(() => {
    $("#main-con-sid-open").click(() =>{
        $("#main-con-sid-open").hide();
        $("#main-con-sid-close").show();
        $("#main-sid").show(200);
    });
    $("#main-con-sid-close").click(() =>{
        $("#main-con-sid-open").show();
        $("#main-con-sid-close").hide();
        $("#main-sid").hide(500);
    });
    $("#show-details-phone-user-open").click(() =>{
        $(".phone-style").show(500);
        $("#show-details-phone-user-close").show();
        $("#show-details-phone-user-open").hide();
    });
    $("#show-details-phone-user-close").click(() =>{
        $(".phone-style").hide(500);
        $("#show-details-phone-user-close").hide();
        $("#show-details-phone-user-open").show();
    });
    $(".upload-file").click(() =>{
        let fileInput = $('<input type="file">');
        fileInput.change(function() {
            let files = $(this).prop('files');
            if (files.length > 0) {
                let selectedFile = files[0];
                let fileName = selectedFile.name;
                let fileSize = selectedFile.size;
                let allowedExtensions = ['pdf'];
                let maxFileSize = 10 * 1024 * 1024; // convert from byte for MG...
                let fileExtension = fileName.split('.').pop().toLowerCase();
                if (!allowedExtensions.includes(fileExtension)) {
                    alert('يرجى اختيار ملف بصيغة PDF.');
                    return;
                }
                if (fileSize > maxFileSize) {
                    alert('حجم الملف يجب أن لا يزيد عن 10 ميغابايت.');
                    return;
                }
                $("#file-price").val(fileName);
            }
        });
        fileInput.click();
    });

});



// $(".main-content").click(() =>{
//     $("#main-con-sid-open").show();
//     $("#main-con-sid-close").hide();
//     $("#main-sid").hide(500);
// });
