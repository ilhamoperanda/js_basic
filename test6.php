<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Find Leap Year</title>
</head>
<body>
	<script type="text/javascript">
		year = window.prompt("Input a Year : ");
x = (year % 100 === 0) ? (year % 400 === 0) : (year % 4 === 0);
alert(x);
	</script>
</body>
</html>

