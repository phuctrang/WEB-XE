
<?php
		
        require_once ('giohang/php/CreateDb.php');
        
                $sql = "select * from thongtinxe";
        
                $result = mysqli_query($con,$sql);
        
        ?>
<!-- session cho goi hang -->
<?php

session_start();

require_once ('giohang/php/CreateDb.php');

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Siêu xe</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

        <!-- Font Awesome --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" /> 

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css"> 

    </head>
 <!-- gio hang -->
        
 <?php
            //  require_once ("giohang/php/header.php"); 
             ?>
           
    <body style="background-color: #33334d;">
        
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#trangchu">Trang Chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gioithieu">Giới Thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#khampha">Khám phá</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#danhsach">Xem sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#chitiet">Thêm vào giỏ hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nhac">Mở nhạc</a>
                        </li>
                        <li class="nav-item .search-container">
                            <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                            <form>
                                <input type="search">
                            </form>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="#" onclick="Redirect();">
                                 <i class="far fa-user"></i>
                            </a>
                           

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header id="trangchu">
            <div class="overlay">
                <div class="container">
                    <div>
                        <h1><span>SIEUCAR.VN</span><br></h1>
                        <p COLOR="red"> XE ĐỈNH - GIÁ KHỦNG</p>
                        <button><a href="https://anycar.vn/" class="text-uppercase">ĐẶT NGAY</a></button>
                    </div>
                    
                </div>
            </div>
        </header>
        
        <div class="about-us" id="gioithieu" style="background-color:  #33334d; color: white; ">
            <div class="small-container">
                <h2 class="text-center"><span color="blue">SIEUCAR.VN</span> BÁN Ô TÔ ĐẸP, SANG TRỌNG
(Ở QUY NHƠN HỒ CHÍ MINH VÀ CÁC TỈNH THÀNH KHÁC)</h2>
                <p class="text-center"><b style="color: 
 #00ff99;">MỘT SỐ THƯƠNG HIỆU VÀ LOGO CỦA CÁC HÃNG XE Ô TÔ NỔI TIẾNG TRÊN THẾ GIỚI</b></p>
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-12 text-center">
                                <div class="item">
                                    <img src="imgs/h1.jpg">
                                    <h5 class="text-uppercase">_TOYOTA</h5>
                                </div>
                                <div class="item">
                                    <img src="imgs/h2.jpg">
                                    <h5 class="text-uppercase">_AUDI</h5>
                                </div>
                                <div class="item">
                                    <img src="imgs/h3.jpg">
                                    <div>
                                        <h5 class="text-uppercase">_BMW</h5>
                                        <p>HƠN +500 TRIỆU PHÚ ĐÃ TIN TƯỞNG BMW-CAR</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="imgs/h4.jpg">
                                    <h5 class="text-uppercase">_TESLA</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-right">
                                <h4 class="text-uppercase">SIEUCAR<span>.VN</span></h4>
                                <p style="color: black;">Trên thế giới hiện nay có rất rất nhiều hãng xe ô tô nhưng để trở thành một trong các hãng xe ô tô nổi tiếng và tiếp tục đứng vững khẳng định được tên tuổi của mình thì không còn quá nhiều. Tin chắc rằng nhắc đến các hãng xe hơi này ai cũng đều biết như Toyota, Hyundai, BMW, Lamboghini, Mercedes-Benz hay Volkswagen,...</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>
        
        <div class="services" id="khampha" style="background-color: 

 #33334d; color: white; ">
            <div class="container">
                <h2 class="text-capitalize">SIEUCAR<span>.VN</span></h2>
                <p>Các dòng siêu xe đỉnh nhất 2021 <span color="red">&hearts;    &hearts;    &hearts;</span></p>
            </div>

            <div class="small-container">
                <div id="slideToNext" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="imgs/1a.jpg" class="d-block w-100" alt="..." style="size: 60%;">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/2a.jpg" class="d-block w-100" alt="..."style="size: 60%;">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/3a.jpg" class="d-block w-100" alt="..."style="size: 60%;">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/4a.jpg" class="d-block w-100" alt="..."style="size: 60%;">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/5a.jpg" class="d-block w-100" alt="..."style="size: 60%;">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/6a.jpg" class="d-block w-100" alt="..."style="size: 60%;">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/7a.jpg" class="d-block w-100" alt="..."style="size: 60%;">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/8a.jpg" class="d-block w-100" alt="..."style="size: 60%;">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/9a.jpg" class="d-block w-100" alt="..."style="size: 60%;">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#slideToNext" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#slideToNext" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        
        <div id="danhsach" style="background-color: 

 #33334d;  ">
           
                    

                    <?php include('giohang/php/component.php'); ?>
                       <div class="container">
                    <div class="row text-center py-5">
                    <?php

                        // $result = getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            component($row['tenxe'], $row['ngaysx'], $row['anh'], $row['id']);
                        }
                    ?>
                    
      
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            </div>

        </div>
        
            <div  id="chitiet">
                    <li><a href="index.php?quanly=danhsach1"><b><i><u>/.Ấn vào đây để thêm hàng vào giỏ./</u></i></b></a></li>
                    
                    <div class="content"><?php require("content.php"); ?></div>

                    
            </div>
                    
            <div id = "nhac">
            <video width="100%" height="150" controls>
              <source src="video/mai-xiao-dou-9420-edm-remix.mp4" type="video/mp4" start="true">
            </video>                  
            </div>

            </div>
            <div style="color: orange;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công ty Cổ phần <i><b><a href="https://anycar.vn/">ANYCA</a></b></i> Việt Nam
                Số 3-5, Nguyễn Văn Linh, P. Gia Thụy, Q. Long Biên, Hà Nội
                Số ĐKKD: 0104406822, ngày cấp: 29/01/2010
                Nơi cấp: Hà Nội
                Giấy phép MXH số 227/GP – BTTTT do BỘ THÔNG TIN VÀ TRUYỀN THÔNG cấp ngày 05/06/2019.
                Chịu trách nhiệm nội dung: Phạm Trung Dũng.
                Hotline: 18006216 - Email: info@anycar.vn
                © Copyright 2010 ANYCAR.VN - All rights reserved.
            </div>
             
        </footer>
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header').height(winH);  
                
                $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
                
                $('.navbar ul li a.search').on('click', function (e) {
                    e.preventDefault();
                });
                $('.navbar a.search').on('click', function () {
                    $('.navbar form').fadeToggle();
                });
                
                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            })
        </script>
           <script type="text/javascript">
         <!--
            function Redirect() {
               window.location="login.php";
            }
         //-->
      </script>
      <script type="text/javascript">

