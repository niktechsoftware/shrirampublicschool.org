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
								 <img src="<?php echo base_url();?>assets/images/transport.jpg" alt="" style="float: left;padding-right: 20px;">
								Shri Ram Public School provides multiple transportation options for students. We provide transportation for students and staff in and around Erode and surrounding areas. Depending on where our students reside, we recommend specific bus routes to provide the best school transportation options.
								</p>  
								<p>
								<li>All our school buses satisfy the school transportation rules created by the Government of U.P.</li>
								<li>We have a Transport Coordinator that can be reached by phone at all times during student travel times to and from school at (+91 9554351215)</li>
								<li>We have an attendant escort on the bus at all times.</li>
								<li>Children should be ready and waiting at their stops 5 minutes before pick up time.</li>
								<li>Each bus is equipped with a phone. Parents are encouraged to contact the Transport Coordinator at (+91 9554351215) to</li>
								<li>Inform the attendant on the bus if your child is not attending school.</li>
								<li>Any changes in pick up/drop off venue should be cleared with the office (in writing). The office will then inform the bus driver of the change.</li>
								<li>The buses cannot provide door-to-door service, as this increases the time spent commuting to and from school.</li>
								</p>
								</td>
						</tr>
					</table>
												
				</div>							
			</div>


<?php $this->load->view("footer");?>