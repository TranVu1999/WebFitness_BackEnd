(function ($) {
  'use strict';
  
  // Add Course
  $(".ms-panel-body").on('click', '.trigger-swal', function () {
    var swalType = $(this).data('swal');
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
        
        case 'delete-record':
            var record_id = $(this).parent().parent().attr("data-id");
            Swal.fire({
              title: 'Are you sure delete?',
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
                    url: '?mod=invoice&controller=del&action=deleteInvoice',
                    method: "POST",
                    data: data, // Dữ liệu được truyền lên server
                    dataType: 'text',
                    success: function (data) {
                        if(data == false){
                            alert("Can't delete this Invoice");
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
                Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
              }
            });
          break;
      default:
        Swal.fire('The Internet?', 'That thing is still around?', 'question');
        break;
    }
  });
})(jQuery);


