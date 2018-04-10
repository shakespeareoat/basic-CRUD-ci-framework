<?php if ($success_add = $this->session->flashdata('success_add')): ?>
<div class="col-md-12 top-20">
	<div class="pull-right">
		<div class="alert col-md-12 col-sm-12 alert-icon alert-success alert-dismissible fade in animated fadeInRight" role="alert">
			<div class="col-md-2 col-sm-2 icon-wrapper text-center">
				<span class="fa fa-check fa-2x"></span></div>
				<div class="col-md-10 col-sm-10">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<p><strong>Success!</strong> <?php echo $success_add ?></p>
				</div>
			</div>
		</div>
	</div>
	<?php endif ?>
	<?php if ($success_del = $this->session->flashdata('success_del')): ?>
	<div class="col-md-12 top-20">
		<div class="pull-right">
			<div class="alert col-md-12 col-sm-12 alert-icon alert-danger alert-dismissible fade in animated fadeInRight" role="alert">
				<div class="col-md-2 col-sm-2 icon-wrapper text-center">
					<span class="fa fa-flash fa-2x"></span></div>
					<div class="col-md-10 col-sm-10">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
						<p><strong>Danger!</strong> <?php echo $success_del ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php endif ?>