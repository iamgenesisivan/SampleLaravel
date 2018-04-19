$(document).ready(function(){
		function unseen_notification(view = ''){
			$.ajax({
				method: 'GET',
				url: "/displayNotification",
				processData : false,
		     	contentType : false,
		     	headers:{'X-CSRF-Token': $('input[name="_token"]').val()},
		     	data: {view:view},
		     	dataType: 'JSON',
		     	success:function(data){
		     			var notifAdmin = 0;
		     			var notifSU = 0;
		     			for($i=0;$i<data.notification_info.length;$i++){
		     				setTimeout(function(){
							    console.log(notifAdmin++);
		     						$('.icon_counter_red_s_u')
									.css({ opacity: 0 })
									.text(notifAdmin)             
									.css({ top: '-10px' })
									.animate({ top: '-2px', opacity: 1 }, 500);
							 }, 1000); 
		     				// console.log(data.notification_info[$i].user_type);
		     				// if(data.notification_info[$i].user_type == "Standard User"){
		     						
		     				// }
		     				// else if(data.notification_info[$i].user_type == "Admin" || data.notification_info[$i].user_type == "Super Admin")
		     				// {
		     		// 				console.log(notifAdmin++);
		     		// 				$('.icon_counter_red_s_u')
									// .css({ opacity: 0 })
									// .text(notifAdmin)             
									// .css({ top: '-10px' })
									// .animate({ top: '-2px', opacity: 1 }, 500);
		     				// }
		     			}
				}
			 	
			});
		}		
     unseen_notification();

	$(document).on('click', '.dropdown-toggle', function(view = ''){
		function seen(){
			$('.icon_counter_red').text('');
			$.ajax({
				method: 'GET',
				url: "/admin/readNotification",
				processData : false,
		     	contentType : false,
		     	headers:{'X-CSRF-Token': $('input[name="_token"]').val()},
		     	data: {view:view},
		     	success:function(data){
		     		console.log(data);
		     	}
			});	
		}
		seen();
		
		
	});
});	