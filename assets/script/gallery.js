$(document).ready(function(e){ 
	function loadData(rppg,page,searchkey){ 
		$('#gallerytable').html('<div id="loader"><img src="images/loader.gif" alt="Please wait..." /><span>Loading...</span></div>');
		$.ajax({
			type: "POST",
			url: "ajax/ajax-gallery.php",
			data: "perpagelmt="+rppg+"&page="+page+"&search_param="+searchkey,
			success: function(msg)
			{ 
				$("#gallerytable").html(msg);				
			}
		});
	}	
	if (typeof localStorage.getItem('lmtperpage') !== 'undefined' && localStorage.getItem('lmtperpage') !== null){
		var rppg = localStorage.getItem('lmtperpage');
		$('#show_page').val(rppg);
	}else{var rppg = $("#show_page").val();}	
	
	if (typeof localStorage.getItem('current_page') !== 'undefined' && localStorage.getItem('current_page') !== null){
		var cp = localStorage.getItem('current_page');
	}else{var cp = 1;}
		
	if (typeof localStorage.getItem('search_parr') !== 'undefined' && localStorage.getItem('search_parr') !== null){
		var sp = localStorage.getItem('search_parr');
	}else{var sp = '';}
	
	localStorage.clear();
	loadData(rppg,cp,sp);		
	
	
	//------------ Click on pagination -------------- 
	$('.pagination li.active').live('click',function(){
		$("#table").html('<div id="loader"><img style="width:60px;" src="images/loader.gif" alt="Please wait..." /><span>Loading...</span></div>');
		var rppg = $("#show_page").val();
		var page = $(this).attr('p');
		//var search = $(this).attr('search');
		var search = '';
		loadData(rppg,page,search);
	});
	
	//------------- Per page records ------------------	
	$("#show_page").live('change',function(e){
		var rppg = $(this).val();
		$('#show_page').val(rppg);
		var page = $('.act1').attr('p');
		//var search = $('.act1').attr('search');
		var search = '';
		if (typeof page !== 'undefined' && page !== null){loadData(rppg,page,search);}
	});
});