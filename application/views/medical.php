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
								 <img src="<?php echo base_url();?>assets/images/medical.jpg" alt="" style="float: left;padding-right: 20px;">
								The school shows its utmost concern for its students by providing the best of medical facilities. <br>

Merry City School has standing arrangements for emergency medical aid with reputed hospitals in the vicinity. Our students and faculty form the backbone of the school and to ensure their sound health conditions, medical checkups are conducted from time to time. All the students are medically insured to cover all the ailments according to the general insurance norms.
								</p>  
								</td>
						</tr>
					</table>
												
				</div>							
			</div>


<?php $this->load->view("footer");?>