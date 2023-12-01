<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: pink;">
	
    <center>
		
	<h1 style="background-color:DodgerBlue;">Sample Calculator</h1><br>
 <form action="Test.php" method="post">
<b>First Number</b>:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="n1" value=""><br><br>
<b>Second Number</b>:&nbsp&nbsp&nbsp&nbsp<input name="n2" value=""><br><br>
<input type="submit" name="sub" value="+">&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="sub" value="-"><br><br>
<input type="submit" name="sub" value="x">&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="sub" value="/"><br><br>
<button onclick="document.getElementById('myInput').value = ''">Clear</button>
<br>
<br>
</center> 
</form>
<center>
<?php
if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$ans=$num1+$num2;
	else if($oprnd=="-")
		$ans=$num1-$num2;
	else if($oprnd=="x")
		$ans=$num1*$num2;
	else if($oprnd=="/")
		$ans=$num1/$num2;
       echo "Result: ", $ans;
}?>
</center>
</body>
</html>