<?php include 'template/header.php'; ?>
<body id="mimin" class="dashboard topnav">
  <?php include 'template/nav_header.php'; ?>
  <!-- start -->
  <div id="content">
    <div class="panel box-shadow-none content-header">
      <div class="panel-body">
        <div class="col-md-12">
          <h3 class="animated fadeInLeft">category</h3>
          <p class="animated fadeInDown">
            แก้ไขหมวด myhis
          </p>
        </div>
      </div>
    </div>
    <!-- form -->
    <div class="form-element">
      <div class="col-md-12 top-10 padding-0">
        <div class="col-md-6">
          <div class="panel form-element-padding">
            <div class="panel-heading">
              <h4>EDIT category</h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
              <div class="col-md-6">
                <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');?>
                <?php echo form_open('administration/category/edit',$attributes);?>
                <?php if (!empty($category)): ?>
                <?php echo form_hidden('id',$category->id); ?>
                <?php else: ?>
                <?php endif ?>
                <div class="form-group"><label class="col-sm-2 control-label text-right">name</label>
                <div class="col-sm-10"><input type="text" name="name_category" class="form-control" placeholder="Name category" value="<?php echo $category->name ?>">
                <?php echo form_error('name_type', '<span class="text-danger">','</span>') ?>
              </div>
            </div>
            <div class="col-md-12 text-center" >
              <a href="<?php  echo base_url('administration/category');?>"  class="btn btn-danger  btn-md">ย้อนกลับ</a>
              <button  class="btn btn-primary  btn-md">บันทึก</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- endform -->

<!-- end -->
</div><!-- end -->
<?php include 'template/footer.php'; ?>
<!-- datatable -->
<script src="<?php  echo base_url('assets/js/plugins/jquery.datatables.min.js')?>"></script>
<script src="<?php  echo base_url('assets/js/plugins/datatables.bootstrap.min.js')?>"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#datatables-example').DataTable();
});
</script>
</body>
</html>