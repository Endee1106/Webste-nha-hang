
  </aside>
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row pn">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  
                    <th>STT</th>
                    <th>Đơn Hàng</th>
                    <th>Số Lượng</th>
                    <th>Xem chi tiết</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>1</td>
                    <td>Đơn Hàng chưa xử lý</td>
                    <td><?= count($chuaXuLy) ?></td>
                    <td><a href="?act=order&xuli=chua"><i class="fas fa-search"></i></a></td>
                  </tr>
                  <tr>
                   
                   <td>2</td>
                   <td>Đơn Hàng đang xử lý</td>
                   <td><?=count($dangChuaXuLy)  ?></td>
                   <td><a href="?act=order&xuli=dangchua"><i class="fas fa-search"></i></a></td>
                 </tr>
                 <tr>
                   
                   <td>3</td>
                   <td>Đơn Hàng đã xử lý</td>
                   <td><?=count($daXuLy)  ?></td>
                   <td><a href="?act=order&xuli=da"><i class="fas fa-search"></i></a></td>
                 </tr>
                 <tr>
                   
                   <td>4</td>
                   <td>Đơn Hàng hủy</td>
                   <td><?=count($huy)  ?></td>
                   <td><a href="?act=order&xuli=huy"><i class="fas fa-search"></i></a></td>
                 </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="src/jquery.table2excel.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
  <script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function () {
      jQuery(".trash").click(function () {
        swal({
          title: "Cảnh báo",
         
          text: "Bạn có chắc chắn là muốn xóa đơn hàng này?",
          buttons: ["Hủy bỏ", "Đồng ý"],
        })
          .then((willDelete) => {
            if (willDelete) {
              swal("Đã xóa thành công.!", {
                
              });
            }
          });
      });
    });
    oTable = $('#sampleTable').dataTable();
    $('#all').click(function (e) {
      $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
      e.stopImmediatePropagation();
    });

    //EXCEL
    // $(document).ready(function () {
    //   $('#').DataTable({

    //     dom: 'Bfrtip',
    //     "buttons": [
    //       'excel'
    //     ]
    //   });
    // });


    
    //In dữ liệu
    var myApp = new function () {
      this.printTable = function () {
        var tab = document.getElementById('sampleTable');
        var win = window.open('', '', 'height=700,width=700');
        win.document.write(tab.outerHTML);
        win.document.close();
        win.print();
      }
    }

    //Modal
    $("#show-emp").on("click", function () {
      $("#ModalUP").modal({ backdrop: false, keyboard: false })
    });
  </script>

