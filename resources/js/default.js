$(function(){

	$('#cod').keyup(function(){
		var url = $('#frmpro').attr('action');
		var datos = $(this).serialize();
		$.post(url, datos, function(o){
			$('#resultado').html(o.text);
		},'json');
		return false;
		});

	$('#cod').keyup(function(){
		var url = $('#frmfor').attr('action');
		var datos = $(this).serialize();
		$.post(url, datos, function(o){
			$('#resultado').html(o.text);
		},'json');
		return false;
		});

	$('#frmeditpro').submit(function(){
		var url = $(this).attr('action');
		var datos = $(this).serialize();
		$.post(url, datos, function(o){
			/*$('#resultado').html(o.text);*/
			
		 	$.notify({
		 		icon: "ti-user",
		 		message: o.text
		 	},{
		 		type: o.text,
		 		timer: 500
		 	})
		    
		},'json');
		return false;
		});
	
	$('#frmeditfor').submit(function(){
		var url = $(this).attr('action');
		var datos = $(this).serialize();
		$.post(url, datos, function(o){
			/*$('#resultado').html(o.text);*/
			
		 	$.notify({
		 		icon: "ti-user",
		 		message: o.text
		 	},{
		 		type: o.text,
		 		timer: 500
		 	})
		    
		},'json');
		return false;
		});
	});