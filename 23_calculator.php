<DOCTYPE html>
<html>
<body>
<?php


if(isset($_POST['sub']))
{
	$txt1=$_POST['n1'];
	$txt2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	
	if($oprnd=="+")
	$res=$txt1+$txt2;
	else if($oprnd=="-")
		$res=$txt1-$txt2;
		else if($oprnd=="x")
		$res=$txt1*$txt2;
		else if($oprnd=="/")
			$res=$txt1/$txt2;
}
?>
<form>
<table style=""border:groove">
Welcome to the Calculator
<br>
<tr>
<td style="background-color: yellow; color:black; font-family:'Times New Roman'">Enter Number</td>
<td colspan="1">
<input name="n1" type="text" style="color:red"/></td>
</tr>
<tr>
<td style="background-color:red; color:black; font-family:'Times New Roman'">Enter Number</td>
<td class="auto-style5">
<input name="n2" type="text"  style="color:red"/></td> 
</tr>
<tr>
<td style="color:red; font-family:'Times New Roman'">Select Operator</td>
<td>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>	 
</tr>
<tr>
<td style="background-color:turquoise;color:black">Output = </td>
<td style="color:darkblue"><?php echo $res;?></td>
</tr>	

</form>
</body>
</html>