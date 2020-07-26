$('.invoice-status span.invoice-status-value').click(function(){
    var str_situation = $(this).text();
    if(str_situation == 'Pending'){
        $(this).text('Transporting');
        $(this).removeClass('badge-danger');
        $(this).addClass('badge-warning');
    }else if (str_situation == 'Transporting'){
        $(this).text('Paid');
        $(this).removeClass('badge-warning');
        $(this).addClass('badge-secondary');
    }else{
        $(this).text('Pending');
        $(this).removeClass('badge-secondary');
        $(this).addClass('badge-danger');
    }

    $('.invoice-buttons .btn-save-invoice').css('display', 'inline-block');

    // alert(str_situation);
})

$('button#save-invoice').click(function(){
    var invoice_situation = $('.invoice-status span.invoice-status-value').text();
    var invoice_id = $('h6#invoice-id').attr('data-id');
    toastr.options ={
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-left",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "300",
        "timeOut": "3000",
        "extendedTimeOut": "3000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    
    var data = {invoice_id:invoice_id, invoice_situation:invoice_situation};
    $.ajax({
        url: '?mod=invoice&controller=detail&action=updateStatusInvoice',
        method: "POST",
        data: data, // Dữ liệu được truyền lên server
        dataType: 'text',
        success: function (data) {
            if(data == true){
                toastr.remove();
                toastr.options.positionClass = "toast-top-left";
                toastr.success("This invoice is changed.", 'Success!');
            }
        },
        // Phương thức này trả về lỗi xảy ra với ajax
        error: function (xhr, ajaxOptions, throwError) {
            // Lỗi 404: đường dẫn ko tìm được
            alert(xhr.Status);
            alert(throwError);
        }
    });  

})


