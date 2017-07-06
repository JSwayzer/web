<script language="javascript" type="text/javascript">
<!--
function showtime(){	
	setTimeout("showtime();",1000);
	callerdate.setTime(callerdate.getTime()+1000);
	var hh  = String(callerdate.getHours());
		var mm  = String(callerdate.getMinutes());
		var ss  = String(callerdate.getSeconds());
	document.clock.face.value =   
			((hh < 10) ? " " : "") + hh +
				  ((mm < 10) ? ":0" : ":") + mm +
				  ((ss < 10) ? ":0" : ":") + ss;
}
callerdate=new Date( 2017,07,06,09,02,34);
-->
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta HTTP-EQUIV="refresh" CONTENT="60">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body onload="showtime()" bgcolor=#26272a>
<div>
<form name="clock">
<input name="face" type="text"  value="" style="border: none; resize: none; text-align: center; font-family: Verdana; color: #EFEFEF; width: 85px;" />	  
</form>
</div>
</body>
</html>
