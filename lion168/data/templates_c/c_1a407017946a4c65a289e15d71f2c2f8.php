<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <title>最新优惠 - 金狮娱乐</title>
    <meta name="keywords" content="keyword ..." />
    <meta name="Description" content="description ..." />
    <!--<link href="favicon.ico" rel="shortcut icon" />-->
    <link href="../css/index/global.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $this->_fetch_compile("index/top.html"); ?>

<div id="maincontent">
 <div id="informscroll">
  <div id="informcontent">
    <?php echo $this->_fetch_compile("index/inc_notice.html"); ?>
    <div class="tel"></div>
    </div>
 </div>
 <div id="listcontent">
   <div class="inners">
    <?php echo $this->_fetch_compile("index/left_menu.html"); ?> 
   <div id="rightcontent">
     <div class="site"><a href="preferential.html">优惠活动</a><span>&gt;</span>最新优惠</div>
     <ul class="list">
       <li>
         <div class="img"><a href="preferential_first.php"><img src="images/youhui/sc.jpg" alt="" border="0" title="" /></a></div>
         <dl>
           <dt><a href="preferential_first.php">30%首次存款优惠活动，最高金额可达88888元。</a></dt>
           <dd>30%首次存款优惠活动，最高金额可达88888元，需要滚动15倍。（活动有效期限：2012年5月1日-2012年6月30日）</dd>
           <dd><div class="more"><a href="preferential_first.php">阅读更多&gt;&gt;</a></div></dd>
         </dl>
         <div class="clear"></div>
       </li>
       <li>
         <div class="img"><a href="preferential_fs.php"><img src="images/youhui/fs.jpg" border="0" alt="" title="" /></a></div>
         <dl>
           <dt><a href="preferential_fs.php">周周返水直逼0.9%不封顶</a></dt>
           <dd>周周返水直逼0.9%不封顶，所获红利需进行全额投注即可申请提款。</dd>
           <dd><div class="more"><a href="preferential_fs.php">阅读更多&gt;&gt;</a></div></dd>
         </dl>
         <div class="clear"></div>
       </li>
       <li>
         <div class="img"><a href="preferential_lsly.php"><img src="images/youhui/lsly.jpg" border="0" alt="" title="" /></a></div>
         <dl>
           <dt><a href="preferential_lsly.php">连赢连输都赠送</a></dt>
           <dd>连赢8局 可获得所赢金额的15%    连输8局 可获得所输金额的10%
连赢10局 可获得所赢金额的20%    连输10局 可获得所输金额的15%
连赢12局 可获得所赢金额的25%    连输12局 可获得所输金额的20%</dd>
           <dd><div class="more"><a href="preferential_lsly.php">阅读更多&gt;&gt;</a></div></dd>
         </dl>
         <div class="clear"></div>
       </li>
       <li>
         <div class="img"><a href="preferential_friend.php"><img src="images/youhui/hytj.jpg" border="0" alt="" title="" /></a></div>
         <dl>
           <dt><a href="preferential_friend.php">好友推荐计划</a></dt>
           <dd>玩家需要通过邮箱发送邮件到金狮国际客服部或者联系我们的在线客服，并注明好友推荐，即可获得被推荐人前三次存款10%， 每次最高888元，被推荐人前三次存款可获得额外5%的存款红利，每次最高可达888元。所获的红利只需达到全额投注即可申请提款。（该优惠活动须与首存优惠活动共同使用）</dd>
           <dd><div class="more"><a href="preferential_friend.php">阅读更多&gt;&gt;</a></div></dd>
         </dl>
         <div class="clear"></div>
       </li>
 
       
     </ul>
   </div>
   <div class="clear"></div>
   </div>
 </div>
</div>
<?php echo $this->_fetch_compile("index/footer.html"); ?> 
 <script type="text/javascript">				
 $(function(){
   //$(".leftcontent dl dd").hide();
   $(".leftcontent dl dt").click(function(){
   $(".leftcontent dl dd").not($(this).next()).hide();
   $(this).next().slideToggle(500); 
    });
 });
 </script>  
</body>
</html>
