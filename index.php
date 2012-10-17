<html>
<head>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.xcolor.js"></script>
<script type="text/javascript" src="jquery-miniColors/jquery.miniColors.js"></script>
<link type="text/css" rel="stylesheet" href="jquery-miniColors/jquery.miniColors.css" />
</head>
<body>
	<div id="colors" style="height: 100px; width: 100%" ></div><br>
<input id="colorPicker" class="color-picker miniColors" type="text"></input><br>
<script type="text/javascript">
$(document).ready( function(){
for(var i = 0; i < 8;i++){ 
	$('#colors').append('<div class="color-swatch" id="colorg-'+ i +'" style="background-color: #454545; width: 100px; height: 100px; float:left; margin: 10px;"></div>');
	$('#colors').append('<div class="color-swatch" id="color-'+ i +'" style="background-color: #454545; width: 100px; height: 100px; float:left; margin: 10px;"></div>');
	$('#colors').append('<div class="color-swatch" id="colorfinal-'+ i +'" style="background-color: #454545; width: 100px; height: 100px; float:left; margin: 10px;"></div>');
}
});
$('#colorPicker').miniColors({ change: function( hex, rgb){
	console.log( hex );

	var color = $.xcolor.analogous(hex, 8, 30);
	var gradient_colors = new Array();
	$.each(color, function(index, value){
		gradient_colors.push($.xcolor.lighten(value.getHex(), 2)); 
		console.log(index);
		$('#color-' + index).css('background-color', value.getHex()).html('Original');
		$('#colorg-' + index).css('background-color', gradient_colors[index].getHex()).html('Lightened');
		$('#colorfinal-' + index).css(	
			'background', '-webkit-gradient(linear, left top, left bottom, from('+gradient_colors[index].getHex()+ 
			'),to(' + value.getHex()+'))'
		).html('Gradient');
		//$('#colorfinal-' + index).css('background', '-webkit-gradient(linear, left top, left bottom, from('+gradient_colors[index].getHex()+'), to('+value.getHex()+');' );
//$('#colors').append('<div style="background-color:'+gradient_colors[index].getHex()+'; height: 100px; width: 100px; float: left; margin-right: 5px; color: #fff;">'+gradient_colors[index].getName()+'</div>');
	});
	}
 
});

</script>
</body>
</html>
