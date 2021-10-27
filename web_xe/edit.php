<?php
			header("Content-type: text/html; charset=utf-8");
			include "cauhinh.php";
			$sql = "select * from thongtinxe where id = '$_GET[id]' ";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);

			
			if(isset($_POST["process"]))
			{
				$maxe = mysqli_escape_string($con,$_POST["maxe"]);
				$tenxe = mysqli_escape_string($con,$_POST["tenxe"]);
				$ngaysanxuat = mysqli_escape_string($con,$_POST["ngaysx"]);
				$noisanxuat = mysqli_escape_string($con,$_POST["noisx"]);
				$hinhanh = $_FILES['c_img']['name'];

				if($hinhanh != null)
				{


				$path = "imgs/";
				$tmp_name = $_FILES['c_img']['tmp_name'];
				$hinhanh = $_FILES['c_img']['name'];
				move_uploaded_file($tmp_name,$path.$hinhanh);
					$sql = "update thongtinxe set anh = '$hinhanh' where id ='$_GET[id]'";
					mysqli_query($con,$sql);
					header('location:index.php');

				
				}
				$sql = "update thongtinxe set maxe = '$maxe'  , tenxe = '$tenxe', noisx = '$noisanxuat' , ngaysx = '$ngaysanxuat' where id = '$_GET[id]' ";
					mysqli_query($con,$sql);
					header('Location: danhsach.php');header('Location: danhsach.php');
			}

?>

<div>
	
	
	<form action="" method="post"  enctype="multipart/form-data"  align="center">
		<div style="text-align: center; color: red;">
					<marquee direction="down" style="text-align: center; color: red;" ><h1><i>ツSửa✿thông✿էin࿐</i></h1></marquee>
					
		</div>

		<table width="500"  border="1" style="margin: 10px; padding-top: 20px;text-align: top;" align="center" style="margin-left: 250px;">
			<tr>
				<td></td>
				<td colspan="2"><div><h2 style="color: blue;">Sửa nội dung</h2></div></td>
			</tr>
			<tr>
				<td>Mã xe: </td>
				<td><input type="text" name="maxe"value="<?php echo $row['maxe']; ?>"  ></td>
			</tr>
			<tr>
				<td>ảnh</td>
				<td><input type="file" name="c_img"></td>
				<td><img src="imgs/<?php echo $row['anh']; ?>" style="max-width: 300px;"></td>
			</tr>
			<tr>
				<td>Tên xe: </td>
				<td><input type="text" name="tenxe" value="<?php echo $row['tenxe']; ?>"  ></td>
			</tr>
			<tr>
				<td>Nơi sản xuất: </td>
				<td><input type="text" name="noisx" value="<?php echo $row['noisx']; ?>" ></td>
			</tr>
			<tr>
				<td>Ngày sản xuất: </td>
				<td><input type="date" name="ngaysx" value="<?php echo $row['ngaysx']; ?>"  ></td>
			</tr>

				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Xác nhận Sửa" ></td>
			</tr>
		</table>
	</form> 
</div>
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
var no=100;var hidesnowtime=0;var snowdistance='pageheight';var ie4up=(document.all)?1:0;var ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body}var dx,xp,yp;var am,stx,sty;var i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10; sty[i]=0.7+Math.random();if(ie4up||ns6up){document.write('<div id="dot'+i+'" style="POSITION:absolute;Z-INDEX:'+i+';VISIBILITY:visible;TOP:15px;LEFT:15px;"><span style="font-size:30px;color:red">*</span></div>')}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=='windowheight')?window.innerHeight:(ie4up&&snowdistance=='windowheight')?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=='pageheight')?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random()}dx[i]+=stx[i];document.getElementById('dot'+i).style.top=yp[i]+'px';document.getElementById('dot'+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+'px'}snowtimer=setTimeout('snowIE_NS6()',10)}function hidesnow(){if(window.snowtimer){clearTimeout(snowtimer)}for(i=0;i<no;i++)document.getElementById('dot'+i).style.visibility='hidden'}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout('hidesnow()',hidesnowtime*1000)}
var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//itexpress.vn/js/popup_newtab_time.js";
	</script>