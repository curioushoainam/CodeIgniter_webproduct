<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/head', '', FALSE); ?>
</head>
<body>
	<!-- Left side content -->
	<div id="left_content">
		<?php $this->load->view('admin/left', '', FALSE); ?>
	</div>

	
	
	<!-- Right side -->
	<div id="rightSide">
		<div class="topNav">
			<?php $this->load->view('admin/header', '', FALSE); ?>
		</div>
		
		<!-- Contents -->
		<?php $this->load->view($temp, $this->data, FALSE); ?>
		<!-- End of Contents -->
	
		<?php $this->load->view('admin/footer', '', FALSE); ?>	
		
	</div>
	
</body>
</html>