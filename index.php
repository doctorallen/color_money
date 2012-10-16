<html>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.xcolor.js"></script>
<div id="color1" style="width: 50px; height:50px;"></div>
<div id="color1g" style="width: 50px; height:50px;"></div>
<div id="color2" style="width: 50px; height:50px;"></div>
<div id="color2g" style="width: 50px; height:50px;"></div>
<div id="color3" style="width: 50px; height:50px;"></div>
<div id="color3g" style="width: 50px; height:50px;"></div>
<div id="color4" style="width: 50px; height:50px;"></div>
<div id="color4g" style="width: 50px; height:50px;"></div>
<input type="text" name="color" id="color">
<script type="text/javascript">
	var color = $.xcolor.analogous("#0070c0");
	$('#color1').css("background-color", color[0].getHex()).html(color[0].getHex());
	$('#color2').css("background-color", color[1].getHex()).html(color[1].getHex());
	$('#color3').css("background-color", color[2].getHex()).html(color[2].getHex());
	$('#color4').css("background-color", color[3].getHex()).html(color[3].getHex());
	var gradient_colors = new Array();
	$.each(color, function(index, value){
		console.log(value);
		gradient_colors.push($.xcolor.lighten(value.getHex())); 
	});

	$('#color1g').css("background-color", gradient_colors[0]).html(gradient_colors[0]);
	$('#color2g').css("background-color", gradient_colors[1]).html(gradient_colors[1]);
	$('#color3g').css("background-color", gradient_colors[2]).html(gradient_colors[2]);
	$('#color4g').css("background-color", gradient_colors[3]).html(gradient_colors[3]);
	console.log(color);
</script>
</html>
