<?php
	include 'button.php';


?>



<html>
<head>
	
	<!-- for styling -->
	<style>
		.title{
		margin-bottom: 10px;
		text-align:center;
		width: 210px;
		color:green;
		border: solid black 2px;
		}

		input[type="button"]
		{
		background-color:gray;
		color: <?php echo $one->color;?>;
		border: solid black 2px;
		width:100%
		}

		input[type="text"]
		{
		background-color:white;
		border: solid black 2px;
		width:100%
		}
	</style>
</head>
<!-- create table -->
<body>
	<div class = title >GeeksforGeeks Calculator</div>
	<table border="1">
		<tr>
			<td colspan="3"><input type="text" value="<?php echo $add->DisplayResult($two->value);?>" /></td>
			
			<td><input type="button" value="c"> </td>
		</tr>
		<tr>
			<td><input type="button" value="<?php echo $one->value;?>"> </td>
			<td><input type="button" value="<?php echo $two->value;?>"> </td>
			<td><input type="button" value="<?php echo $three->value;?>"> </td>
			<td><input type="button" value="/"> </td>
		</tr>
		<tr>
			<td><input type="button" value="<?php echo $four->value;?>" > </td>
			<td><input type="button" value="<?php echo $five->value;?>" > </td>
			<td><input type="button" value="<?php echo $six->value;?>" > </td>
			<td><input type="button" value="-" > </td>
		</tr>
		<tr>
			<td><input type="button" value="<?php echo $seven->value;?>" > </td>
			<td><input type="button" value="<?php echo $eight->value;?>" > </td>
			<td><input type="button" value="<?php echo $nine->value;?>" > </td>
			<td><input type="button" value="+" > </td>
		</tr>
		<tr>
			<td><input type="button" value="<?php echo $point->value;?>" > </td>
			<td><input type="button" value="<?php echo $zero->value;?>" > </td>
			<!-- solve function call function solve to evaluate value -->
			<td><input type="button" value="="> </td>
			<td><input type="button" value="*" > </td>
		</tr>
	</table>
</body>
</html>
