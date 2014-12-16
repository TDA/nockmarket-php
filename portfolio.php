<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Nockmarket</title>
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="docs.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap-button.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/bootstrap-transition.js"></script>
<script type="text/javascript" src="js/bootstrap-tab.js"></script>
<script type="text/javascript" src="js/portfolio.js"></script>
<script src="js/trade.js"></script>
<script src="js/account.js"></script>
<script src="js/chat.js"></script>


<style>
.trade-button {
width: 24px;
}
</style>

</head>
<body>
<div class="container">
<div class="row">

<div class="offset2 span8">
<?php
echo "Welcome <span id='sessname'>".$_SESSION['uname']."</span>";
?>


<h3>Welcome to the Nockmarket</h3>
<p>Here you can manage your portfolio and view live prices.</p>
<div class="tabbable" style="margin-bottom: 18px;">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Portfolio</a></li>
    <li><a href="#tab2" data-toggle="tab">Nockmarket</a></li>
    <li><a href="#tab3" data-toggle="tab" id="chat-tab">Chat</a></li>
    <li><a href="#tab4" data-toggle="tab">My Account</a></li>
  </ul>
  <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
    <div class="tab-pane active" id="tab1">

      <div class="well form-search">
        <input id="stock" type="text" class="input-medium search-query" name="stock">
        <button id="add-stock" class="btn">Add Stock</button>
	<input id="filter" type="text" class="input-medium search-query" name="filter">
	<button class="add-filter btn">Filter</button>
      </div>

      <table class="table table-striped table-bordered table-condensed">
        <thead>
          <tr>
            <th>Stock Code</th>
            <th>Name</th>
            <th>Last Price</th>
            <th>Change</th>
          </tr>
        </thead>
        <tbody class="stock-list">
		
		
        </tbody>
        <tbody id="filtered"></tbody>
      </table>
    </div>
    <div class="tab-pane" id="tab2">
      <table class="table table-bordered table-condensed">
      <thead>
        <tr>
            <th>Stock</th>
            <th>BID5</th>
            <th>BID4</th>
            <th>BID3</th>
            <th>BID2</th>
            <th>BID1</th>
            <th>Trade</th>
            <th>ASK1</th>
            <th>ASK2</th>
            <th>ASK3</th>
            <th>ASK4</th>
            <th>ASK5</th>
        </tr>
        <tr>
            
        </tr>
    </thead>
    <tbody class="stock-data">
    
		
	
    </tbody>
    </table>

    </div>

	<div class="tab-pane" id="tab3">
	<p><div class="input-xlarge span8 chat-widget" id="textarea" style="overflow:scroll;height:300px;width:95%;"></div></p>
	<p><input type="text" class="input-xlarge span8 chat-widget" id="input01" placeholder="Enter your message"></p>
	<p><button type="submit" class="btn btn-primary chat-widget" id="send-chat">Send</button></p>
	<p><button class="btn btn-info btn-large btn-primary" type="button" id="join-chat">Join Chat</button></p>
	<p><span class="label label-inverse chat-widget" id="online">Online:</span><div id="users"></div></p>
	</div>

	<div class="tab-pane" id="tab4">
	<p><input type="text" class="input-xlarge span8" id="email" value="<?php echo $_SESSION['email'];?>"></p>
	<p><button type="submit" class="btn btn-primary" id="update-account">Update</button></p>
	</div>

	<div class='alert alert-success' id='confirm'>
	Email updated!
	</div>
  </div>
</div>

</div>
</div>
</div>



<a href="logout.php?uname=<?php echo $_SESSION['uname']?>" id="logout">logout</a>

<script>
$(document).ready(function(e) {
	
	var numexchg;
	var exch;
    $.ajax({
		type: 'POST'
	, url: 'retstock.php'
	, data: {user: $('#sessname').text()}
	}).done(function(raw_price) {
	
	var baked_price=raw_price.split(',');
	var length=baked_price.length-3;
	numexchg=Math.ceil(length/4);
	for(var i=0;i<length;i+=4){
		var code_name=baked_price[i]||'';
		var name=baked_price[i+1]||'';
		var price=baked_price[i+2]||'';
		var change=baked_price[i+3]||'';
	
		//alert(numexchg);
		if(code_name&&name&&price&&change)
		$('.stock-list').append('<tr><td>' + code_name + '</td><td>' + name + '</td><td>' + price + '</td><td>' + change + '</td></tr>');
	}
		for(var j=1;j<=numexchg;j++){	
	$('.stock-data').append('<tr>');
	$('.stock-data').append('<td> <span class="badge badge-inverse">NockPHP'+j+'</span></td>');
		for(var i=5;i>0;i--)
			$('.stock-data').append('<td><a class="btn btn-primary btn-mini trade-button"><strong><div id="n'+j+'b'+i+'p">0</div></strong><div id="n'+j+'b'+i+'v">0</div></a></td>');
	
	$('.stock-data').append('<td><a class="btn btn-success btn-mini trade-button"><strong><div id="n'+j+'tp">0</div></strong><div id="n'+j+'tv">0</div></a></td>');
	
	for(var k=1;k<=5;k++)
	$('.stock-data').append('<td><a class="btn btn-danger btn-mini trade-button"><strong><div id="n'+j+'a'+k+'p">0</div></strong><div id="n'+j+'a'+k+'v">0</div></a></td>');
	$('.stock-data').append('</tr>');
	
	
	}
	});
	
	
	setInterval(function(){$.ajax({
		type: 'POST'
		, url: 'retexchg.php'
		,data:{'user':$('#sessname').text()}
		}).done(function(datum) {
			arr=datum.split(',');
			price=arr[0];
			volume=arr[1];
			pos=arr[2];
			
			$('#'+pos+'p').html(price);
			$('#'+pos+'v').html(volume);
			//exch.push(price);
			//exch.push(volume);
			
			//for(var m=0;m<exch.length;m++)
			if(price+volume>Math.floor(Math.random()*200)){
			var x=pos[1];
			$('#n'+x+'tp').html(price);
			$('#n'+x+'tv').html(volume);
				
			}
		
		});
	},200);
	
	
	
});


</script>
</body>
</html>