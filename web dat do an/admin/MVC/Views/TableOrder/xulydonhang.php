
<div class="app-content">
<?php foreach($find as $item) { ?>
  <h1>CHI TIẾT ĐƠN HÀNG</h1>
  <h2>(Mã đơn hàng <?= $item['order_id'] ?> )</h2>
  <h2>Thông tin người nhận</h2>
  <p>  <b>Họ tên :</b>  <?= $item['NguoiNhan'] ?></p>
  <p> <b>Điện thoại:</b> <?= $item['SDT'] ?></p>
  <p> <b>Địa chỉ:</b> <?= $item['DiaChi'] ?></p>
  <p> <b>Tổng tiền:</b><?= $item['order_total'] ?></p>

  <form action="?act=order&xuli=updatesubmit" method="POST">
      <h2>TRẠNG THÁI ĐƠN HÀNG</h2>
      <p > <input type="radio" name="status" value="1" <?=$item['order_status']==1?'checked':'' ?>> Chưa xử lý</p>
      <p ><input type="radio" name="status" value="2" <?=$item['order_status']==2?'checked':'' ?>>Đang xử lý</p>
      <p ><input type="radio" name="status" value="3" <?=$item['order_status']==3?'checked':'' ?>>Đã xử lý</p>
      <p  ><input type="radio" name="status" value="4" <?=$item['order_status']==4?'checked':'' ?>>Hủy</p>
      <input type="hidden" name="id" value="<?= $item['order_id'] ?>">
    <section><input   type="submit" value="update đơn hàng"></section>  
  </form>
<?php } ?>
</div>