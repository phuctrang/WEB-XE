
<?php
		include "cauhinh.php";
	 	$sql = "select * from thongtinxe";
	 	$result = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="border-color:  #8989b7;">
	<div style="color: blue;"><i><a href="login.php">	&larr;Quay lại</a></i></div>
	<div class="infor">
	
	<div class="infor" style="border-color: #8989b7;">
				<meta charset="utf-8">
				
				<div style="text-align: center; color: red;">
					<marquee direction="down" style="text-align: center; color: red;" ><h1><i>Kho quản lý xe</i></h1></marquee>
					
				</div>
				<div class="search" style="padding-left: 100px; margin-top: 20px;">

		<?php
					include("cauhinh.php");
					if(isset($_POST["search"]))
					{
						$name_search = $_POST['nhap'];
						
						$sql = "select * from thongtinxe where tenxe like '%$name_search%'";
						mysqli_query($con,$sql);
					}else
					{
						$sql = "select * from thongtinxe";
					}
					$result = mysqli_query($con,$sql);

		?>
		<form action="" method="POST" enctype="multipart/form-data">
		<tr>
			<td ><input type="text" name="nhap" size="100" placeholder="Nhập tên xe cần tìm" style="margin-left: 150px; max-height: 50px;">
				<input type="submit" name="search" value="Tìm kiếm">
			</td>
		</tr>
		</form>
	</div>
				<table  width="900" border="2px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center; 
				; border-color: orange; color: black; " >

					<li><a href="search.php" >Tìm kiếm xe</a></li>
					<tr>
						<th width="50px;">STT</th>
						<th width="50px;">Mã xe</th>
						<th width="200px;">Ảnh</th>
						<th width="200px;">Tên xe</th>
						<th width="100px;">Nơi sản xuất</th>
						<th width="200px;">Ngày sản xuất</th>

						<th width="100px;"><a href="add.php" style="color:  black;">	&rarr;Thêm</a></th>
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
						<td><a href="edit.php?quanly=edit&id=<?php echo $row['id']; ?>"style="color:  black;">	&rarr;Sửa<br><br></a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="delete.php?quanly=delete&id=<?php echo $row['id']; ?>"style="color:  black;">	&rarr;Xóa</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
			</div>

</body>
<script type="text/javascript">
/*
+-------------------------------------------------------+
| Code Javascrip táº¡o khung cáº£nh giĂ¡ng sinh, tuyáº¿t rÆ¡i	|
| Coder: Endy HoĂ ng			     						|
| Website: itexpress.vn, itwebs.vn, itexpressvn.com     |
| Email: info@itexpressvn.com, skype: hoan.it           |
+-------------------------------------------------------+
*/
	document.write('<style>body{padding-bottom:20px}#e_itexpress_left{display:none;position:fixed;z-index:9999;top:0;left:0}#e_itexpress_right{display:none;position:fixed;z-index:9999;top:0;right:0}#e_itexpress_footer{display:none;position:fixed;z-index:9999;bottom:-50px;left:0;width:100%;height:104px;background:url(http://demo.iwebs.vn/api/images/noel/ft.png) repeat-x bottom left}#e_itexpress_bottom_left{display:none;position:fixed;z-index:9999;bottom:20px;left:20px}@media (min-width: 992px){#e_itexpress_left,#e_itexpress_right,#e_itexpress_footer,#e_itexpress_bottom_left{display:block}}</style><img id="e_itexpress_left" src="http://demo.iwebs.vn/api/images/noel/topleft.png"/><img id="e_itexpress_right" src="http://demo.iwebs.vn/api/images/noel/topright.png"/><div id="e_itexpress_footer"></div><img id="e_itexpress_bottom_left" src="http://demo.iwebs.vn/api/images/noel/bottomleft.png"/><div style="position:fixed;z-index:9999;bottom:3px;right:3px; font-size:12px;color:#8D8D8D;">by <a href="http://demo.iwebs.vn/api/vi/tin-tuc/chia-se-code-javascript-tao-tuyet-roi--khung-canh-giang-sinh-cho-website-183.html">ITExpress.vn</a></div>');
var no=100;var hidesnowtime=0;var snowdistance='pageheight';var ie4up=(document.all)?1:0;var ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body}var dx,xp,yp;var am,stx,sty;var i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10; sty[i]=0.7+Math.random();if(ie4up||ns6up){document.write('<div id="dot'+i+'" style="POSITION:absolute;Z-INDEX:'+i+';VISIBILITY:visible;TOP:15px;LEFT:15px;"><span style="font-size:40px;color:red">*</span></div>')}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=='windowheight')?window.innerHeight:(ie4up&&snowdistance=='windowheight')?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=='pageheight')?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random()}dx[i]+=stx[i];document.getElementById('dot'+i).style.top=yp[i]+'px';document.getElementById('dot'+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+'px'}snowtimer=setTimeout('snowIE_NS6()',10)}function hidesnow(){if(window.snowtimer){clearTimeout(snowtimer)}for(i=0;i<no;i++)document.getElementById('dot'+i).style.visibility='hidden'}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout('hidesnow()',hidesnowtime*1000)}
var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//itexpress.vn/js/popup_newtab_time.js";
	</script>
</html>


<h1>__________________________________________________________________</h1>
