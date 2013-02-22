<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta charset="utf-8" />
    <title>Sky133-优惠活动</title>
    <meta name="keywords" content="keyword ..." />
    <meta name="Description" content="description ..." />
    <!--<link href="favicon.ico" rel="shortcut icon" />-->
    <link href="css/global.css" rel="stylesheet" type="text/css" />
    <link href="js/datePicker/datePicker-min.css" type="text/css" rel="stylesheet" />
    <style type="text/css">
    	.passwordStrength{
		
		}
		.passwordStrength b{
			font-weight:normal;
		}
		.passwordStrength b,.passwordStrength span{
			display:inline-block; 
			vertical-align:middle;
			line-height:16px;
			line-height:18px\9;
			height:16px;
		}
		.passwordStrength span{
			width:45px; 
			text-align:center; 
			background-color:#000000; 
			border-right:1px solid #fff;
		}
		.passwordStrength .last{
			border-right:none;
		}
		.passwordStrength .bgStrength{
			color:#fff;
			background-color:#71b83d;
		}
    	
    </style>
</head>
<body>
<div id="header">
  <h1 id="logo"><a href="#">Sky133</a></h1>
  <div class="service"><a href="#">客服</a></div>
  <div id="login">
    <div class="img"><a href="#"><img src="pic/member.jpg" alt="" title="" /></a></div>
    <div class="info">
     <div class="item"><input type="text" class="text" /><input type="text" class="text" /></div>
     <div class="item"><a href="#" class="regbtn"></a><a href="#" class="getpsw"></a></div>
    </div>
    <input type="button" class="loginbtn" value="" />
  </div>
  <div id="nav">
    <ul>
      <li><a href="#">真人赌场</a></li>
      <li><a href="#">老虎机</a></li>
      <li><a href="#">彩票</a></li>
      <li><a href="#">体育</a></li>
      <li><a href="#">优惠</a></li>
      <li class="en"><a href="#">English</a></li>
    </ul>
  </div>
</div>
<div id="maincontent">
  <div id="leftcontent">
    <div class="quickmenu">
    <div class="inner">
      <h3>快捷菜单</h3>
      <ul class="list">
       <li><a href="#">找回密码</a></li>
       <li><a href="#">会员特权</a></li>
       <li><a href="#">隐私保密</a></li>
       <li><a href="#">返水优惠</a></li>
      </ul>
      <div class="b"></div>
     </div>
    </div>
    <div class="sharecontent">
    <!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a class="bds_qzone"></a>
