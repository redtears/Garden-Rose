<?php
	echo $_SERVER['PHP_SELF'];

	
?>
	
<html>
	<title></title>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/index.css">
		<script src="./js/util/util.js"></script>
		<script src="./js/index.js"></script>
		<script src="./js/util/comm.js"></script>
		<script>
			var t_time = 100;
		</script>
	</head>
		
	<body>
		<table align="center" valign="top" cellspacing="0" cellpadding="0"  background="./img/index_bg.jpg" height="863px" width="1280px">
			<tr valign="top">
				<td style="padding-left:40px" width="350px padding-top:100px">
					<table border="1px" cellspacing="0" cellpadding="0">
						<tr>
							<td>&nbsp;</td>
						</tr>
					</table>
				</td>
				<td style="padding-top:85px">
					<table border="0px" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left:70px">
								<table cellspacing="0" cellpadding="0">
									<tr>
										<td class="td_nav_bar">��ҳ</td>
										<td class="td_nav_bar" onclick="alert('aaa');setHiddenValue('subm0hiddenflag','false');showsubMenu(this,'subm0');" onmouseover="setHiddenValue('subm0hiddenflag','false');showsubMenu(this,'subm0');" onmouseout="setHiddenValue('subm0hiddenflag','true');setTimeout('hiddensubMenu(\'subm0\');',t_time);">�������</td>
										<td class="td_nav_bar" onmouseover="setHiddenValue('subm1hiddenflag','false');showsubMenu(this,'subm1');" onmouseout="setHiddenValue('subm1hiddenflag','true');setTimeout('hiddensubMenu(\'subm1\');',t_time);">�������</td>
										<td class="td_nav_bar" onmouseover="setHiddenValue('subm2hiddenflag','false');showsubMenu(this,'subm2');" onmouseout="setHiddenValue('subm2hiddenflag','true');setTimeout('hiddensubMenu(\'subm2\');',t_time);">��ɴ���</td>
										<td class="td_nav_bar" onmouseover="setHiddenValue('subm3hiddenflag','false');showsubMenu(this,'subm3');" onmouseout="setHiddenValue('subm3hiddenflag','true');setTimeout('hiddensubMenu(\'subm3\');',t_time);">��Ӱд��</td>
										<td class="td_nav_bar" style="border:0px">��ϵ����</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>			
		</table>
		
		<div id="subm0" class="div_sub_menu" onmouseover="setHiddenValue('subm0hiddenflag','false');" onmouseout="setHiddenValue('subm0hiddenflag','true');setTimeout('hiddensubMenu(\'subm0\')',t_time);">
			<table width="100%">
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('page/page.php?url=cars.php');">�鳵</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');">ϲ�粼��</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=2=<?php echo $_language ?>');">�Ĵ���</td></tr>
				<tr><td class="submenuitem submenutext" style="border-bottom:0px" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=3=<?php echo $_language ?>');">�Ż��ײ�</td></tr>
			</table>
		</div>
		<div id="subm1" class="div_sub_menu" onmouseover="setHiddenValue('subm1hiddenflag','false');" onmouseout="setHiddenValue('subm1hiddenflag','true');setTimeout('hiddensubMenu(\'subm1\')',t_time);">
			<table width="100%">
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=0=<?php echo $_language ?>');">���Զ���</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');">���ĽŲ�</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=2=<?php echo $_language ?>');">��������</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=3=<?php echo $_language ?>');">�����ͯ��</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=0=<?php echo $_language ?>');">��������</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');">��ɫ���麣</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=2=<?php echo $_language ?>');">����޹�²�</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=3=<?php echo $_language ?>');">����֮��</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=0=<?php echo $_language ?>');">��������</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');">��ɫʥ��</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=2=<?php echo $_language ?>');">��ɫKitty</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=3=<?php echo $_language ?>');">��������</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=0=<?php echo $_language ?>');">��ƺ����</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('aboutus=1=<?php echo $_language ?>');" style="border-bottom:0px">��ʽ����</td></tr>
			</table>
		</div>
		<div id="subm2" class="div_sub_menu" onmouseover="setHiddenValue('subm2hiddenflag','false');" onmouseout="setHiddenValue('subm2hiddenflag','true');setTimeout('hiddensubMenu(\'subm2\')',t_time);">
			
			<table width="100%">
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=brand=<?php echo $_language ?>');">���ɴ</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=venue=<?php echo $_language ?>');">��βɴ</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=city=<?php echo $_language ?>');">�����</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=agency=<?php echo $_language ?>');">�����</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=model=<?php echo $_language ?>');">���ɷ�</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=model=<?php echo $_language ?>');" style="border-bottom:0px">�Ż��ײ�</td></tr>
			</table>
		</div>
		<div id="subm3" class="div_sub_menu" onmouseover="setHiddenValue('subm3hiddenflag','false');" onmouseout="setHiddenValue('subm3hiddenflag','true');setTimeout('hiddensubMenu(\'subm3\')',t_time);">
			<table width="100%">
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=brand=<?php echo $_language ?>');">��ɴ��Ӱ</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=venue=<?php echo $_language ?>');">����д��</td></tr>
				<tr><td class="submenuitem submenutext" onmouseover="this.style.backgroundColor='red';"onmouseout="this.style.backgroundColor='';" onclick="urlredirect('groups=city=<?php echo $_language ?>');" style="border-bottom:0px">��ͯд��</td></tr>
			</table>
		</div>		
		<input type="hidden" id="subm0hiddenflag" value="true" />
		<input type="hidden" id="subm1hiddenflag" value="true" />
		<input type="hidden" id="subm2hiddenflag" value="true" />
		<input type="hidden" id="subm3hiddenflag" value="true" />
	
	</body>
</html>