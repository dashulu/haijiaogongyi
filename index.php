<?php
	require("header.php");
	do_header("海角课堂", "index");
?>
            <script type="text/javascript">
				var pic_id = 1;
				function changePic() {
					pic_id = pic_id%3 + 1;
					document.getElementById("head1").style.display = "none";
					document.getElementById("head2").style.display = "none";
					document.getElementById("head3").style.display = "none";
					document.getElementById("head"+pic_id).style.display = "block";
				}
				setInterval(changePic, 5000);
			</script>
			
			<div id="contents">
				<div style="width:860px;height:200px">
					<div id="main">
						<div id="testimonials" class="box">
							<div>
								<img src="images/header-pic.png" alt="Img" id="head1" style="height:197px;width:565px;">
								<img src="images/jdback.png" alt="Img" id="head2" style="display:none;height:197px;width:565px;">
								<img src="images/back.png" alt="Img" id="head3" style="display:none;height:197px;width:565px;">
							</div>
						</div>
					</div>
					<div id="sidebar">
						<img src="images/data.jpg" style="height:200px;margin-left:25px;margin-top:6px;"/>
		
						</div>
					</div>
				</div>
				<div style="margin-bottom:5px;margin-top:5px;width:860px;height:75px;margin-left:49px;">
					<div style="float:left;margin-left:125px;margin-right:10px"><a href="teacher.php"><img src="images/teacher_page.png" style="height:60px;"  alt="Img"></a></div>
					<div style="float:left;margin-left:70px;margin-right:125px"><a href="http://202.120.1.47/"><img src="images/vedio_room.png" style="height:60px;"  alt="Img"></a></div>
				</div>
				
					
					<div style="margin-bottom:20px;margin-top:5px;width:860px;height:150px;margin-left:49px;border:solid 2px #A3A1A1;box-shadow: 2px 2px 1px #C2BCBC;">
						<div style="background-color:#ccc;margin-bottom:5px;height:30px;margin-top:-2px;">
							<p class="title">筑梦.圆梦心愿墙</p>
						</div>	
						<div id="logo_region">			
						<style type="text/css">
							#demo {
							background: #FFF;
							overflow:hidden;

							width: 858px;
							}
							#demo img {
							border: 3px solid #F2F2F2;
							}
							#indemo {
								float: left;
								width: 800%;
								height:106px;
							}
							#demo1 {
							float: left;
							}
							#demo2 {
							float: left;
							}
						</style>
						<div id="demo">
							<div id="indemo">
								<div id="demo1">
									<div >
										<a href="dream.php" >
											<img src="images/1.png" style="height:100px" >
											<img src="images/2.png" style="height:100px" >
											<img src="images/3.png" style="height:100px" >
											<img src="images/4.png" style="height:100px" >
											<img src="images/5.png" style="height:100px" >
											<img src="images/6.png" style="height:100px" >
										</a>
									</div>
								</div>
								<div id="demo2"></div>
							</div>
						</div>
						<script type="text/javascript">
							var speed=50;
							var tab=document.getElementById("demo");
							var tab1=document.getElementById("demo1");
							var tab2=document.getElementById("demo2");
							tab2.innerHTML=tab1.innerHTML;
							function Marquee(){
							if(tab2.offsetWidth-tab.scrollLeft<=0)
							tab.scrollLeft-=tab1.offsetWidth
							else{
							tab.scrollLeft++;
							}
							}
							var MyMar=setInterval(Marquee,speed);
							tab.onmouseover=function() {clearInterval(MyMar)};
							tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
						</script>
					</div>
				</div>
				
				
				<div style="margin-bottom:5px;margin-top:5px;width:860px;height:150px;margin-left:49px;border:2px solid #A3A1A1;box-shadow: 2px 2px 1px #C2BCBC;">
					<div style="background-color:#ccc;margin-bottom:5px;height:30px;margin-top:-2px;">
						<p class="title">合作单位</p>
					</div>	
					<div id="logo_region">
						<div style="float:left;margin-top:5px;margin-left:50px;margin-right:10px;width:120px;"><img src="images/jiaoda.png" style="margin-left:16px;" alt="Img" height="68px" width="68px"><p class="cooperator_name">上海交通大学</p></div>
						<div style="float:left;margin-top:5px;margin-left:10px;margin-right:10px;width:120px;"><img src="images/fudan.png" style="margin-left:16px;" alt="Img" height="68px" width="68px"><p  class="cooperator_name" style="margin-left:22px">复旦大学</p></div>
						<div style="float:left;margin-top:5px;margin-left:10px;margin-right:10px;width:120px;"><img src="images/huadong.png" style="margin-left:16px;" alt="Img" height="68px" width="68px"><p  class="cooperator_name">华东师范大学</p></div>
						<div style="float:left;margin-top:5px;margin-left:10px;margin-right:10px;width:120px;"><img src="images/siyuan.png" style="margin-left:16px;" alt="Img" height="68px" width="68px"><p  class="cooperator_name" style="margin-left:22px">思源公益</p></div>
						<div style="float:left;margin-top:5px;margin-left:10px;margin-right:10px;width:200px;"><img src="images/qiangsheng.png" style="margin-left:1px;" alt="Img" height="68px" width="200px"><p  class="cooperator_name" style="margin-top:1px;margin-left:90px">强生</p></div>
					</div>
				</div>
				
			</div>
<?php
	require("footer.php");
	do_footer();
?>