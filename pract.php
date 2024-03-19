<head>
    <meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pract.php" method="GET" class="form-control bg-white-50">
	<input type="number" Placeholder="Enter value 1" name="num1" required class="w-100 mt-1">
	<input type="number" Placeholder="Enter value 2" name="num2" required class="w-100 mt-1">
	<input type="submit" value="+" name="add" class="mt-1 btn btn-danger text-black-50">
	<input type="submit" value="-" name="sub" class="mt-1 btn btn-primary text-black-50">
	<input type="submit" value="/" name="div"class="mt-1 btn btn-success text-black-50">
	<input type="submit" value="*" name="mul"class="mt-1 btn btn-info text-black-50">
	<input type="submit" value="**" name="sqr"class="mt-1 btn btn-warning text-black-50">
	</form>   
</body>

	<?php
	if(isset($_GET['add']))
	{
	  $num1=$_GET['num1'];
	  $num2=$_GET['num2'];
	  $add=$num1+$num2;
	  echo $add;
	}
	 else if(isset($_GET['sub']))
	{
	  $num1=$_GET['num1'];
	  $num2=$_GET['num2'];
	  $sub=$num1-$num2;
	  echo $sub;
	}
	 else if(isset($_GET['div']))
	{
	  $num1=$_GET['num1'];
	  $num2=$_GET['num2'];
	  $div=$num1/$num2;
	  echo $div;
	}
	else if(isset($_GET['mul']))
	{
	  $num1=$_GET['num1'];
	  $num2=$_GET['num2'];
	  $mul=$num1*$num2;
	  echo $mul;
	}
	  else if (isset($_GET['sqr']))
	{
	  $num1=$_GET['num1'];
	  $num2=$_GET['num2'];
	  $sqr=$num1+$num2;
	  echo $sqr;
	}
	?>