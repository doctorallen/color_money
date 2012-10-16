<html>
<head>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.xcolor.js"></script>
</head>
<body>
<input id="colorPicker" type="text"></input>
	<div id="colors"></div>
<script type="text/javascript">
	var color = $.xcolor.analogous("#0070c0", 30, 30);
	var gradient_colors = new Array();
	$.each(color, function(index, value){
		gradient_colors.push($.xcolor.lighten(value.getHex())); 
		$('#colors').append('<div style="background-color:'+gradient_colors[index].getHex()+'; height: 100px; width: 100px; float: left; margin-right: 5px; color: #fff;">'+gradient_colors[index].getName()+'</div>');
	});

</script>
</body>
</html>
