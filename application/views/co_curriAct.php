<?php $this->load->view("header");?>
				
				<div class="heading">
					<h3>Co-Curricular Achievements</h3>
					<h2>Gautam Buddha Public School</h2>
				</div>
			</div><!--Header Start-->
						
				<style type="text/css">
#left_content .ddsmoothmenu-v ul li ul li a{top:0; height:30px;}
</style>
<div id="left_content">	
	<!-- left menu -->
	<div id="smoothmenu2" class="ddsmoothmenu-v">
		<ul style="margin-left:44px;">
			<li class="menu_run" style="z-index:0!important;"><a href="<?php echo base_url();?>index.php/welcome/topperStudent"><img src="<?php echo base_url();?>assets/photos/icons/chiguru.png" alt="" /> Topper Students</a>
				
			</li>	
			<li class="menu_run" style="z-index:0!important;"><img src="<?php echo base_url();?>assets/photos/icons/activities.png" alt="" /> Activities
				<ul>
					<li><a href="<?php echo base_url();?>index.php/welcome/mornAssembly">Morning Assembly</a></li>
					
				</ul>
			</li>					
			<li class="menu_run" style="z-index:0!important;"><img src="<?php echo base_url();?>assets/photos/icons/achievements.png" alt="" /> Achievements
				<ul>
					
					<li><a href="<?php echo base_url();?>index.php/welcome/co_curriAct">Co-Curricular Achievements</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome/interSCom">Inter school competitions</a></li>
				</ul>
			</li>
			<li class="menu_run"><a href="<?php echo base_url();?>index.php/welcome/gallery"><img src="<?php echo base_url();?>assets/photos/icons/gallery.png" alt="" /> Photo Gallery</a></li>
			<li class="menu_run last"><a href="<?php echo base_url();?>index.php/welcome/contactUs"><img src="<?php echo base_url();?>assets/photos/icons/locate-us.png" alt="" style="margin-top:2px"/> Locate Us</a></li>
		</ul>
	</div>
	<div class="box">
		<script type="text/javascript">
			$(function() {
				blinkeffect('.aqar');
			})
			function blinkeffect(selector){
				$(selector).fadeOut(1000, function() {
					$(this).fadeIn(1000, function() {
						blinkeffect(this);
					});
				});
			}
		</script>
		<div class="aqar" style="width:212px;height:auto;margin:0 0 0 -10px;text-align:center;">
			<span class="aqtext" style="">
				<a href="<?php echo base_url();?>assets/downloads/enquiryapplicationform1.zip" target="_blank"><b>Admissions open for<br/> 2016-17</b></a>
			</span>
		</div>		
	</div>
	<div class="box">
		<div class="box_top">
			<h6>Bulletin Board</h6>
		</div>
		<!--   News Ticker  -->
		<div class="box_run">
			<iframe src="<?php echo base_url();?>index.php/welcome/newsticker" frameborder="0" width="100%">hghdgdsgd</iframe>
		</div>
		<div class="box_bottom">		
			<a href="<?php echo base_url();?>index.php/welcome/news">read more<img src="<?php echo base_url();?>assets/images/arrow.jpg"></a>						
		</div>					
	</div>				
</div>


<img src="<?php echo base_url();?>assets/Comingsoon.png" alt="" />






<?php $this->load->view("footer");?>