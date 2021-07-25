<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Simple caluclator</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Simple Calculator Using PHP</h1>
<form action="index.php" method="post">
<table>
<tr><td>Enter First Number: </td><td><input type="text" name="first" required
autocomplete="off"/></td></tr>
<tr><td>Enter Second Number: </td><td><input type="text" name="second"
required
autocomplete="off"/></td></tr>
<tr><td>Select Operator: </td><td>
<select name="op">
<option>Select Operation</option>
<option value="+">Addition</option>
<option value="-">Subtraction</option>
<option value="*">Multiplication</option>
<option value="/">Division</option>
<option value="%">Remainder</option>
</select>
</td></tr>
<tr><td colspan="2"><input type="submit" name="pop" value="Perform
Operation"/></td></tr>
</table>
</form>
<?php
if(isset($_POST['pop'])) {
echo "<h1>Result is: </h1>";
$num1 = $_POST["first"];
$num2 = $_POST["second"];
$op = $_POST["op"];
$result = 0;
switch($op) {
case '+' : $result = $num1 + $num2;
echo "<h1>Addition of two Numbers: " . $result . "</h1>";
break;
case '-' : $result = $num1 - $numtwo;
echo "<h1>Subtraction of two Numbers: " . $result . "</h1>";
break;
case '*' : $result = $num1 * $num2;
echo "<h1>Product of two Numbers: " . $result . "</h1>";
break;
case '/' : $result = $num1 / $num2;
echo "<h1>Division of two Numbers: " . $result . "</h1>";
break;
case '%' : $result = $num1 % $num2;
echo "<h1>Remainder of two Numbers: " . $result . "</h1>";
break;
default : echo "<h1 style='color:red;'>Sorry, No Operation Found</h1>";
break;
}
}
?>
</div>
</body>
</html>
