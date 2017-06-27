<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"quiz");

if(isset($_POST['submit']))
{
	
	
	$first=$_POST[gender];
	$second=$_POST[gr];
	$third=$_POST[g];
	$fourth=$_POST[r];
	$fifth=$_POST[s];
	$sixth=$_POST[t];
	$seventh=$_POST[u];
	$eight=$_POST[v];
	$nineth=$_POST[w];
	$tenth=$_POST[x];
	$conn=mysqli_query($con,"insert into quiz(first,second,third,fourth,fifth,sixth,seventh,eight,nineth,tenth) values('$first','$second','$third','$fourth','$fifth','$sixth','$seventh','$eight','$nineth','$tenth')");
	$result=$first+$second+$third+$fourth+$fifth+$sixth+$seventh+$eight+$nineth+$tenth;
	if($result==90)
	{
	?>
		 <script type="text/javascript">
window.location = "superman.html";
</script>  
<?php
	}
	if($result==180)
	{
		?>
		<script type="text/javascript">
window.location = "mojo.html";
</script>  
<?php
	}
	if($result==270)
	{
		?>
		<script type="text/javascript">
window.location = "dexter.html";
</script>  
<?php
	}
	if($result==360)
	{
		?>
		<script type="text/javascript">
window.location = "naruto.html";
</script>  
<?php
	}
	if($result>90&& $result<180)
	{
		?>
		<script type="text/javascript">
window.location = "scooby.html";
</script>  
<?php
	}
	if($result>180&& $result<270)
	{
		?>
		<script type="text/javascript">
window.location = "johnybravo.html";
</script>  
<?php
	}
	if($result>270&& $result<360)
	{
		?>
		<script type="text/javascript">
window.location = "batman.html";
</script>  
<?php
	}
}

?>