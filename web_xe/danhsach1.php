<?php
		include "cauhinh.php";
	 	$sql = "select * from thongtinxe ";
	 	$result = mysqli_query($con,$sql);

?>

<div class="infor">

				<table  width="900" border="2px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center; 
				; border-color: orange; color: #00b36b;">
					<tr>
						<th width="50px;">STT</th>
						<th width="50px;">Mã xe</th>
						<th width="200px;">Ảnh</th>
						<th width="200px;">Tên xe</th>
						<th width="100px;">Nơi sản xuất</th>
						<th width="200px;">Ngày sản xuất</th>
						<th width="100px;"></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)){
				# code...
			 ?>
					<tr>
						<td><?php echo $row['id']; ?> </td>
						<td><?php echo $row['maxe']; ?></td>
						<td><img src="imgs/<?php echo $row['anh']; ?>" style="max-width: 300px; "</td>
						<td><?php echo $row['tenxe']; ?></td>
						<td><?php echo $row['noisx']; ?></td>
						<td><?php echo $row['ngaysx']; ?></td>
						<td><a href="index.php?quanly=edit&id=<?php echo $row['id']; ?>"style="color:  #e6e600;"><br><br></a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="index.php?quanly=delete&id=<?php echo $row['id']; ?>"style="color:  #e6e600;"></a>
							<a href="chitiet.php?id=<?= $row['id'] ?>" style="color:  #e6e600;">	&rarr;Thêm vào giỏ ngay</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
</div>