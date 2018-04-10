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
            อัปเดท EP/P myhis
          </p>
        </div>
      </div>
    </div>
    <!-- form -->
    <div class="col-md-12 top-10 padding-0">
      <div class="col-md-6">
        <div class="panel form-element-padding">
          <div class="panel-heading">
            <h4>Update Myhis</h4>
          </div>
          <div class="panel-body" style="padding-bottom:30px;">
            <div class="col-md-6">
              <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');?>
              <?php echo form_open('myhis/ep/'.$myhis->id.'',$attributes);?>
              <?php if (!empty($myhis)): ?>
              <?php echo form_hidden('id',$myhis->id); ?>
              <?php else: ?>
              <?php endif ?>
              <div class="form-group">
                <label class="control-label col-sm-3" >EP/P</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control"  id="sum-update" value="<?php echo $myhis->EP_P ?>" name="ep_p">
                </div>
                <div class="col-sm-3">
                  <button type="button" class="btn ripple btn-3d btn-success bnt-sum-epp animated zoomIn" onclick="increase()">
                  <div>
                    <span>+</span>
                  </div>
                  </button>
                </div>
                
                <div class="col-sm-3">
                  <button type="button" class="btn ripple btn-3d btn-danger bnt-sum-epp animated zoomIn" onclick="decrease()">
                  <div>
                    <span>-</span>
                  </div>
                  </button>
                </div>
              </div>
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
                  <div class="form-group">
                    <label class="control-label col-sm-3">บันทึกย่อ</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="note" rows="10"> <?php echo $myhis->note ?></textarea>
                    </div>
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
          </script>
    </body>
  </html>