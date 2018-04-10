<!-- modal -->
<!-- The Modal -->
<div class="col-sm-12 col-md-12">
  <div class="modal fade" id="mymodaledit">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">แก้ไข MYHIS ของคุณ</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');?>
          <?php echo form_open('myhis/edit',$attributes);?>
          <div class="form-group">
            <label class="control-label col-sm-2">เรื่อง</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title" placeholder="ชื่อเรื่อง" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">หัวเรื่องย่อย</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="subtitle" placeholder="อธิบายสั้นๆ เกี่ยวกับเรื่องนี้" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">หมวด</label>
            <div class="col-sm-10">
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
              echo form_dropdown('category', $options,'',$attributes);
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
            <label class="control-label col-sm-2" for="email">สถานะ</label>
            <div class="col-sm-10">
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
              echo form_dropdown('type', $options,'',$attributes);
              ?>
            </div>
          </div>
          
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
          <button class="btn btn-primary" >บันทึก</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<!-- modal -->