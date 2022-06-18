
    <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form class="row" action="?act=product&xuli=edit" method="POST">
  <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select class="form-control" name="DM" id="exampleSelect1">
                <?php foreach ($data_dm as $row) { ?>
                    <option <?= ($row['category_id'] == $data['category_id'])?'selected':''?> value="<?= $row['category_id'] ?>"><?= $row['category_name'] ?></option>
                <?php } ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text" name="TenSP" value="<?=$data['product_name']?>">
              </div>
                <input class="form-control" type="hidden" name="id" value="<?=$data['product_id']?>">

              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Tình trạng</label>
                <select class="form-control" name="status" id="exampleSelect1">
                  <option>-- Chọn tình trạng --</option>
                  <option value="1">Còn hàng</option>
                  <option value="0">Hết hàng</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá bán</label>
                <input class="form-control" type="text"  name="gia" value="<?=$data['product_price']?>">
              </div>
              <div class="form-group col-md-12">
                <label for="">Hình ảnh</label>
                <img src="<?=$data['product_image']?>" height="200px" width="200px">
               
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota"><?=$data['product_desc']?></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Chủ đề sản phẩm</label>
                <textarea class="form-control" name="chude" id="mota"><?=$data['product_content']?></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div>

          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="?act=product&xuli=join">Hủy bỏ</a>
        </div>
</form>