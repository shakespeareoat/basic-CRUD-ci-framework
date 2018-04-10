<?php include 'template/header.php'; ?>
<body id="mimin" class="dashboard topnav"> 
<?php include 'template/nav_header.php'; ?>
 <!-- start: Content -->
    <div id="content">
      <div class="panel box-shadow-none content-header">
        <div class="panel-body">
          <div class="col-md-12">
            <h3 class="animated fadeInLeft">MYHIS</h3>
            <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span>
          เรื่องที่คุณดูเเล้ว ชอบ สนใจ หรือ เรื่องที่คุณชอบอ่าน บันทึกกับเราสิ MYHIS</p>
          <ul class="nav navbar-nav">
            <li><a href="">เรื่องปัจจุบัน</a></li>
            <li><a href="">เรื่องที่เก็บไว้</a></li>
            <li><a href="">เรื่องที่จบเเล้ว</a></li>
            <li><a href="">อ่าน</a></li>
            <li><a href="">อ่านทีหลัง</a></li>
            <li><a href="">อ่านจบเเล้ว</a></li>
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">มุมมอง<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('administration/member'); ?>">บล๊อค</a></li>
                  <li><a href="<?php echo base_url('administration/member/add'); ?>">ตาราง</a></li>
                </ul>
              </li>

          </ul>
        </div>
      </div>
      </div>   <!-- panel -->
        <!-- myhis -->
      <div class="col-md-8 col-sm-4 col-xs-12 ">
          <!-- blog history insert -->
          <div class="col-sm-2 col-md-2 col-xs-6  animated zoomIn" id="bnt-tool1">
            <div class="thumbnail">
              <div class="caption">
                <button class="btn btn-circle btn-3d btn-md btn-primary btn-insert"   data-toggle="modal" data-target="#mymodal">
                <span class="fa fa-plus form-animate-text"></span>
                </button>
              </div>
            </div>
          </div>  
            <!-- blog history search -->
          <div class="col-sm-2 col-md-2 col-xs-6  animated zoomIn btn-tool">
            <div class="thumbnail">
              <div class="caption">
                <button class="btn btn-circle btn-3d btn-md btn-primary btn-insert"   data-toggle="modal" data-target="#mymodal-search">
                <span class="fa fa-search"></span>
                </button>
              </div>
            </div>
          </div>    
      </div> <!-- col12 -->
      <!-- blog history insert-->
       <!-- blog history -->
      <div class="col-md-12 col-sm-6 col-xs-12" >
        <div class="row">
          <div class="col-md-12">
            <h3 class="animated fadeInLeft">เรื่องที่คุณดู</h3>
          </div>
           <?php
              if ($myhis->num_rows() > 0) {
              foreach ($myhis->result() as $row) {
              ?>
          <div class="col-sm-6 col-md-3 col-xs-12 product-grid animated zoomIn">
           <a onclick="return confirm('are you sure  delete data ??')" href="<?php echo base_url("myhis/del/$row->id")?>" type="button" class="close icon-del" data-toggle="tooltip" data-placement="top" title="ลบ"><i class="fa fa-times" aria-hidden="true"></i></a>
              <a href="<?php echo base_url("myhis/edit/$row->id")?>" type="button" class="close icon-del edit-data" id="<?php echo $row->id; ?>" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <div class="thumbnail">
              <div class="caption" style="height: 140px">
                <h4><a href=""><?php echo $row->title; ?> </a> <span class="label label-danger">EP <?php echo $row->EP_P; ?></span>  <span class="label label-primary"><?php echo $row->typename; ?></span></h4>
                <p><?php echo $row->sub_title; ?></p>
                <small class="pull-right">
                <span class="rate fa-star fa"> <?php echo $row->shared; ?></span>
               
                </small>
                <span class="pull-rigth">Category: <?php echo $row->categoryname; ?></span>
              </div>
             <!--  <br> -->
              <p><a href="<?php echo base_url("myhis/ep/$row->id")?>" class="btn btn-primary hisbutton">อัพเดท</a></p>
            </div>
          </div>
      <?php
              }
              }
              ?> 
            </div>
          </div>
          <!-- ****************************** -->
</div>

<?php include 'template/modal/addmyhis.php'; ?>
<?php include 'template/footer.php'; ?>

</body>
</html>
