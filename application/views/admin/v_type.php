<?php include 'template/header.php'; ?>
<body id="mimin" class="dashboard topnav">
  <?php include 'template/nav_header.php'; ?>
  <!-- start -->
  <div id="content">
    <div class="panel box-shadow-none content-header">
      <div class="panel-body">
        <div class="col-md-12">
          <h3 class="animated fadeInLeft">type</h3>
          <p class="animated fadeInDown">
            เพิ่มประเภท myhis
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
              <h4>ADD type</h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
              <div class="col-md-6">
                <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');?>
                <?php echo form_open('administration/type/add',$attributes);?>
                <div class="form-group"><label class="col-sm-2 control-label text-right">name</label>
                <div class="col-sm-10"><input type="text" name="name_type" class="form-control" placeholder="Name type">
                <?php echo form_error('name_type', '<span class="text-danger">','</span>') ?>
              </div>
            </div>
            <div class="col-md-12 text-center" >
              <a href="<?php  echo base_url('administration/type');?>"  class="btn btn-danger  btn-md">ย้อนกลับ</a>
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
<!-- datatable -->
<div class="col-md-12 top-10 padding-0">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>Type Tables</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
          <table id="datatables-example" class="table" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>เครื่องมือ</th>
              </tr>
            </thead>
            <tbody>
               <?php
              if ($type->num_rows() > 0) {
              foreach ($type->result() as $row) {
              ?>
              <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->name; ?></td>
                <td  align="center" width="15%">
                  <a href="<?php echo base_url("Type_c/show_edit_type/$row->id") ?>" data-toggle="tooltip"  class="btn btn-warning" data-placement="bottom" title="แก้ไข"><i class="fa fa-edit"></i></a>
                  <a onclick="return confirm('are you sure  delete data ??')" href="<?php echo base_url("Type_c/delete_type/$row->id") ?>" data-toggle="tooltip" data-placement="bottom" title="ลบ" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
               <?php
              }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end: content -->
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