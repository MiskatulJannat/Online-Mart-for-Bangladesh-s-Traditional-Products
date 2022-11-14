<?php
session_start();
	$connection =new mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"mart");
	$query = "insert into user values ('$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "page.php";
</script>




