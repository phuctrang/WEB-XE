<?php
		
		if(isset($_GET["id"]))
		{
			$row = $_GET["id"];
			
		}
		if(isset($_GET["quanly"]))
		{
			$row = $_GET["quanly"];

		}
		else
			$row = "";
		if ($row == "danhsach") {
			include("danhsach.php");
		}elseif ($row == "add") {
			include("add.php");
		}elseif ($row == "edit") {
			include("edit.php");
		}elseif($row == "delete"){
			include("delete.php");
		}elseif ($row == "search") {
			include("search.php");
		}

		elseif ($row == "login") {
			include("login.php");
		}
		elseif ($row == "chitiet") {
			include("chitiet.php");
		}
		elseif ($row == "danhsach1") {
			include("danhsach1.php");
		}
		elseif ($row == "xoagiohang") {
			include("xoagiohang.php");
		}
		


?>