<div class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Quản lí khách hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
        
    <div class="row_pr">
        <div class="col-md-12">
            <div class="tile">
                <table class="table table-hover table-bordered" id="myTable">
                <thead>
                    <tr class="ex">
                        <th width="150px">Tên Khách Hàng</th>
                        <th width="80px">Giới Tính</th>
                        <th width="150px">SDT</th>
                        <th width="200px">Địa Chỉ</th>
                        <th width="100px">Email</th>
                        <th width="100px">Chức Vụ</th>
                        <th width="5px; !important">Tính Năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($data as $cus) {?>
                    <tr>
                        <td><?= $cus['name'];?></td>
                        <td><?= $cus['user_sex'];?></td>
                        <td><?= $cus['user_tel'];?></td>
                        <td><?= $cus['user_address'];?></td>
                        <td><?= $cus['user_email'];?></td>
                        <td> <?php
                if ($cus['role_id'] == 1) {
                echo 'Quản trị viên';
                } else {
                    echo 'Khách Hàng';
                }
                
                ?></td>
                        <td>
                            <a class="edit" href="?act=controller&xuli=see&id=<?= $cus['user_id'] ?>" title="xem chi tiết" data-toggle="tooltip"><i class="fa fa-pencil"
                                    aria-hidden="true"></i></a>
                            
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>