<?php include 'template/header.php'; ?>
<body id="mimin" class="dashboard topnav">
  <?php include 'template/nav_header.php'; ?>
  <!-- start -->
  <div id="content">
    <div class="panel box-shadow-none content-header">
      <div class="panel-body">
        <div class="col-md-12">
          <h3 class="animated fadeInLeft">MEMBER</h3>
          <p class="animated fadeInDown">
            MEMBER MYHIS
          </p>
        </div>
      </div>
    </div>
    <!-- form -->
    <div class="form">
      <div class="col-md-12 top-10 padding-0">
        <div class="col-md-6">
          <div class="panel form-element-padding">
            <div class="panel-heading">
              <h4>ADD Member</h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
              <div class="col-md-6">
                <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');?>
                <?php echo form_open('administration/member/add',$attributes);?>
                <div class="form-group"><label class="col-sm-2 control-label text-right">user</label>
                <div class="col-sm-10"><input type="text" name="user" class="form-control" value="<?php echo set_value('user'); ?>" placeholder="user">
                <?php echo form_error('user', '<span class="text-danger">','</span>') ?>
              </div>
            </div>
             <div class="form-group"><label class="col-sm-2 control-label text-right">pass</label>
                <div class="col-sm-10"><input type="password" name="pass"  class="form-control" placeholder="password">
                <?php echo form_error('pass', '<span class="text-danger">','</span>') ?>
              </div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label text-right">name</label>
                <div class="col-sm-10"><input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" placeholder="name">
                <?php echo form_error('name', '<span class="text-danger">','</span>') ?>
              </div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label text-right">status</label>
                <div class="col-sm-10">
                  <select name="status" id="" class="form-control">
                    <option value="">--เลือกสถานะ--</option>
                     <option value="user">USER</option>
                    <option value="ADMIN">ADMIN</option>
                  </select>
                <?php echo form_error('status', '<span class="text-danger">','</span>') ?>
              </div>
            </div>
            <div class="col-md-12 text-center" >
              <a href="<?php  echo base_url('administration/member');?>"  class="btn btn-danger  btn-md">ย้อนกลับ</a>
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

<?php include 'template/footer.php'; ?>
</body>
</html>