<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo/Public/Home/css/index.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/easygo/easygo/Public/Home/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/easygo/easygo/Public/Home/css/demo.css" />

<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/easygo/easygo/Public/Home/css/set1.css" />
<style type="text/css">
    #xu{
        width:104px; 
    }
</style>
</head>

<body>
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/easygo/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
			<ul class="nav">
                <li class="navnow"><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
                <li><a href="<?php echo U('Special/index');?>">优惠活动</a></li>
                <li><a href="<?php echo U('Help/index');?>" target="_blank">帮助中心</a></li>
                <li><a href="<?php echo U('Message/index');?>">留言板</a></li>
      		</ul>
            
			<div class="top-right2">
				<div>
					<ul>
				<?php
 if(!isset($user['user_name'])||$user['user_name']==''){ echo "<a style='color:white' href='".U('user/login')."'>登录</a> | <a style='color:white' href='".U('user/register')."'>注册</a>"; } else{ $str = $user['user_name']; echo "<li><p>您好！&nbsp;$str&nbsp;&nbsp;&nbsp;<img src='/easygo/easygo/Public/Home/images/down.gif' alt='' /></p>
                            <div id='children'>
                                <div class='arrow'></div>
                                <ul class='child'>
                                    <li id='xu'><a href=".U('Indent/rentItem')." target='_blank'>我的订单</a></li>
                                    <li id='xu'><a href=".U('Indent/discount')." target='_blank'>我的资产</a></li>
                                    <li id='xu'><a href=".U('Indent/personal')." target='_blank'>我的账户</a></li>
                                    <li id='xu' style='border:none'><a href='/easygo/easygo/index.php/Home/user/logout'>退出登录</a></li>
                                </ul>
                            </div>
                        </li>"; } ?>
					</ul>
				</div>
			
		</div>
    </div>
</div>

<div class="content">
	<div class="mybody">
        <div class="picshow">
            <div class="pic grid grid1" style="margin:-7px 0 0 0px;">
                <figure class="pic1 effect-roxy" style="width:839px;height:485px;">
                	<img src="/easygo/easygo/Public/Home/images/pic01.jpg" width="839" height="485" />
                    <figcaption>
					<h2>买车太贵了，地铁又很挤，<span>怎么办？</span></h2>
					<p>上易路行，选车约车，一步到位！再也不用担心旅途劳累，想去哪里就去哪里，来
                    一场说走就走的旅行吧！一或二百万人民币的承租人P2P租车责任险，严
                    格的车辆认证与丰富的座驾评价和7x24小时的路援及支持，保障您的出行安全。
                    <a href="<?php echo U('Rent/index');?>">点此租车</a></p>
                    
				</figcaption>	
                </figure>
            </div>
            
            <div class="pic picc grid" style="margin:-7px 0 0 20px;">
                <figure class="pic1 effect-sadie">
                	<img src="/easygo/easygo/Public/Home/images/pic02.jpg" width="341" height="485" />
                    <figcaption>
                        <h2>百余款车型<br /><span>任意租</span></h2>
                        <p>租什么车，租多久，在哪租，由您选择。
我们只租放心的车。</p>
                    </figcaption>
                </figure>
            </div>
            
            <div class="pic grid" style="margin:-7px 0 0 5px;">
                <figure class="pic1 effect-sadie">
                	<img src="/easygo/easygo/Public/Home/images/pic03.jpg" width="341" height="485" />
                    <figcaption>
					<div>
						<h2>让闲置的座驾为您<br /><span>工作</span></h2>
						<p>暂时用不到的爱车，在易路行就可以转化
成您一个月的油费。</p>
					</div>
				</figcaption>
                </figure>
            </div>
            
            <div class="pic picc grid grid1" style="margin:-7px 0 0 -10px;">
                <figure class="pic1 effect-bubba" style="width:839px;height:485px;">
                	<img src="/easygo/easygo/Public/Home/images/pic04.jpg" width="839" height="485" />
                    <figcaption>
					<h2>爱车在家闲着，如何给它一个<span>完美归宿？</span></h2>
					<p>把爱车托放在易路行平台，闲暇时间可以多一份收入。驾客实名认证与第三方个人信用评估，您
                    来决定谁才可以租用您的爱车，完善的交易系统与独有的风控体系，保护您的爱车被正常租用！
                    <a href="<?php echo U('Issue/index');?>">点此出租</a></p>
				</figcaption>
                </figure>
            </div>
        </div>
        <div class="today">
        	<h1>今日推荐</h1>
            <h2>爆款车型特价租，给力优惠不能错过</h2>            
            <div>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i; $a = $e['inf_carphoto']; $arr = explode(",",$a); ?>
            	<div class="car" alt='1'>
            		<a href="<?php echo U('Rent/detail');?>/inf_id/<?php echo ($e['inf_id']); ?>"><img src="/easygo/easygo/Public/<?php echo ($arr[0]); ?>" width="280" height="160"></a>
            		<p>￥&nbsp;<span><?php echo ($e["inf_dayprice"]); ?></span>&nbsp;/天</p>
                    <h3><a href="<?php echo U('Rent/detail');?>/inf_id/<?php echo ($e['inf_id']); ?>"><?php echo ($e["inf_type"]); ?></a><span><?php echo ($e["inf_province"]); ?>·<?php echo ($e["inf_city"]); ?></span></h3>
                    <h4><a href="<?php echo U('Rent/detail');?>/inf_id/<?php echo ($e['inf_id']); ?>"><?php echo ($e["inf_gearbox"]); ?>&nbsp;|&nbsp;<?php echo ($e["inf_displacement"]); ?>&nbsp;|&nbsp;<?php echo ($e["inf_chair"]); ?></a></h4>
            	</div><?php endforeach; endif; else: echo "" ;endif; ?>
                
            </div>
        </div>
    </div>
</div>
<div class="content1">
	<div class="mybody">
    	<div class="lend">
        	<h1>短租自驾</h1>
            <img src="/easygo/easygo/Public/Home/images/car1.jpg" width="200" height="130" />
            <p>一键约车，轻松取还</p>
            <a href="<?php echo U('Rent/index');?>" class="button">我要约车</a>
        </div>
        <div class="lend lend1">
        	<h1>长期租用</h1>
            <img src="/easygo/easygo/Public/Home/images/car2.jpg" width="200" height="130" />
            <p>长期租借，更多优惠</p>
            <a href="<?php echo U('Rent/index');?>" class="button">我要约车</a>
        </div>
        <div class="lend lend1">
        	<h1>闲置出租</h1>
            <img src="/easygo/easygo/Public/Home/images/car3.jpg" width="200" height="130" />
            <p>自家闲置，随时出租</p>
            <a href="<?php echo U('Issue/index');?>" class="button">我要分享</a>
        </div>
        <div class="lend lend1">
        	<h1>租车公司</h1>
            <img src="/easygo/easygo/Public/Home/images/car4.jpg" width="200" height="130" />
            <p>更多客源，更多展示</p>
            <a href="<?php echo U('Issue/index');?>" class="button">我要分享</a>
        </div>
    </div>  
</div>

<div class="footer">
	<div class="mybody">
    	<div class="bottom-ul">
			<ul>
				<li class="bottom-aa">新手上路</li>
				<li><a href="<?php echo U('Help/law');?>">法律解读</a></li>
				<li><a href="<?php echo U('Help/cash');?>">押金政策</a></li>
				<li><a href="<?php echo U('Help/insurance');?>">保险条款</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">服务规则</li>
				<li><a href="<?php echo U('Help/service');?>">服务条款</a></li>
				<li><a href="<?php echo U('Help/passengerDeal');?>">驾客协议</a></li>
				<li><a href="<?php echo U('Help/ownerDeal');?>">车东协议</a></li>
				<li><a href="<?php echo U('Help/rule');?>">平台规则</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">帮助中心</li>
				<li><a href="<?php echo U('Help/reserve');?>">预定取车</a></li>
				<li><a href="<?php echo U('Help/rent');?>">我要出租</a></li>
				<li><a href="<?php echo U('Help/vipService');?>">会员服务</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">联系我们</li>
				<li>客服电话：0311-88888888</li>
				<li>客服电话：0311-88886666</li>
			</ul>
		</div>
        <div class="bottom-right">
			<img src="/easygo/easygo/Public/Home/images/QRcode.jpg" width="99px" height="99px"/>
			<h4>关注微信公众号</h4>
		</div>
    <p>Copyright©2017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
    </div>
</div>
</body>
	
<script src="/easygo/easygo/Public/Home/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
/*页头下拉菜单*/
		$(document).ready(function($) {
			$("li").hover(function() {
    		$(this).children('#children').css('display', 'block');
			}, function() {
   			$(this).children('#children').css('display', 'none');
			});
		});
</script>
</html>