

<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row_pr">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button pl">
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="?act=product&xuli=add" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                                  class="fas fa-file-pdf"></i> Xuất PDF</a>
                            </div>
                            
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Mã Danh Mục</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Tình trạng</th>
                                    <th>Giá tiền</th>
                                   
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $cus) {?>
                <tr>
                    <td><?= $cus['product_id'];?></td>
                    <td>
                        <?php if($cus['category_id'] == 1){ ?>
                            <span class="badge bg-info">Món Việt</span>
                        <?php } else if($cus['category_id'] == 2) {?>
                            <span class="badge bg-info">Món Thái</span>
                        <?php } else { ?>
                            <span class="badge bg-info">Món Trung</span>
                        <?php } ?>
                    </td>
                    <td><?= $cus['product_name'];?></td>
                    <td>
                        <?php if($cus['product_status'] == 1) {?>
                            <span class="badge bg-success">Còn hàng</span>
                        <?php } else {?>
                            <span class="badge bg-danger">Hết hàng</span>
                        <?php } ?>
                    </td>
                    <td><?= number_format($cus['product_price']);?></td>
          
                <td>
                     <a href="?act=product&xuli=delete&id=<?= $cus['product_id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');"
                      type="button" ><i class="fas fa-trash-alt"></i></a>
                  <a class="" href="?act=product&xuli=update&id=<?= $cus['product_id'] ?>" 
                      data-target="#ModalUP"><i class="fas fa-edit" ></i></a>
                       </td>
                        </tr>
                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>