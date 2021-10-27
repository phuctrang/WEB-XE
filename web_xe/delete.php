<?php
		header("Content-type: text/html; charset=utf-8");
		include "cauhinh.php";
		$sql = "delete from thongtinxe where id = '$_GET[id]'";
		mysqli_query($con,$sql);
		header('Location: danhsach.php');

?>