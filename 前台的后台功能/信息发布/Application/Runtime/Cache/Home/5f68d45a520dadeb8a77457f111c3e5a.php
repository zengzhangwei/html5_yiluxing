<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/Public/Home/css/person.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Rent/index');?>"><img src="/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
			<ul class="nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
                <li><a href="<?php echo U('Special/index');?>">优惠活动</a></li>
                <li><a href="<?php echo U('Help/index');?>" target="_blank">帮助中心</a></li>
                <li><a href="<?php echo U('Message/index');?>">留言板</a></li>
      		</ul>
            
			<div class="top-right2">
				<div>
					<ul>
                        <li><p>您好！&nbsp;<?php echo ($user['user_name']); ?>&nbsp;&nbsp;&nbsp;<img src="/easygo/Public/Home/images/down.gif" alt="" /></p>
                            <div id="children">
                                <div class="arrow"></div>
                                <ul class="child">
                                    <li id="xu"><a href="<?php echo U('Indent/rentItem');?>" target="_blank">我的订单</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/discount');?>" target="_blank">我的资产</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/personal');?>" target="_blank">我的账户</a></li>
                                    <li><a href="/easygo/index.php/Home/user/logout">退出登录</a></li>
                                </ul>
                            </div>
                        </li>
					</ul>
				</div>
			</div>
		</div>
    </div>
</div>

<div class="content">
	<div class="mybody">
       <div class="left">
       		<div class="person">
            	<div class="person_head">
                	<img src="/easygo/Public/Home/images/user.jpg" class="head_img" width="113" height="113" alt="" />
                    <p><?php echo ($user['user_name']); ?><img src="/easygo/Public/Home/images/card.gif" alt="" /></p>
                    <div class="left_1">
                    	<a href="<?php echo U('Indent/rentItem');?>">
                    	<h4><span>1</span>单</h4>
                        <h4>未完成订单</h4></a>
                    </div>
                    <div class="left_2">
                    	<a href="<?php echo U('Indent/discount');?>">
                    	<h4><span>3</span>张</h4>
                        <h4>优惠券</h4></a>
                    </div>
                </div>
            </div>
            <div class="left_nav">
            	<h1>我的订单</h1>
                <a href="<?php echo U('Indent/rentItem');?>">租车订单(2)</a>
                <a href="<?php echo U('Indent/shareItem');?>">出租订单(6)</a>
                <h1>我的资产</h1>
                <a href="<?php echo U('Indent/discount');?>" class="person_now">优惠券(1张)</a>
                <a href="<?php echo U('Indent/bankCard');?>">银行卡(1张)</a>
                <h1>我的账户</h1>
                <a href="<?php echo U('Indent/personal');?>">个人信息</a>
                <a href="<?php echo U('Indent/alterPwd');?>">修改密码</a>
                <a href="<?php echo U('Indent/myCars');?>">我的座驾</a>
                <h1>我的会员</h1>
                <a href="<?php echo U('Indent/vipLevel');?>">会员等级</a>
                <a href="<?php echo U('Indent/vipSystem');?>">会员制度</a>
            </div>
       </div>
       
       <div class="right">
       		<div class="order yhq">
            	<h1>我的优惠券</h1>
                <div class="tab">
                	<a href="#" class="tabnow">全部</a>
                    <a href="#">已使用</a>
                    <a href="#">未使用</a>
                    <a href="#">已过期</a>
                </div>
                <table cellspacing="0" style="text-align:center;">
                	<tr>
                    	<td width="465px">
                        	<img src="/easygo/Public/Home/images/yhq.jpg" width="408" height="175" />
                            <p class="yhqdate">有效期：2017.05.05-2017.10.05</p>
                        </td>
                        <td>
                        <img src="/easygo/Public/Home/images/yhq.jpg" width="408" height="175" />
                            <p class="yhqdate">有效期：2017.05.05-2017.10.05</p>
                        </td>
                    </tr>
                    <tr>
                    	<td colspan="2" style="text-align:center;height:100px;">
                        	<a href="#" class="page pagenow">1</a>
                            <a href="#" class="page">2</a>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="text">
            	<h1>注意事项</h1>
                <div class="write">
                	1.使用时间
                    <p>以优惠券上指定日期为准。</p>
                    2.使用规则
                    <p>实际租期2天及以上的订单可用，优惠券平日、周末、法定节假日均可使用。</p>
                    <p>不与预付特价、其他优惠活动、优惠类电子券同享。</p>
                    <p>优惠券单次使用1张，仅限本人使用。</p>
                    <p>代金券不可转让、不开发票、不找零、不兑换现金。</p>
                    3.使用范围
                    <p>在易路行平台上登记的所有出租车辆。</p>
                </div>
            </div>
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
			<img src="/easygo/Public/Home/images/QRcode.jpg" width="99px" height="99px"/>
			<h4>关注微信公众号</h4>
		</div>
    <p>Copyright©2017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
    </div>
</div>
</body>
	
<script src="/easygo/Public/Home/js/jquery-1.11.0.min.js" type="text/javascript"></script>
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