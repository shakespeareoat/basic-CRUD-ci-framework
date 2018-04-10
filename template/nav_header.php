   <!-- start: nav -->
    <nav class="navbar navbar-default header navbar-fixed-top">
      <div class="col-md-12 nav-wrapper">
        <div class="navbar-header" style="width:100%;">
          <a href="<?php echo base_url('administration/home') ?>" class="navbar-brand">
            <b>MYHIS</b>
          </a>
          <ul class="nav navbar-nav search-nav">
            <li>
              <!-- <div class="search">
                <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                <div class="form-group form-animate-text">
                  <input type="text" class="form-text" required>
                  <span class="bar"></span>
                  <label class="label-search">ค้นหาสิ่งที่คุณบันทึกใน MYHIS</label>
                </div>
              </div>  </li>-->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">จัดการสมาชิก <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('administration/member'); ?>">สมาชิก</a></li>
                  <li><a href="<?php echo base_url('administration/member/add'); ?>">เพิ่มสมาชิก</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">จัดการประเภท<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('administration/type') ?>"><span class="fa fa-plus"></span> type</a></li>
                  <li><a href="<?php echo base_url('administration/category') ?>"><span class="fa fa-plus"></span> category</a></li>
                  <li><a href="<?php echo base_url('administration/tag') ?>"><span class="fa fa-plus"></span> tag</a></li>
                </ul>
              </li>
           
          </ul>
          <ul class="nav navbar-nav navbar-right user-nav">
            <li class="user-name"><span><?php echo $this->session->userdata('member_name') ?></span></li>
            <li class="dropdown avatar-dropdown">
              <img src="<?php echo base_url('assets/img/avatar.jpg');?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
              <ul class="dropdown-menu user-dropdown">
                <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                <!--  <li><a href="<?php echo base_url('administration/type') ?>"><span class="fa fa-plus"></span> add type</a></li>
                  <li><a href="#"><span class="fa fa-plus"></span> add category</a></li>
                   <li><a href="#"><span class="fa fa-plus"></span> add tag</a></li> -->
                <li role="separator" class="divider"></li>
                 <li><a href="login.html"><span class="fa fa-sign-out "></span> sign-out</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <?php include 'template/alert.php'; ?>

    </nav>
    <!-- end: nav -->