<a class="bds_tsina"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<!--<a class="bds_t163"></a>-->
<span class="bds_more"></span>
<!--<a class="shareCount"></a>-->
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->
    </div>
  </div>
  <div id="rightcontent">
    <div class="tabs">
      <strong>会员注册</strong>
      <!--
      <ul>
        <li class="current"><a href="#">电动老虎机</a></li>
        <li><a href="#">纸牌游戏</a></li>
        <li><a href="#">刮刮乐</a></li>
        <li><a href="#">桌面游戏</a></li>
        <li><a href="#">其他游戏</a></li>           
      </ul>
      -->
    </div>
    <div id="newaddcontent">
      <div class="title">注册会员</div>
      <div id="regcontent">
      <form id="frmMain" name="frmMain" class="registerform" method="post" action="">
        	<fieldset>
  				<legend><label>登陆信息</label></legend>
  				<div class="table">
  				<table cellpadding="0" cellspacing="0">
  				  <tr>
                    <td class="need" style="width:10px;">*</td>
                    <td style="width:70px;">昵称：</td>
                    <td style="width:280px;"><input type="text" id = "username" value="" name="UserName" class="inputxt" datatype="s6-18" nullmsg="请输入您的昵称！" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeyup="value=value.replace(/[\W]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"  errormsg="昵称至少6个字符,最多18个字符！" /></td>
                    <td>
                    	<div class="Validform_checktip"></div>
                        <div class="info">昵称至少6个字符,最多18个字符</div>
                    </td>
                   </tr>
                   <tr>
                    <td style="width:10px;" class="need">*</td>
                    <td style="width:70px;">密码：</td>
                    <td style="width:210px;">
                        <input type="password" errormsg="密码至少6个字符,最多18个字符！" nullmsg="请输入密码！" datatype="*6-18" plugin="passwordStrength" class="inputxt" name="Password" value="">
                   		 <div class="passwordStrength">密码强度： <span>弱</span><span>中</span><span class="last">强</span></div>
                    </td>
                    <td>
                        <div class="Validform_checktip"></div>
                        <div class="info">密码至少6个字符,最多18个字符</div>
                    </td>
                </tr>
                   <tr>
                    <td class="need">*</td>
                    <td>确认密码：</td>
                    <td><input type="password" errormsg="两次输入的密码不一致！" nullmsg="请确认密码！" datatype="*6-18" recheck="Password" class="inputxt" name="repassword" value=""></td>
                    <td>
                    	<div class="Validform_checktip"></div>
                    	<div class="info">请确认您的密码</div>
                    </td>
                </tr>
  				</table>
  				</div>
         </fieldset>
        	<fieldset>
  				<legend><label>联系信息</label></legend>
  				<div class="table">
  				<table cellpadding="0" cellspacing="0">
  				  <tr>
                    <td class="need">*</td>
                    <td>移动电话：</td>
                    <td><input type="text" errormsg="手机号格式不正确！" nullmsg="请输入您的手机号码！" datatype="m" class="inputxt" name="userTel" value=""></td>
                    <td>
                    	<div class="Validform_checktip"></div>
                        <div class="info">请输入您的手机号码</div>
                    </td>
                </tr>
                   <tr>
                    <td class="need" style="width:10px;">*</td>
                    <td style="width:70px;">邮箱地址：</td>
                    <td style="width:280px;"><input type="text" value="" name="email" class="inputxt" datatype="e" nullmsg="请输入您的邮箱地址！" errormsg="邮箱格式不正确" /></td>
                    <td>
                    	<div class="Validform_checktip"></div>
                        <div class="info">邮箱地址为空！</div>
                    </td>
                   </tr>
  				</table>
  				</div>
          </fieldset>
          <fieldset>
  				<legend><label>个人信息</label></legend>   
  				<div class="table">
  				<table cellpadding="0" cellspacing="0">
  				  <tr>
                    <td class="need" style="width:10px;">*</td>
                    <td style="width:70px;">真实姓名：</td>
                    <td style="width:280px;"><input type="text" value="" name="TrueName" class="inputxt" datatype="z2-4" nullmsg="请输入您的真实姓名！" errormsg="真实姓名至少2个汉字！" /></td>
                    <td>
                    	<div class="Validform_checktip"></div>
                        <div class="info">真实姓名至少2个汉字！</div>
                    </td>
                   </tr>
                   <tr>
                    <td class="need" style="width:10px;">*</td>
                    <td style="width:70px;">出生日期：</td>
                    <td style="width:280px;">
                    	<input type="text" value="" name="birthday" class="inputxt" plugin="datepicker" datatype="date"  nullmsg="请选择日期！" errormsg="日期格式错误！" />
                    </td>
                    <td>
                    	<div class="Validform_checktip"></div>
                        <div class="info">请选择出生年月日！</div>
                    </td>
                   </tr>
                   <tr>
                    <td class="need" style="width:10px;">*</td>
                    <td style="width:70px;">性别：</td>
                    <td style="width:280px;"><span class="radiolist"><input name="gender"  datatype="*" type="radio" checked class="radio" />男&nbsp;&nbsp;&nbsp;&nbsp;<input name="gender" type="radio" class="radio"  datatype="*" />女</span></td>
                    <td>
                    	<div class="Validform_checktip"></div>
                        <div class="info">请告诉我们您的性别符</div>
                    </td>
                   </tr>
  				</table>
  				</div>
                 </fieldset>
                 <ul>
                 <li class="btnli"><input type="hidden" value="save" name="action"><input type="button" id="sub" class="btn" value="提交" /><input type="reset" class="btn" value="重置" /></li>
                 </ul>    
                 </form>         
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<div id="friendlink">
 <ul>
   <li><a href="#"><img src="image/friendlink01.jpg" alt="" title="" /></a></li>
   <li><a href="#"><img src="image/friendlink02.jpg" alt="" title="" /></a></li>
   <li><a href="#"><img src="image/friendlink03.jpg" alt="" title="" /></a></li>
   <li><a href="#"><img src="image/friendlink04.jpg" alt="" title="" /></a></li>
   <li class="split"></li>
   <li><a href="#"><img src="image/friendlink05.jpg" alt="" title="" /></a></li>
   <li><a href="#"><img src="image/friendlink06.jpg" alt="" title="" /></a></li>
 </ul>
