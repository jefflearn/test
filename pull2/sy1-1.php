<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>哇哇哇哇</title>
</head>
<body>
<img src="sy1-pic.png">
<hr>
<?php
$x=$_GET["x"];
if($x>10)
{$y=$x*$x+0.5;
}
else if ($x<=0)
{$y=pow($x,2)+4*$n;
}
else
{$y=pow($x,3)-1;
}
echo "x=$x,y=$y";
?>
	
</body>
</html>
