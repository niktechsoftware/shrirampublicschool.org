<?php $this->load->view("header");?>
				
				<div class="heading"><br>
				
				
					<h3>Medical Facility</h3>
					<hr>
				</div>
			</div><!--Header Start-->
						
				<style type="text/css">
#left_content .ddsmoothmenu-v ul li ul li a{top:0; height:30px;}
</style>
<?php $this->load->view("sidemenu");?>

<div id="middle_content_inner"><!--Middle Content Start -->		
				<div class="contents">
				<script type="text/javascript" src="<?php echo base_url();?>assets/js/validation_contactus.js"></script>
				<style>
					.con_tab{border:1px solid #D0BCD5; width:100%;}
					.con_tab tr td{padding:5px 10px 3px 10px;}
					.con_tab tr td .red{color: red; font-size: 13px;padding-right:4px; font-weight: bold;}
					.con_tab tr td .colon {font-size: 13px; font-weight: bold; width:3px;}
					.con_tab tr td .tbox{border:1px solid #884990;}
					.con_tab tr td .tbox:hover{border: 1px solid #F68C1F;}
				</style>
								
						<table class="con_tab">
							<tr>
								<td width="100%" style="border-right:1px solid #D0BCD5;">									 
								<p>
								 <img src="<?php echo base_url();?>assets/images/playground.jpg" alt="" style="float: left;padding-right: 20px;">
								 GameTime has been a pioneer in the commercial playground equipment industry. From the first commercially available inclusive playgrounds to the advent of custom, themed playgrounds, GameTime has a rich heritage of innovative design and engineering that moves play forward with top-of-the-line playgrounds. All of our playgrounds, activities, site furnishings and amenities are constructed from the highest quality materials and are backed by the industry’s best warranty and customer service. Together, we help parks, schools, early learning centers and other organizations enrich childhood through play.
								</p>  
								</td>
						</tr>
					</table>
												
				</div>							
			</div>


<?php $this->load->view("footer");?>