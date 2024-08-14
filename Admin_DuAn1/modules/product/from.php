<?php
$isedit = isset($_GET['$page']) && !empty($_GET[$page]) && $_GET['$page'] === 'sua' ? true : false;
?>

<div class="col-md-12" bis_skin_checked="1">
  <!-- jquery validation -->
  <div class="card card-primary" bis_skin_checked="1">
    <div class="card-header" bis_skin_checked="1">
      <h3 class="card-title"><?= $isedit ? "sửa" : "thêm" ?> Sản Phẩm</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" novalidate="novalidate">
      <div class="card-body" bis_skin_checked="1">
        <div class="row">

          <div class="col-xl--2">
          </div>
          <div class="form-group" bis_skin_checked="2" style="width: 917.917.2px " ;>
            <label for="product_name">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" id="product_name" placeholder="Tên sản phẩm " style="width: 917px;">
          </div>
        </div>
        <div class="form-group" bis_skin_checked="1">
          <label for="product_name">Mô tả sản phẩm</label>
          <textarea id="summernote" name="content" style="display: none;" class="d-none">                Place &lt;em&gt;some&lt;/em&gt; &lt;u&gt;text&lt;/u&gt; &lt;strong&gt;here&lt;/strong&gt;
                    </textarea>
        </div>
      </div>
      <div class="col-xl-9">
        <div class="form-group" style="text-align: right;">
          <label for="product_name">Danh mục sản phẩm </label>
          <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%; text-align: right; ">
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
        </div>



        <div class="row">
          <div class="card card-info" bis_skin_checked="9">
            <div class="card-header" bis_skin_checked="8" style="width: 917.2px;">
              <h3 class="card-title">Thông tin sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

          </div>
          <br>
        </div>
        <div style="display: flex; width: 1216 px;">
          <!-- <div class="clo-xl-9">
          <div class="form-group row">
            <label for="Price" class="col-sm-3 col-form-label">Giá gốc</label>
            <div class="col-sm--1">
              <input type="number" class="form-control" id="price" placeholder="Giá gốc ">
            </div>
          </div>
        </div> -->
          <div class="clo-xl-8">
            <div class="form-group row" style="width: 373px;">
              <label for="Price" class="col-sm-4 col-form-label">Giá Gốc</label>
              <div class="col-sm--8">
                <input type="number" class="form-control" id="price" placeholder="Giá Gốc">
              </div>
            </div>
          </div>

          <div class="clo-xl-8" style="padding-left: 230px;">
            <div class="form-group row" style="width: 373px;">
              <label for="Price" class="col-sm-4 col-form-label">Giá khuyến mãi</label>
              <div class="col-sm--8">
                <input type="number" class="form-control" id="price" placeholder="Giá khuyến mãi">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

</div>
<!-- /.card-body -->
<div class="card-footer" bis_skin_checked="1">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
<!-- /.card -->
</div>