(function ($) {
  'use strict';
  
  // Add Course
  $(".ms-panel-body").on('click', '.trigger-swal', function () {
    var swalType = $(this).data('swal');
    var banner_id = $(this).data("id");
    var prod_cate_id = $(this).data("id");
    
    switch (swalType) {
      case 'disable-record':
        var record_id = $(this).attr("data-id");
        Swal.fire({
          title: 'Are you sure delete?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then(function (result) {
          if (result.value) {
//            alert(record_id + "ok");
            
            var data = {record_id: record_id};
            $.ajax({
                url: '?mod=invoice&controller=index&action=deleteInvoice',
                method: "POST",
                data: data, // Dữ liệu được truyền lên server
                dataType: 'text',
                success: function (data) {
                    if(data == false){
                        alert("Can't remove this Invoice");
                    }else{
                        $("table#data-invoice tr[data-id='" + record_id + "']").remove();
                    }
                    
                },
                // Phương thức này trả về lỗi xảy ra với ajax
                error: function (xhr, ajaxOptions, throwError) {
                    // Lỗi 404: đường dẫn ko tìm được
                    alert(xhr.Status);
                    alert(throwError);
                }
            });

            Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
          }
        });
        break;
        
        case 'restore-record':
          
            var record_id = $(this).parent().parent().attr("data-id");
            Swal.fire({
              title: 'Are you sure restore?',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, restore it!'
            }).then(function (result) {
              if (result.value) {
    //            alert(record_id + "ok");

                var data = {record_id: record_id};
                $.ajax({
                    url: '?mod=invoice&controller=del&action=restoreInvoice',
                    method: "POST",
                    data: data, // Dữ liệu được truyền lên server
                    dataType: 'text',
                    success: function (data) {
                        if(data == false){
                            alert("Can't restore this Invoice");
                        }else{
                            $("table#data-invoice tr[data-id='" + record_id + "']").remove();
                        }
//                        alert(data);

                    },
                    // Phương thức này trả về lỗi xảy ra với ajax
                    error: function (xhr, ajaxOptions, throwError) {
                        // Lỗi 404: đường dẫn ko tìm được
                        alert(xhr.Status);
                        alert(throwError);
                    }
                });
                Swal.fire('Restored!', 'Your file has been deleted.', 'success');
              }
            });
          break;
//        Delete banner
        case 'del-banner':
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
                    var data = {banner_id: banner_id};
                    $.ajax({
                        url: '?mod=banner&controller=index&action=delBanner',
                        method: "POST",
                        data: data, // Dữ liệu được truyền lên server
                        dataType: 'text',
                        success: function (data) {
                            if(data == true){
                                $('ul.lst-banner li[data-banner-id="' + banner_id + '"]').remove();
                                Swal.fire('Deleted!', 'This banner has been deleted.', 'success');
                            }

                        },
                        // Phương thức này trả về lỗi xảy ra với ajax
                        error: function (xhr, ajaxOptions, throwError) {
                            // Lỗi 404: đường dẫn ko tìm được
                            alert(xhr.Status);
                            alert(throwError);
                        }
                    });
                }
            });
            break;
        
//        Restore banner
        case 'restore-banner':
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
                    var data = {banner_id: banner_id};
                    $.ajax({
                        url: '?mod=banner&controller=del&action=restoreBanner',
                        method: "POST",
                        data: data, // Dữ liệu được truyền lên server
                        dataType: 'text',
                        success: function (data) {
                            if(data == true){
                                $('ul.lst-banner li[data-banner-id="' + banner_id + '"]').remove();
                                Swal.fire('Restored!', 'This banner has been restored.', 'success');
                            }
                        },
                        // Phương thức này trả về lỗi xảy ra với ajax
                        error: function (xhr, ajaxOptions, throwError) {
                            // Lỗi 404: đường dẫn ko tìm được
                            alert(xhr.Status);
                            alert(throwError);
                        }
                    });
                }
            });
            break;
            
//            Del prod cate
        case 'del-prod-cate':
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
//                    alert(prod_cate_id);
                    var data = {prod_cate_id: prod_cate_id };
                    $.ajax({
                        url: '?mod=product-category&controller=index&action=delProductCate',
                        method: "POST",
                        data: data, // Dữ liệu được truyền lên server
                        dataType: 'text',
                        success: function (data) {
//                            alert(data);
                            if(data == true){
                                $('ul.lst-banner li[data-banner-id="' + banner_id + '"]').remove();
                                Swal.fire('Restored!', 'This banner has been restored.', 'success');
                            }
                        },
                        // Phương thức này trả về lỗi xảy ra với ajax
                        error: function (xhr, ajaxOptions, throwError) {
                            // Lỗi 404: đường dẫn ko tìm được
                            alert(xhr.Status);
                            alert(throwError);
                        }
                    });
                }
            });
            break;
        
//        Restore Product Cate
        case 'restore-prod-cate':
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
//                    alert(prod_cate_id);
                    var data = {prod_cate_id: prod_cate_id };
                    $.ajax({
                        url: '?mod=product-category&controller=del&action=restoreProductCate',
                        method: "POST",
                        data: data, // Dữ liệu được truyền lên server
                        dataType: 'text',
                        success: function (data) {
//                            alert(data);
                            if(data == true){
                                $('ul.lst-banner li[data-banner-id="' + banner_id + '"]').remove();
                                Swal.fire('Restored!', 'This banner has been restored.', 'success');
                            }
                        },
                        // Phương thức này trả về lỗi xảy ra với ajax
                        error: function (xhr, ajaxOptions, throwError) {
                            // Lỗi 404: đường dẫn ko tìm được
                            alert(xhr.Status);
                            alert(throwError);
                        }
                    });
                }
            });
            break;
      default:
        Swal.fire('The Internet?', 'That thing is still around?', 'question');
        break;
    }
  });
})(jQuery);