// hieu ung tuyet roi.
    document.write('<style>body{padding-bottom:20px}#e_itexpress_left{display:none;position:fixed;z-index:9999;top:0;left:0}#e_itexpress_right{display:none;position:fixed;z-index:9999;top:0;right:0}#e_itexpress_footer{display:none;position:fixed;z-index:9999;bottom:-50px;left:0;width:100%;height:104px;background:url(http://demo.iwebs.vn/api/images/noel/ft.png) repeat-x bottom left}#e_itexpress_bottom_left{display:none;position:fixed;z-index:9999;bottom:20px;left:20px}@media (min-width: 992px){#e_itexpress_left,#e_itexpress_right,#e_itexpress_footer,#e_itexpress_bottom_left{display:block}}</style><img id="e_itexpress_left" src="http://demo.iwebs.vn/api/images/noel/topleft.png"/><img id="e_itexpress_right" src="http://demo.iwebs.vn/api/images/noel/topright.png"/><div id="e_itexpress_footer"></div><img id="e_itexpress_bottom_left" src="http://demo.iwebs.vn/api/images/noel/bottomleft.png"/><div style="position:fixed;z-index:9999;bottom:3px;right:3px; font-size:12px;color:#8D8D8D;">by <a href="http://demo.iwebs.vn/api/vi/tin-tuc/chia-se-code-javascript-tao-tuyet-roi--khung-canh-giang-sinh-cho-website-183.html">ITExpress.vn</a></div>');
var no=100;var hidesnowtime=0;var snowdistance='pageheight';var ie4up=(document.all)?1:0;var ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body}var dx,xp,yp;var am,stx,sty;var i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10; sty[i]=0.7+Math.random();if(ie4up||ns6up){document.write('<div id="dot'+i+'" style="POSITION:absolute;Z-INDEX:'+i+';VISIBILITY:visible;TOP:15px;LEFT:15px;"><span style="font-size:70px;color:#CCFFFF;">*</span></div>')}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=='windowheight')?window.innerHeight:(ie4up&&snowdistance=='windowheight')?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=='pageheight')?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random()}dx[i]+=stx[i];document.getElementById('dot'+i).style.top=yp[i]+'px';document.getElementById('dot'+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+'px'}snowtimer=setTimeout('snowIE_NS6()',10)}function hidesnow(){if(window.snowtimer){clearTimeout(snowtimer)}for(i=0;i<no;i++)document.getElementById('dot'+i).style.visibility='hidden'}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout('hidesnow()',hidesnowtime*1000)}
var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//itexpress.vn/js/popup_newtab_time.js";
    </script>


    
    </body>
</html>