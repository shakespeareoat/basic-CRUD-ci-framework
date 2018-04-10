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
<!-- datatable -->
<div class="col-md-12 top-10 padding-0">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h4>MEMBER <a href="<?php echo base_url('administration/member/add'); ?>" class="btn btn-primary  btn-md">เพิ่ม</a></h4> 
            </div>
      <div class="panel-body">
        <div class="responsive-table">
          <table id="datatables-example" class="table" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>user</th>
                <th>name</th>
                <th>status</th>
                <th>date create</th>
                <th>เครื่องมือ</th>
              </tr>
            </thead>
            <tbody>
             <?php
              if ($member->num_rows() > 0) {
              foreach ($member->result() as $row) {
              ?>
              <tr>
                <td><?php echo $row->member_email; ?> </td>
                <td><?php echo $row->member_name; ?> </td>
                <td><?php echo $row->member_status; ?> </td>
                <td><?php echo $row->member_create; ?> </td>
                <td  align="center" width="15%">
                  <a onclick="return confirm('are you sure  delete data ??')" href="<?php echo base_url("Member_c/delete_member/$row->member_id") ?>" data-toggle="tooltip" data-placement="bottom" title="ลบ" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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