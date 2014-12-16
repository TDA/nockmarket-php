$(document).ready(function() {
$('#add-stock').click(function(e) {
$.ajax({type: 'POST'
, url: 'add-stock.php'
, data: {stock: $('#stock').val()
		,user:$('#sessname').text()}
}).done(function(raw_price) {
	var baked_price=raw_price.split(',');
	var name=baked_price[0]||'';
	var price=baked_price[1]||'';
	var change=baked_price[2]||'';
	
$('.stock-list').append('<tr><td>' + $('#stock').val()+ '</td><td>' + name + '</td><td>' + price + '</td><td>' + change + '</td></tr>');
});
});

$('#filtered').hide();
$('.add-filter').click(function(e) {
	 $.ajax({
		type: 'POST'
	, url: 'retstock.php'
	, data: {user: $('#sessname').text()}
	}).done(function(raw_price) {
	
	var baked_price=raw_price.split(',');
	var length=baked_price.length-3;
	$('.stock-list').hide();
	$('#filtered').show().html('');
	for(var i=0;i<length;i+=4){
		var code_name=baked_price[i]||'';
		var name=baked_price[i+1]||'';
		var price=baked_price[i+2]||'';
		var change=baked_price[i+3]||'';
	
		
		if(code_name.indexOf($('#filter').val())!=-1)
		$('#filtered').append('<tr><td>' + code_name + '</td><td>' + name + '</td><td>' + price + '</td><td>' + change + '</td></tr>');
	}
	
		});


});


});