<!-- modal -->
<!-- start: Mobile -->
<div id="mimin-mobile" class="reverse">
  <div class="mimin-mobile-menu-list">
    <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
      <ul class="nav nav-list">
        <li><a href="credits.html">เมนู</a></li>
        <li><a href="credits.html">เมนู</a></li>
        <li><a href="credits.html">เมนู</a></li>
        <li><a href="credits.html">Credits</a></li>
        <li><a href="credits.html">Credits</a></li>
      </ul>
    </div>
  </div>
</div>
<button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
<span class="fa fa-bars"></span>
</button>
<!-- end: Mobile -->
  <!-- start: Javascript -->
  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.ui.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <!-- plugins -->
  <script src="<?php echo base_url('assets/js/plugins/holder.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/moment.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/jquery.nicescroll.js')?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/select2.full.min.js')?>"></script>
  <!-- custom -->
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>

  <script>
      window.setTimeout(function() {
      $(".alert").fadeTo(200, 0).slideUp(500, function(){
         $(this).remove(); 
     });
   }, 3000);
</script> 
  <script type="text/javascript">
  $(document).ready(function(){
  $(".select2-B").select2({
  tags: true,
  width: '100%'
  });
  });
  </script> <!-- 
  <script type="text/javascript">
  function increase(){
  var textBox = document.getElementById("sum-update");
  textBox.value++;
  console.log(textBox.value);
  }
  function decrease(){
  var textBox = document.getElementById("sum-update");
  textBox.value--;
  console.log(textBox.value);
  }
  </script> -->
  <!-- end: Javascript -->