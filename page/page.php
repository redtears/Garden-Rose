<?php
	require('../xajax/xajax.inc.php');
	require_once('../include/testajax.php');
	$xajax = new xajax();
	require_once("../include/registerFunction.php");
	$xajax->processRequests();
?>
	
<html>
	<title>玫瑰花苑</title>
	<head>
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<script src="../js/util/util.js"></script>
		<script src="../js/index.js"></script>
		<script src="../js/util/comm.js"></script>
		<script>
			var t_time = 100;
		</script>
		<?php $xajax->printJavascript('../xajax/'); ?>
	</head>
		
	<body>
		<table align="center" valign="top" cellspacing="0" cellpadding="0"  background="../img/page_bg.jpg" height="863px" width="1280px">
			<tr valign="top">
				<td style="padding-left:40px; padding-top:100px" width="350px" height="100px">
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td>&nbsp;</td>
						</tr>
					</table>
				</td>
				<td style="padding-top:85px">
					<table border="0px" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left:70px;">
								<table cellspacing="0" cellpadding="0">
									<tr>
										<td class="td_nav_bar"><a href="../index.php">首页</a></td>
										<td class="td_nav_bar" onclick="alert('aaa');setHiddenValue('subm0hiddenflag','false');showsubMenu(this,'subm0');" onmouseover="setHiddenValue('subm0hiddenflag','false');showsubMenu(this,'subm0');" onmouseout="setHiddenValue('subm0hiddenflag','true');setTimeout('hiddensubMenu(\'subm0\');',t_time);">婚礼服务</td>
										<td class="td_nav_bar" onmouseover="setHiddenValue('subm1hiddenflag','false');showsubMenu(this,'subm1');" onmouseout="setHiddenValue('subm1hiddenflag','true');setTimeout('hiddensubMenu(\'subm1\');',t_time);">主题婚礼</td>
										<td class="td_nav_bar" onmouseover="setHiddenValue('subm2hiddenflag','false');showsubMenu(this,'subm2');" onmouseout="setHiddenValue('subm2hiddenflag','true');setTimeout('hiddensubMenu(\'subm2\');',t_time);">婚纱礼服</td>
										<td class="td_nav_bar" onmouseover="setHiddenValue('subm3hiddenflag','false');showsubMenu(this,'subm3');" onmouseout="setHiddenValue('subm3hiddenflag','true');setTimeout('hiddensubMenu(\'subm3\');',t_time);">摄影写真</td>
										<td class="td_nav_bar" style="border:0px">联系我们</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr valign="top">
				<td valign="top" height="600px">
					<table height="100%" width="100%">
						<tr>
							<td valign="top" style="padding-left:100px;">
								<a href="#" onclick="testAjax(10,2);">ssssssssssssss</a>
								<div onclick="testAjax(10,2);">abcdefg</div>
							</td>
						</tr>
						<tr>
							<td valign="top" style="padding-left:100px;">
								<div>
									<table>
										<tr>
											<td>
												bbbbbbb
											</td>
										</tr>
										<tr>
											<td>
												bbbbbbb
											</td>
										</tr>
										<tr>
											<td>
												bbbbbbb
											</td>
										</tr>
										<tr>
											<td>
												bbbbbbb
											</td>
										</tr>
										<tr>
											<td>
												bbbbbbb
											</td>
										</tr>
										<tr>
											<td>
												bbbbbbb
											</td>
										</tr>
									</table>
								</div>
								
								ssssssssssssss
							</td>
						</tr>						
					</table>
				</td>
				<td valign="top">
					<table height="80%" width="100%">
						<tr>
							<td valign="top">
								<?php 
									$url = $_GET["url"];
									//echo $url;
									require $url;
								?>
							</td>
						</tr>
					</table>
				</td>
			</tr>			
		</table>
		<table align="center" cellspacing="0" cellpadding="0" width="1280px">
			<tr>
				<td class="td_copyright">CopyRight © 2011 </td>
			</tr>
		</table>


		
		<div id="subm0" class="div_sub_menu" onmouseover="setHiddenValue('subm0hiddenflag','false');" onmouseout="setHiddenValue('subm0hiddenflag','true');setTimeout('hiddensubMenu(\'subm0\')',t_time);">
			<table width="100%">
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=0=<?php echo $_language ?>');">婚车</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');">喜宴布置</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=2=<?php echo $_language ?>');">四大金刚</td></tr>
				<tr><td class="submenuitem submenutext" style="border-bottom:0px" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=3=<?php echo $_language ?>');">优惠套餐</td></tr>
			</table>
		</div>
		<div id="subm1" class="div_sub_menu" onmouseover="setHiddenValue('subm1hiddenflag','false');" onmouseout="setHiddenValue('subm1hiddenflag','true');setTimeout('hiddensubMenu(\'subm1\')',t_time);">
			<table width="100%">
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=0=<?php echo $_language ?>');">个性定制</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');">春的脚步</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=2=<?php echo $_language ?>');">夏日香气</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=3=<?php echo $_language ?>');">秋天の童话</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=0=<?php echo $_language ?>');">冬季恋歌</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');">蓝色爱情海</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=2=<?php echo $_language ?>');">恋上薰衣草</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=3=<?php echo $_language ?>');">薄荷之恋</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=0=<?php echo $_language ?>');">金玉满堂</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');">白色圣诞</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=2=<?php echo $_language ?>');">粉色Kitty</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=3=<?php echo $_language ?>');">米奇米妮</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=0=<?php echo $_language ?>');">草坪婚礼</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');" style="border-bottom:0px">中式婚礼</td></tr>
			</table>
		</div>
		<div id="subm2" class="div_sub_menu" onmouseover="setHiddenValue('subm2hiddenflag','false');" onmouseout="setHiddenValue('subm2hiddenflag','true');setTimeout('hiddensubMenu(\'subm2\')',t_time);">
			
			<table width="100%">
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=brand=<?php echo $_language ?>');">齐地纱</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=venue=<?php echo $_language ?>');">拖尾纱</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=city=<?php echo $_language ?>');">晚礼服</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=agency=<?php echo $_language ?>');">伴娘服</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=model=<?php echo $_language ?>');">新郎服</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=model=<?php echo $_language ?>');" style="border-bottom:0px">优惠套餐</td></tr>
			</table>
		</div>
		<div id="subm3" class="div_sub_menu" onmouseover="setHiddenValue('subm3hiddenflag','false');" onmouseout="setHiddenValue('subm3hiddenflag','true');setTimeout('hiddensubMenu(\'subm3\')',t_time);">
			<table width="100%">
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=brand=<?php echo $_language ?>');">婚纱摄影</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=venue=<?php echo $_language ?>');">情侣写真</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=city=<?php echo $_language ?>');" style="border-bottom:0px">儿童写真</td></tr>
			</table>
		</div>		
		<input type="hidden" id="subm0hiddenflag" value="true" />
		<input type="hidden" id="subm1hiddenflag" value="true" />
		<input type="hidden" id="subm2hiddenflag" value="true" />
		<input type="hidden" id="subm3hiddenflag" value="true" />
		
	
	</body>
	<script>
		function testAjax(param1, param2){
			xajax_testAjax(param1, param2);			
		}
	</script>
</html>