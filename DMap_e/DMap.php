<? require "config.php"; ?>

<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DMap</title>
<script type="text/javascript" src="http://apis.daum.net/maps/maps.js?apikey=8fc4d54299186535a72f2f1d56205b075946884b"></script>
<script type="text/javascript" src="http://sparcs.org/~airlover/9eye.net/map/optNGMapv06.js"></script>
</head>
<body style="margin:0 0px 0px 0px">
<div id='mapPrint' style='display:none'></div>

<table width="100%" height="100%" cellspacing="0" cellpadding="0">
<tr><td>
<div id='daumMap'	style='position:absolute;top:0px;left:0px;width:100%;height:100%;' ></div> 
</td></tr>
</table>



<script type="text/javascript" language="javascript">
<!--

var map = new DMap("daumMap", {point:new DLatLng(37.48879895934866, 127.03130020103005), level:2}); 
var zc = new DZoomControl();
map.addControl(zc);
zc.setAlign("right");	



//var map = new NGMap(viewMode, coord, container1, container2, title);
//map.makemap();
-->
</script>
</body>
</html>
