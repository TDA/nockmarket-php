$(document).ready(function() {
$('#confirm').hide();
$('#update-account').click(function() {
alert($('#sessname').text());
	
	$.ajax({
	type: 'GET',
	url: 'update.php',
	data:{email: $('#email').val(),
	uname:$('#sessname').text()}
	}).done(function(data){
		$('#confirm').show().hide(3000);
		});
		
});
});


