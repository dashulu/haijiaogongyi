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
			
			<div id="contents" style="margin-top:-3px;">
				<div style="height:300px;">
					<div id="testimonials" class="box">
						<div style="padding:0 0">
							<img src="images/header-pic.png" alt="Img" id="head1" style="height:300px;width:100%;">
							<img src="images/jdback.png" alt="Img" id="head2" style="display:none;height:300px;width:100%;">
							<img src="images/back.png" alt="Img" id="head3" style="display:none;height:300px;width:100%;">
						</div>
					</div>
				</div>
			</div>
			<div id="contents" style="margin-bottom:5px;">
				<div style="background-color:rgb(241, 242, 242);height:226px;" >
					<div style="margin-top:76px;width:50%;float:left;height: 150px;text-align: center;">
						<a href="contact.php" style="color:#000;text-decoration:none;">
							<div>
								<img src="images/contact_me.png" style="margin-left:-100px;" />
								<div style="margin-top:-55px;margin-left:75px;">
									<p  style="font-family:微软雅黑;font-size:15px;">联系我们</p>
									<p  style="font-family:微软雅黑;">CONTACT US</p>
								</div>
							</div>
						</a> 
					</div>
					<div id="Layer1" style="float:left;margin-top:25px; width:1px; background-color:rgb(199, 205, 209);height:176px;"></div>
					<div style="margin-top:76px;float:left;text-align:center;width:49%">
						<div>
							<img src="images/list.png" style="margin-left:-120px;" />
							<div style="margin-top:-85px;margin-left:50%;text-align:left;">
								<p  style="font-family:微软雅黑;font-size:15px;">受益人数：1221人次</p>
								<p  style="font-family:微软雅黑;font-size:15px;">志愿者人数：213人次</p>
								<p  style="font-family:微软雅黑;font-size:15px;">授课时长：3302小时</p>
								<p  style="font-family:微软雅黑;font-size:15px;">历史捐赠：5125元</p>
							</div>
						</div>
					</div>
				</div>
			</div>
				
			
			<div  id="contents" style="height:206px;">
				<div style="height:66px;margin-top:15px;margin-bottom:0px;" >
					<div style="margin-top:25px;width:46%;background-color:rgb(221, 223, 225); float:left;height: 1px;"></div>
					<div  style="float:left; width:8%; height:50px;text-align:center"><p style="font-family:微软雅黑;">筑梦</p><p  style="font-family:微软雅黑;font-size:10px;">圆梦心愿墙</p></div>
					<div style="margin-top:25px;height:1px;float:left;background-color:rgb(221, 223, 225);width:46%"></div>
				</div>
					
				<div id="logo_region">			
				<style type="text/css">
					#demo {
					background: #FFF;
					overflow:hidden;

					width: 100%;
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
		
		
			<div id="contents"  style="height:206px;">
				<div style="height:66px;margin-top:15px;margin-bottom:0px;" >
					<div style="margin-top:25px;width:46%;background-color:rgb(221, 223, 225); float:left;height: 1px;"></div>
					<div  style="float:left; width:8%; height:50px;text-align:center"><p  style="font-family:微软雅黑;">合作</p><p style="font-family:微软雅黑;">单位</p></div>
					<div style="margin-top:25px;height:1px;float:left;background-color:rgb(221, 223, 225);width:46%"></div>
				</div>
				<div id="logo_region" style="text-align:center;">
					<image src="images/unit.png" />
				<!--	<div style="float:left;margin-top:5px;margin-left:50px;margin-right:10px;width:120px;"><img src="images/jiaoda.png" style="margin-left:16px;" alt="Img" height="68px" width="68px"><p class="cooperator_name">上海交通大学</p></div>
					<div style="float:left;margin-top:5px;margin-left:10px;margin-right:10px;width:120px;"><img src="images/fudan.png" style="margin-left:16px;" alt="Img" height="68px" width="68px"><p  class="cooperator_name" style="margin-left:22px">复旦大学</p></div>
					<div style="float:left;margin-top:5px;margin-left:10px;margin-right:10px;width:120px;"><img src="images/huadong.png" style="margin-left:16px;" alt="Img" height="68px" width="68px"><p  class="cooperator_name">华东师范大学</p></div>
					<div style="float:left;margin-top:5px;margin-left:10px;margin-right:10px;width:120px;"><img src="images/siyuan.png" style="margin-left:16px;" alt="Img" height="68px" width="68px"><p  class="cooperator_name" style="margin-left:22px">思源公益</p></div>
					<div style="float:left;margin-top:5px;margin-left:10px;margin-right:10px;width:200px;"><img src="images/qiangsheng.png" style="margin-left:1px;" alt="Img" height="68px" width="200px"><p  class="cooperator_name" style="margin-top:1px;margin-left:90px">强生</p></div>
				-->
				</div>
			</div>
				
		</div>
<?php
	require("footer.php");
	do_footer();
?>