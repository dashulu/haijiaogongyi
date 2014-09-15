<?php
	require("header.php");
	do_header("海角课堂", "activity");
?>
	<script type="text/javascript">
	
		function return_back(my) {
			my.parentElement.style.display = "none";
			document.getElementById("activity_intros").style.display = "block";
		}
	
		function show_main_content(my) {
				document.getElementById("activity_intros").style.display = "none";
				if(my.id == "activity1") {
					document.getElementById("activity2_div").style.display = "none";
					document.getElementById("activity1_div").style.display = "block";
					document.getElementById("activity3_div").style.display = "none";
					document.getElementById("activity4_div").style.display = "none";
					document.getElementById("activity5_div").style.display = "none";
					document.getElementById("activity0_div").style.display = "none";
				} else if(my.id == "activity2") {
					document.getElementById("activity2_div").style.display = "block";
					document.getElementById("activity1_div").style.display = "none";
					document.getElementById("activity3_div").style.display = "none";
					document.getElementById("activity4_div").style.display = "none";
					document.getElementById("activity0_div").style.display = "none";
					document.getElementById("activity5_div").style.display = "none";
					
				} else if(my.id == "activity3") {
					document.getElementById("activity1_div").style.display = "none";
					document.getElementById("activity2_div").style.display = "none";
					document.getElementById("activity3_div").style.display = "block";
					document.getElementById("activity4_div").style.display = "none";
					document.getElementById("activity5_div").style.display = "none";
					document.getElementById("activity0_div").style.display = "none";
				} else if(my.id == "activity4") {
					document.getElementById("activity1_div").style.display = "none";
					document.getElementById("activity2_div").style.display = "none";
					document.getElementById("activity4_div").style.display = "block";
					document.getElementById("activity3_div").style.display = "none";
					document.getElementById("activity5_div").style.display = "none";
					document.getElementById("activity0_div").style.display = "none";
				} else if(my.id == "activity5") {
					document.getElementById("activity1_div").style.display = "none";
					document.getElementById("activity2_div").style.display = "none";
					document.getElementById("activity5_div").style.display = "block";
					document.getElementById("activity3_div").style.display = "none";
					document.getElementById("activity4_div").style.display = "none";
					document.getElementById("activity0_div").style.display = "none";
				}
				else if(my.id == "activity0") {
					document.getElementById("activity1_div").style.display = "none";
					document.getElementById("activity2_div").style.display = "none";
					document.getElementById("activity0_div").style.display = "block";
					document.getElementById("activity3_div").style.display = "none";
					document.getElementById("activity4_div").style.display = "none";
					document.getElementById("activity5_div").style.display = "none";
				}
		}
	</script>
           
			<div id="contents">
				
				<div id="activity_intros">
					<div class="title_background" style="height:45px;font-size:17px;">
						<p class="title" style="text-align:left;margin-left:30px;color:#fff;font-size:18px;padding-top:4px;">近期活动</p>
					</div>
					
					
					
					<div class="activity_intro">
						<img src="images/shanghai1.jpg" style="float:left;height:300px;"/>
						<div style="margin-left:50%;">
							<div style="font-family:微软雅黑;padding-top:20px;margin-left:25%;margin-right:25%;text-align:left;">
								<h2 style="color:#000;margin-bottom:20px;">上海交通大学海角公益组织赴甘肃甘谷开展支教</h2>
								<p>
									&nbsp&nbsp&nbsp&nbsp8月8日至15日，来自上海交通大学的海角公益组织从上海出发，经过27个小时的奔波，跨越了超过1713公里的距离，来到甘肃省天水市甘谷县，在总门学校等5所中小学开展支教及走访调研活动。</p>
								<p>
								<div class="detail" id="activity0" onclick="show_main_content(this)">
									查看详情
								</div>
							</div>
						</div>
					</div>
					
					<div class="activity_intro">
						<img src="images/yalujiang.jpg" style="float:left;height:300px;"/>
						<div style="margin-left:50%;">
							<div style="font-family:微软雅黑;padding-top:20px;margin-left:25%;margin-right:25%;text-align:left;">
								
								<h2  style="color:#000;margin-bottom:20px;">记上海交通大学海角公益组织在线支教活动</h2>

								<p>
									&nbsp&nbsp&nbsp&nbsp2014年7月20日，上海交通大学海角公益组织首期远程乡村教师系列培训课程在海角视频教室中成功开展，为200位来自吉林省集安市15所中小学教师带去远程在线支教新体验。</p>
									
								<p>
								<div class="detail" id="activity1" onclick="show_main_content(this)">
									查看详情
								</div>
							</div>
						</div>
					</div>
					
					<div class="activity_intro">
						<img src="images/zhumeng1.jpg" style="float:left;height:300px;"/>
						<div style="margin-left:50%;">
							<div style="font-family:微软雅黑;padding-top:20px;margin-left:25%;margin-right:25%;text-align:left;">
								<h2 style="color:#000;margin-bottom:20px;">筑梦圆梦系列活动顺利举行</h2>
								
								<p>
									&nbsp&nbsp&nbsp&nbsp2014年7月起，海角公益组织前往吉林、甘肃等地进行线上线下结合的支教实践活动，活动惠及中小学生及在再培训教师超过1000余人。海角公益组织发起了筑梦圆梦系列活动，由这些学生通过海角发布自己的心愿，社会爱心人士可以在海角的爱心墙上认领心愿，从而帮助这些贫困地区的孩子们实现愿望。活动取得了良好的反响。
									
								</p>
								<div class="detail" id="activity2" onclick="show_main_content(this)">
									查看详情
								</div>
							</div>
						</div>
					</div>
					
					<div class="activity_intro">
						<img src="images/activity1.jpg" style="float:left;height:300px;"/>
						<div style="margin-left:50%;">
							<div style="font-family:微软雅黑;padding-top:20px;margin-left:25%;margin-right:25%;text-align:left;">
								<h2 style="color:#000;margin-bottom:20px;">海角公益校际远程教学交流成功进行</h2>
								
								<p>
									&nbsp&nbsp&nbsp&nbsp2014年1月1日起，海角公益组织开始进行校际远程教学交流活动。在活动当中，海角已经覆盖10余所中小学，遍及5个区县，为参与教师提供了便捷、流畅的在线远程教学交流活动新体验，得到了老师们的肯定。
								</p>
								<div class="detail" id="activity3" onclick="show_main_content(this)">
									查看详情
								</div>
							</div>
						</div>
					</div>
					
					<div class="activity_intro">
						<img src="images/zhumeng2.jpg" style="float:left;height:300px;"/>
						<div style="margin-left:50%;">
							<div style="font-family:微软雅黑;padding-top:20px;margin-left:25%;margin-right:25%;text-align:left;">
								<h2 style="color:#000;margin-bottom:20px;">沪内爱心家教系列活动成功举行</h2>
								
								<p>
									&nbsp&nbsp&nbsp&nbsp从2013年12月23日海角公益与上海交大家教部正式签约起，至今，海角在线教学房间已成功进行爱心家教1000余次。此系列公益活动旨在帮助沪内需要学业辅导的孩子享受高校师资，体验现代教育，助力其努力学习奋发向上。</p>
								<p>
								<div class="detail" id="activity4" onclick="show_main_content(this)">
									查看详情
								</div>
							</div>
						</div>
					</div>
					
					<div class="activity_intro">
						<img src="images/ai_xin_jia_jiao.jpg" style="float:left;height:300px;"/>
						<div style="margin-left:50%;">
							<div style="font-family:微软雅黑;padding-top:20px;margin-left:25%;margin-right:25%;text-align:left;">
								<h2 style="color:#000;margin-bottom:20px;">“梦想课堂”系列公益讲座成功举办</h2>

								<p>
									&nbsp&nbsp&nbsp&nbsp2013年11月11日，海角公益成功与思源公益一起举办了“梦想课堂”系列公益讲座活动。本活动通过大学老师的激情演讲和切实体会，助力更多山区孩子寻找人生方向，放飞人生梦想。</p>
								<p>
								<div class="detail" id="activity5" onclick="show_main_content(this)">
									查看详情
								</div>
							</div>
						</div>
					</div>
				</div>
				
		
				
				
		
					
				<div id="activity_main">
					<div style="margin:10 10 10 10;font-family:黑体;display:none"  id="activity5_div" >
						<h1>“梦想课堂”系列公益讲座成功举办</h1>
						<p>
							&nbsp&nbsp&nbsp&nbsp2013年11月11日，海角公益成功与思源公益一起举办了“梦想课堂”系列公益讲座活动。本活动通过大学老师的激情演讲和切实体会，助力更多山区孩子寻找人生方向，放飞人生梦想。</p>
						<p>
							&nbsp&nbsp&nbsp&nbsp11月18日，远程教育项目首期系列讲座“梦想课堂”启动仪式在上海创业公社举办。海角公益组织提供核心视频房间技术，助力讲座举办。首期系列讲座以“梦想”为主题，人文学院团委书记、“2012全国高校辅导员年度人物”汪雨申应邀担当第一堂课的主讲人，为甘肃三岔中学高二文科班全体学生进行实时视频远程教学。在接下来的一个月中，海角公益共协助举办五场大型讲座，请到五位优秀教师，共有贫困山区200位学生参与。</p>
						<p>
							&nbsp&nbsp&nbsp&nbsp在“梦想课堂”公益活动中，海角公益提供了独特的在线视频房间技术，在梦想课堂历史上第一次实现了视频房间在线支教，几位主讲老师对海角公益的在线教育软件提出了高度赞赏并非常期待软件的进一步升级研发和网站的正式运营。另一方面，山区的孩子在听过此次讲座后，普遍受到启迪。校方更多次发出邀请希望我们再次授课。
						</p>
						<img src="images/ai_xin_jia_jiao.jpg" style="margin-left:10%;" />
						<p>
							&nbsp&nbsp&nbsp&nbsp此次活动也让我们看到将教育资源合理分配，为更多孩子带去教育希望的可能。海角公益携手思源公益还将继续公益事业，共创美好教育未来。
						</p>
						
						<div class="detail" style="cursor:hand;float: right;margin-right: 80px;margin-bottom: 20px;text-align:center;" onclick="return_back(this)">
							返回
						</div>
					</div>
					<div style="margin:10 10 10 10;font-family:黑体;display:none" id="activity4_div" >
						<h1>沪内爱心家教系列活动成功举行</h1>
						<p>
							&nbsp&nbsp&nbsp&nbsp从2013年12月23日海角公益与上海交大家教部正式签约起，至今，海角在线教学房间已成功进行爱心家教1000余次。此系列公益活动旨在帮助沪内需要学业辅导的孩子享受高校师资，体验现代教育，助力其努力学习奋发向上。</p>
						<p>
							&nbsp&nbsp&nbsp&nbsp12月23日海角公益与交大家教部正式签约后，合作研发新版交大家教部网站。自2014年1月起，海角公益免费提供核心视频房间技术，助力家教部开展沪内在线爱心家教，将以往舟车劳顿的线下家教转型为线上时时家教。在3个月的时间中，成功开展爱心家教1000余次，遍布上海4个主要城区、3个郊区。</p>
						<p>
							&nbsp&nbsp&nbsp&nbsp在爱心家教系列活动中，海角公益独特的视频教学房间技术获得志愿老师和受助学生的一致好评，实现了68位线下家教用户转至线上，获得前所未有的良好用户反馈。
						</p>
						<p>
							&nbsp&nbsp&nbsp&nbsp爱心家教系列活动还在继续进行中，随着视频房间的不断革新，海角公益将提供更为优质的线上教育体验和更为优质的教学资源。海角公益将继续寻求与更多高校家教部合作的机会，努力为各地区的孩子带去现代式教学体验，更为广大志愿者提供人性化的献爱心平台。
						</p>
						<div class="detail" style="cursor:hand;float: right;margin-right: 80px;margin-bottom: 20px;text-align:center;" onclick="return_back(this)">
							返回
						</div>
					</div>
					<div style="margin:10 10 10 10;font-family:黑体;display:none" id="activity3_div" >
						<h1>海角公益校际远程教学交流成功进行</h1>
						<p>
							&nbsp&nbsp&nbsp&nbsp2014年1月1日起，海角公益组织开始进行校际远程教学交流活动。在活动当中，海角已经覆盖10余所中小学，遍及5个区县，为参与教师提供了便捷、流畅的在线远程教学交流活动新体验，得到了老师们的肯定。
							
						</p>
						<img src="images/activity1.jpg" style="width:500px;margin-left:40px;"/>
						<p>
							&nbsp&nbsp&nbsp&nbsp传统的校际教学交流是教育主管部门为了改变教育资源分配矛盾而提出的措施，是将重点学校与教学力量稍弱的学校进行结对共建。以往的教学交流活动动辄花费半天一天，而很多时间都耗费在路途当中，来回奔波也使参与教师疲惫不堪。随着海角视频教室的正式使用，我们的服务对象不仅仅局限于学生群体，我们也为需要实时视频交流服务的老师带去了切实的便利。
							
						</p>
						<img src="images/activity2.jpg" style="width:500px;margin-left:40px;"/>
						<p>
							&nbsp&nbsp&nbsp&nbsp通过使用海角视频教室，方便城区重点学校的优质课程资源向近郊师资力量稍薄弱的学校流动，节省原本校际教学交流活动时所花费的大量的时间、人力与物力，而教学交流活动的实时互动性不减，同时也能够增加教学交流活动的频率，提高教学交流活动的效率，促进参与教师教学水平的提高。
							
						</p>
						<img src="images/activity3.jpg" style="width:500px;margin-left:40px;"/>
						<p>
							&nbsp&nbsp&nbsp&nbsp未来海角还将与更多的学校联系合作，为改善学校间教育资源分配不均继续努力。
						</p>
						<div class="detail" style="cursor:hand;float: right;margin-right: 80px;margin-bottom: 20px;text-align:center;" onclick="return_back(this)">
							返回
						</div>
					</div>
					<div style="margin:10 10 10 10;font-family:黑体;display:none" id="activity2_div" >
						<h1>筑梦圆梦系列活动顺利举行</h1>
						<p>
							&nbsp&nbsp&nbsp&nbsp2014年7月起，海角公益组织前往吉林、甘肃等地进行线上线下结合的支教实践活动，活动惠及中小学生及在再培训教师超过1000余人。海角公益组织发起了筑梦圆梦系列活动，由这些学生通过海角发布自己的心愿，社会爱心人士可以在海角的爱心墙上认领心愿，从而帮助这些贫困地区的孩子们实现愿望。活动取得了良好的反响。
							
						</p>
						<img src="images/zhumeng1.jpg" style="width:500px;margin-left:40px;"/>
						<p>
							&nbsp&nbsp&nbsp&nbsp海角在前往甘肃等地进行实地支教与远程支教相结合的实践活动过程中发现，贫困地区的孩子们的生活和学习状况还有很多比较艰苦的地方，非常需要我们和社会爱心人士的帮助。他们缺少多媒体设备，很多和电脑相关的课程无法顺利上到；他们的桌椅破旧，木质的桌椅有一些已破洞不堪；他们缺少文具书本，很多的时候需要很节省地去用一根笔……他们的很多心愿很小很小，比如一根笔、一本书……但是这些心愿如果能够满足，这些孩子们就会无比地快乐。因此，海角公益组织用海角平台将孩子们的心愿展示出来，形成一个满满的心愿墙，爱心人士一旦认领后，这个心愿墙也变成了盛满爱心的爱心墙。到目前为止，海角已经帮助数十名学生实现了他们的心愿。
							
						</p>
						<img src="images/zhumeng2.jpg" style="width:500px;margin-left:40px;"/>
						<p>
							&nbsp&nbsp&nbsp&nbsp在未来，海角仍然将这个筑梦圆梦活动继续下去，并不断做大，让爱心通过海角平台得到进一步发扬与传递！
							
						</p>
						<img src="images/zhumeng3.jpg" style="width:500px;margin-left:40px;"/>
						<div class="detail" style="cursor:hand;float: right;margin-right: 80px;margin-bottom: 20px;text-align:center;" onclick="return_back(this)">
							返回
						</div>
					</div>
					<div style="margin:10 10 10 10;font-family:黑体;display:none" id="activity1_div" >
						<h1>在 线 支 教 新 体 验</h1>
							<h2 style="margin-left:100px">——记上海交通大学海角公益组织在线支教活动</h2>

						<p>
							&nbsp&nbsp&nbsp&nbsp2014年7月20日，上海交通大学海角公益组织首期远程乡村教师系列培训课程在海角视频教室中成功开展，为200位来自吉林省集安市15所中小学教师带去远程在线支教新体验。</p>
							<img src="images/yalujiang.jpg" style="width:500px;margin-left:40px;"/>
						<p>
							&nbsp&nbsp&nbsp&nbsp首期课程利用海角自主开发的实时视频远程教室与吉林集安当地连线，由海角公益组织志愿者为参与在线培训的乡村教师讲授一堂基础的学校心理教育课程。课程以《积极心理学在学校心理教育当中的应用》为题，通过介绍当前学校心理健康教育中普遍存在的问题和积极心理学中的相关理论为教师们在课堂教学及班级管理当中的一些常见情况给出一些建议与指导，帮助教师从心理学角度更深入地理解学生、更有力地激发学生学习热情，引导并培养学生积极的心理素质。下图为课程进行中，海角志愿者通过视频教室授课并与参与教师互动。
							
						</p>
						<img src="images/yuanqian.jpg" style="width:500px;margin-left:40px;"/>
						<p>
							&nbsp&nbsp&nbsp&nbsp整堂在线课程通过海角实时视频远程教室得以实现。海角实时视频远程教室以其流畅的使用体验与充分的互动性极大地弥补了以往单纯的视频教育互动性不足的缺陷，提升课堂效果。海角公益组织致力于推广在线支教这一新兴支教模式，通过线下传统支教与线上支教的结合，不但能够丰富支教形式与内容，也能够为参与支教的志愿者提供新的实现途径——打破时间与空间的限制，实现随时随地的支教体验，使得以往短暂的支教活动能够转为长期、系统的知识补充，真实实现为偏远地区带去优质教育资源的公益理想。
						</p>
							
						<p>
							&nbsp&nbsp&nbsp&nbsp课程结束之后，参与教师及集安市教师进修学院院长纷纷表示对于这一新兴的教育方式的青睐，觉得在海角课堂中获得了许多新的知识与思考，将会引领他们在自己的教师岗位上不断进取、不断成长。
						</p>
						<p>
						&nbsp&nbsp&nbsp&nbsp本次海角在线教师培训系列活动得到了集安市教师进修学院的大力支持。首期课程后，海角公益已与集安教师进修学院建立长期合作关系，未来将继续为当地教师带去多样的职业进修资源。
						</p>
						<p>
							&nbsp&nbsp&nbsp&nbsp下图为参与培训教师及集安市教师进修学院院长给予海角公益的部分感谢信与合影。
							<div>
								<img src="images/a5_1.jpg" style="float:left;margin-left:30px;width:250px;" />
								<img src="images/a5_2.jpg" style="float:left;margin-left:40px;width:250px;" />
								<img src="images/a5_3.png" style="float:left;margin-top:40px;margin-left:30px;width:250px;" />
								<img src="images/a5_4.png" style="float:left;margin-top:40px;margin-left:40px;width:250px;" />
							</div>
						</p>
						<div class="detail" style="cursor:hand;float: right;margin-right: 80px;margin-bottom: 20px;text-align:center;" onclick="return_back(this)">
							返回
						</div>
					</div>
					<div style="margin:10 10 10 10;font-family:黑体;display:none" id="activity0_div" >
						<h1>上海交通大学海角公益组织赴甘肃甘谷开展支教</h1>
						<p>
							&nbsp&nbsp&nbsp&nbsp8月8日至15日，来自上海交通大学的海角公益组织从上海出发，经过27个小时的奔波，跨越了超过1713公里的距离，来到甘肃省天水市甘谷县，在总门学校等5所中小学开展支教及走访调研活动。</p>
						<p>
							&nbsp&nbsp&nbsp&nbsp海角公益组织是专注于发展在线支教的公益组织，由上海交通大学在校学生组成。海角公益利用团队自主研发的海角实时视频教室实现了语音与视频实时互动的在线教学，通过简洁的操作完成教学所需的各项功能，保证在线教学高效流畅。
							
						</p>
						<img src="images/shanghai1.jpg" style="width:500px;margin-left:40px;"/>
						<p>
							&nbsp&nbsp&nbsp&nbsp海角公益组织在总门学校开展了为期三天的支教活动，为当地学生开设线下及线上两部分课程，其中线下课程包括英语音标、口语及歌曲学唱，线上课程包括三国选讲、我的大学及机器人入门等。其中，海角独特的线上授课模式以其清晰流畅、互动性强等特点受到同学们的热烈欢迎。丰富多彩的授课内容与生动活泼的授课风格让总门学子真正体验到海角在线支教的全新魅力，同学们在课堂上与线上教师开展实时互动，提升课堂参与度从而保障线上课程的教学效果。短暂而充实的三天支教过程中，海角志愿者老师与当地同学们学在一起、玩在一起，彼此间结下了深厚的友谊，教学效果也得到总门学校校方的高度评价。
						</p>
						<p>
						&nbsp&nbsp&nbsp&nbsp三天活动的结束并不是海角对总门学校支教的结束，线上支教将成为学生们日后日常学习的持续而有益的补充。本次活动中，上海交通大学海角公益组织成功与甘谷县六峰镇的总门九年制学校合作建立了“上海交通大学海角公益组织第一远程支教点”。今后，来自上海交通大学等多所著名高校的志愿教师会通过海角网站与支教学校开展长期、系统的线上支教课程，利用互联网普及的机会为偏远地区的孩子们带去优质教育资源，在学习之路上为他们助力成长。
							
						</p>
						<img src="images/shanghai2.jpg" style="width:500px;margin-left:40px;"/>
						<p>
							&nbsp&nbsp&nbsp&nbsp另外，海角公益组织还走访调研了其他4所甘谷当地中小学，受到校方的热烈欢迎，为将来双方在远程支教方面的进一步合作奠定基础。
						</p>
						<div class="detail" style="cursor:hand;float: right;margin-right: 80px;margin-bottom: 20px;text-align:center;" onclick="return_back(this)">
							返回
						</div>
					</div>
				</div>
			
				
			</div>
<?php
	require("footer.php");
	do_footer();
?>