<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>A Program to find 1st January is being a Sunday between 2014 and 2050.</title>
</head>
<body>
<script type="text/javascript">
	console.log('--------------------');
for (var year = 2014; year <= 2050; year++)
    {
    var d = new Date(year, 0, 1);
    if ( d.getDay() === 0 )
        console.log("1st January is being a Sunday  "+year);
    }
console.log('--------------------');
</script>
</body>
</html>

