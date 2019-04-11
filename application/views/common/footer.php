 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
<script src="<?=base_url('assets/js/jquery2.0.3.min.js');?>"></script>

<script src="<?=base_url('assets/js/bootstrap.js');?>"></script>
<script src="<?=base_url('assets/js/jquery.dcjqaccordion.2.7.js');?>"></script>
<script src="<?=base_url('assets/js/scripts.js');?>"></script>
<script src="<?=base_url('assets/js/jquery.slimscroll.js');?>"></script>
<script src="<?=base_url('assets/js/jquery.nicescroll.js');?>"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?=base_url('assets/js/jquery.scrollTo.js');?>"></script>
<?php 
	if (isset($data['hasVmap'])) {
	$data=array('jquery.vmap.js','jquery.vmap.world.js','jquery.vmap.sampledata.js','jquery.vmap.europe.js','jquery.vmap.asia.js','jquery.vmap.australia.js');

		for ($i=0; $i <count($data); $i++) { 
			echo "<script src=".base_url("assets/js/".$data[$i])."></script>";		
		}
	}	
	
?>