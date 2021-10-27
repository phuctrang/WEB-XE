<?php
 		include "cauhinh.php";
 		header("Content-type: text/html; charset=utf-8");

 		$sql = "select * from thongtinxe where id = '$_GET[id]' ";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);

 					// var_dump($row);
 		

?>
<?php
			header("Content-type: text/html; charset=utf-8");
			include "cauhinh.php";
			
			if(isset($_POST["process"]))
			{
				$maxe =$row['maxe'];
				$tenxe = $row['tenxe'];
				$ngaysanxuat = $row['ngaysx'];
				$noisanxuat = $row['noisx'];
				 
				//$hinhanh = $_FILES['c_img']['name'];
				$hinhanh = $row['anh'];
				if($hinhanh != null)
				{


				$path = "imgs/";
				$tmp_name = $_FILES['c_img']['tmp_name'];
				$anh = $_FILES['c_img']['name'];

				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "insert into giohang(maxe,anh,tenxe,noisx,ngaysx) values('$maxe','$hinhanh','$tenxe','$noisanxuat','$ngaysanxuat')";
					mysqli_query($con,$sql);
					header('Location: giohang.php');
					
				}
			}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #008B8B;">
	<h1 align="center" style="color: red;">Chi tiết cuả sản phẩn "  <?=$row['tenxe'] ?>  "</h1>
	<form action="" method="post"  enctype="multipart/form-data" style="margin-left: 200px;margin-top : 50px; background-color: #008B8B;"   >
	<table>
		<tr>
			<td>
				<div>
					<div>
						<h1>Mã sản phẩm: <?=$row['maxe'] ?></h1>
					</div>
					<div>
						<h1>Tên sản phẩm: <?=$row['tenxe'] ?></h1>
					</div>
					<div>
						<img src="imgs/<?php echo $row['anh']; ?>">
					</div>
					<div>
						<h1>Nơi sản xuất:  <?=$row['noisx'] ?></h1>
					</div>
					<div>
						<h1>Ngày sản xuất: <?=$row['ngaysx'] ?></h1>
					</div>
					<div>
						<b><input type="submit" name="process" value="Thêm vào giỏ hàng" style="color: green; font: bold;" ><i class=\"fas fa-shopping-cart\" ></i></div></b>
				</div>
			</td>
			<td>
				<!--
				<h2 style="color: red;"> Xác nhận lại các thông tin sau để thêm vào giỏ hàng./</h2>
				<div>Mã xe: 
						<input type="text" name="maxe" ></div>		
				<br><div>Tên xe: 
						<input type="text" name="tenxe" ></div>
				<br><div>Nơi sản xuất: 
						<input type="text" name="noisx" ></div>
				<br><div>Ngày sản xuất: 
						<input type="date" name="ngaysx" ></div>
				<br>
				-->	
						
					
				
						
			</td>
		</tr>

		
	</table>
</form>
	
</body>
</html>