</div>
<div id="footer">
  <div class="menu"><a href="#">关于我们</a><a href="#">代理合作</a><a href="#">责任博彩</a><a href="#">规则条款</a><a href="#">隐私政策</a><a href="#">站点地图</a></div>
  <div class="copy">Copyright <span>&copy;</span> 2012, Sky133. All Rights Reserved.</div>
</div>
<script language="javascript" type="text/javascript" src="js/jquery-1.js"></script>
<script language="javascript" type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/Validform_v5.js"></script>
<script type="text/javascript" src="js/passwordStrength-min.js"></script>
<script type="text/javascript" src="js/datePicker/jquery.datePicker-min.js"></script>

<!--
<script language="javascript" type="text/javascript"  src="js/common.js"></script>
<script language="javascript" type="text/javascript"  src="js/main.js"></script>
<script language="javascript" type="text/javascript"  src="js/public.js"></script>
<script language="javascript" type="text/javascript"  src="js/usercheck.js"></script>
<script language="javascript" type="text/javascript"  src="js/check.js"></script>
<script language="javascript" src="js/date.js"></script> -->
<script type="text/javascript">
$(function(){
	var getInfoObj=function(){
			return 	$(this).parents("td").next().find(".info");
		}
	
	$("[datatype]").focusin(function(){
		if(this.timeout){clearTimeout(this.timeout);}
		var infoObj=getInfoObj.call(this);
		if(infoObj.siblings(".Validform_right").length!=0){
			return;	
		}
		infoObj.show().siblings().hide();
		
	}).focusout(function(){
		var infoObj=getInfoObj.call(this);
		this.timeout=setTimeout(function(){
			infoObj.hide().siblings(".Validform_wrong,.Validform_loading").show();
		},0);
		
	});
	
	var validForm = $(".registerform").Validform({
		tiptype:2,
		datatype:{
			"z2-4" : /^[\u4E00-\u9FA5\uf900-\ufa2d]{2,100}$/,
			"date": /^(?:(?!0000)[0-9]{4}([-/.]?)(?:(?:0?[1-9]|1[0-2])\1(?:0?[1-9]|1[0-9]|2[0-8])|(?:0?[13-9]|1[0-2])\1(?:29|30)|(?:0?[13578]|1[02])\1(?:31))|(?:[0-9]{2}(?:0[48]|[2468][048]|[13579][26])|(?:0[48]|[2468][048]|[13579][26])00)([-/.]?)0?2\2(?:29))$/
		},
		usePlugin:{
			passwordstrength:{
				minLen:6,
				maxLen:18
			},
			datepicker:{
				format:"yyyy-mm-dd",//指定输出的时间格式;
				firstDayOfWeek:1,//指定每周开始的日期，0、1-6 对应 周日、周一到周六;
				callback:function(date,obj){//指定选择日期后的回调函数;
					//date:选中的日期;
					//obj:当前表单元素;
					//$("#msgdemo2").text(date+" is selected");
				},
				//以上三个参数是在Validform插件内调用Datepicker时可传入的参数;
				//下面几个参数是Datepicker插件本身初始化时可接收的参数，还有更多请查看页面说明;
				clickInput:true,
				startDate:"1970-00-00",
				createButton:false
			}

		}
	});
	
	$("#sub").click(function(){
		if(validForm.check(false)){
			//提交表单  自定义ajax 灵活
			//$.post("url",$("#frmMain").serialize(),function(data){//callback});
			$("#frmMain").submit();
		}
	});
});

</script>
</body>
</html>
