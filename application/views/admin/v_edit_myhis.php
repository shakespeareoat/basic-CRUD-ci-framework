<?php include 'template/header.php'; ?>
<body id="mimin" class="dashboard topnav">
  <?php include 'template/nav_header.php'; ?>
  <!-- start -->
  <div id="content">
    <div class="panel box-shadow-none content-header">
      <div class="panel-body">
        <div class="col-md-12">
          <h3 class="animated fadeInLeft">MYHIS</h3>
          <p class="animated fadeInDown">
            แก้ไข myhis
          </p>
        </div>
      </div>
    </div>
    <!-- form -->
      <div class="col-md-12 top-10 padding-0">
        <div class="col-md-6">
          <div class="panel form-element-padding">
            <div class="panel-heading">
              <h4>EDIT category</h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
              <div class="col-md-6">
                  <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');?>
          <?php echo form_open('myhis/edit/'.$myhis->id.'',$attributes);?>
          <?php if (!empty($myhis)): ?>
                <?php echo form_hidden('id',$myhis->id); ?>
                <?php else: ?>
                <?php endif ?>
          <div class="form-group">
            <label class="control-label col-sm-3">เรื่อง</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="title" name="title" placeholder="ชื่อเรื่อง" value="<?php echo $myhis->title ?>" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">เรื่องย่อย</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="subtitle" placeholder="อธิบายสั้นๆ เกี่ยวกับเรื่องนี้" value="<?php echo $myhis->sub_title ?>" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">หมวด</label>
            <div class="col-sm-9">
              <?php
              $options1 = array(''=> "หมวด");
              $options2 = array();
              $options=$options1+$options2;
              if($category->num_rows() > 0) {
              foreach($category->result() as $row) {
              $options[$row->id] = $row->name;
              }
              }
              ?>
              <?php
              $attributes = array('class' => 'form-control', 'id' => 'category' ,'required'=>'required');
              echo form_dropdown('category', $options,"$myhis->category_id",$attributes);
              ?>
            </div>
          </div>
<!--           <div class="form-group">
            <label class="control-label col-sm-2" for="email">tag</label>
            <div class="col-sm-10">
              <select class="form-control select2-B" multiple="multiple">
                <option value="">ACTION</option>
                <option value="">DRAMA</option>
                <option value="">COMMEDY</option>
                <option value="">FANTASY</option>
                <option value="">DETECTIVE</option>
                <option value="">MYTERRY</option>
              </select>
            </div>
          </div> -->
          <div class="form-group">
            <label class="control-label col-sm-3" for="email">สถานะ</label>
            <div class="col-sm-9">
                 <?php
              $options1 = array(''=> "สถานะ");
              $options2 = array();
              $options=$options1+$options2;
              if($type->num_rows() > 0) {
              foreach($type->result() as $row) {
              $options[$row->id] = $row->name;
              }
              }
              ?>
              <?php
              $attributes = array('class' => 'form-control', 'id' => 'type' ,'required'=>'required');
              echo form_dropdown('type', $options,"$myhis->type_id",$attributes);
              ?>
            </div>

            </div>
             <div class="col-md-12 text-center" >
              <a href="<?php  echo base_url('administration/home');?>"  class="btn btn-danger  btn-md">ย้อนกลับ</a>
              <button  class="btn btn-primary  btn-md">บันทึก</button>
          </div>
        </div>
        
        <?php echo form_close(); ?>
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