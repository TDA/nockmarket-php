
$(document).ready(function() {

$('.chat-widget').hide();

$('#join-chat').click(function() {
$('#join-chat').hide();
$('.chat-widget').show();

$.ajax({
	type:'GET',
	url:'chatuser.php',
	data:{'user': $('#sessname').text()}
	}).done(function(online_list){
		
		var online_users=online_list.split(',');
		
		for(var i=0;i<online_users.length;i++){	
		$('#users').append('<span class="label-success label">'+online_users[i]+'</span>');
		}
		});



$.ajax({
	type:'POST',
	url:'chatuser.php',
	data:{request:'msgs'}
}).done(function(msgs_list){
	var msg_array=msgs_list.split(',');
	for(var i=0;i<msg_array.length;i++)
	$('#textarea').append(msg_array[i]+'<br>');
	last_msg_recd=msg_array[i-1];
	}).done(function(){
			setInterval(refresh,3000)
			});
});


$('#send-chat').click(function(){
	
	var chat_msg=$('#input01').val();
	last_msg_recd=chat_msg;
	$('#input01').val('');
	
	$.ajax({
		type:'POST',
		url:'chatuser.php',
		data:{chat_msg:chat_msg,
				uname:$('#sessname').text()}
		})
});


});

function refresh(){
	
	$.ajax({
	type:'POST',
	url:'chatuser.php',
	data:{request:'lastmsg'}
}).done(function(msg){
	
	if(msg!=last_msg_recd){
	last_msg_recd=msg;
	$('#textarea').append(msg+'<br>');
	}
	});
	
	
	}

var last_msg_recd;