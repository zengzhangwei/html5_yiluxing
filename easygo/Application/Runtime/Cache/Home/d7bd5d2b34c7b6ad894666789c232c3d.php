<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo/Public/Home/css/person.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Rent/index');?>"><img src="/easygo/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
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
                        <li><p>您好！&nbsp;<?php echo ($user['user_name']); ?>&nbsp;&nbsp;&nbsp;<img src="/easygo/easygo/Public/Home/images/down.gif" alt="" /></p>
                            <div id="children">
                                <div class="arrow"></div>
                                <ul class="child">
                                    <li id="xu"><a href="<?php echo U('Indent/rentItem');?>" target="_blank">我的订单</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/discount');?>" target="_blank">我的资产</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/personal');?>" target="_blank">我的账户</a></li>
                                    <li><a href="/easygo/easygo/index.php/Home/user/logout">退出登录</a></li>
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
                	<img src="/easygo/easygo/Public/<?php echo ($user["user_head"]); ?>" class="head_img" width="113" height="113" alt="" />
                    <p><?php echo ($user['user_name']); ?><img src="/easygo/easygo/Public/Home/images/card.gif" alt="" /></p>
                    <div class="left_1">
                    	<a href="<?php echo U('Indent/rentItem');?>">
                    	<h4><span><?php echo ($count1); ?></span>单</h4>
                        <h4>未完成订单</h4></a>
                    </div>
                    <div class="left_2">
                    	<a href="<?php echo U('Indent/discount');?>">
                    	<h4><span><?php echo ($discount); ?></span>张</h4>
                        <h4>优惠券</h4></a>
                    </div>
                </div>
            </div>
            <div class="left_nav">
            	<h1>我的订单</h1>
                <a href="<?php echo U('Indent/rentItem');?>">租车订单(<?php echo ($count); ?>)</a>
                <a href="<?php echo U('Indent/shareItem');?>">出租订单(<?php echo ($count2); ?>)</a>
                <h1>我的资产</h1>
                <a href="<?php echo U('Indent/discount');?>">优惠券</a>
                <a href="<?php echo U('Indent/bankCard');?>">银行卡</a>
                <h1>我的账户</h1>
                <a href="<?php echo U('Indent/personal');?>">个人信息</a>
                <a href="<?php echo U('Indent/alterPwd');?>">修改密码</a>
                <a href="<?php echo U('Indent/myCars');?>">我的座驾</a>
                <h1>我的会员</h1>
                <a href="<?php echo U('Indent/vipLevel');?>">会员等级</a>
                <a href="<?php echo U('Indent/vipSystem');?> class="person_now"">会员制度</a>
            </div>
       </div>
       
       <div class="right">
       		<div class="vip">
            	<h1>会员制度</h1>
                <div class="write1">
                	<h2 style="margin-top:0;">第一章 总则</h2>
                    <p>易路行租车以"方便，快捷，安全"为核心服务理念，竭诚为客户提供简单、安全、省钱的租车服务。为明确会员的权利和义务，特制定本章程。</p>
                    <h2>第二章 会员资格</h2>
                    <p>凡年龄在18周岁（含）以上、持有有效证件的客户，均可申请入会。</p>
                  <h2>第三章 会员级别说明</h2>
                  <table cellspacing="0" style="width:930px;">
                    	<tr>
                        	<th class="tableleft">会员</th>
                            <th>普通卡</th>
                            <th>银卡会员</th>
                            <th>金卡会员</th>
                           <th>白金会员</th>
                            <th>钻石会员</th>
                        </tr>
                        <tr>
                        	<td class="tableleft">加入方式</td>
                            <td>免费加入</td>
                            <td colspan="4">累积消费升级</td>
                        </tr>
                        <tr>
                        	<td class="tableleft">有效期</td>
                            <td colspan="5">永久</td>
                        </tr>
                        <tr>
                        	<td class="tableleft">升级条件</td>
                            <td>无</td>
                            <td>累积消费满200元</td>
                            <td>累积消费满1000元</td>
                            <td>累积消费满5000元</td>
                            <td>累积消费满10000元</td>
                        </tr>
                        <tr>
                        	<td class="tableleft">会员折扣</td>
                            <td>无</td>
                            <td>9.5折</td>
                            <td>9.2折</td>
                            <td>8.8折</td>
                            <td>8.5折</td>
                        </tr>
                    </table>
                  <h2>第四章 会员待遇</h2>
                    <p>4.1 不限里程</p>
                  <p>所有级别会员，短租自驾租车均不限行驶里程（有固定里程限制的产品除外）。</p>
                  <p>4.2 租车折扣</p>
                  <p>各级别会员租车后悔根据会员等级不同享有不同折扣的优惠，会员等级越高，折扣越高。</p>
                  <h2>第五章 会员权利与义务</h2>
                  <p>会员资格仅限会员本人使用。</p>
                  <p>5.1 会员权利</p>
                  <p>会员享有使用易路行租车产品和服务的权益。</p>
                    <p>5.2 会员义务</p>
                    <p>5.2.1 会员租车时需遵守易路行租车的产品和服务规定；</p>
                    <p>5.2.2 会员的资料发生变更（如工作变动、住址迁移、联系方式变动或单位名称变更、单位迁址等信息等）时，应及时通知易路行租车；</p>
                    <p>5.2.3 会员授权易路行租车存储会员所提交的个人信息（使用用途为会员与易路行租车之间的汽车租赁业务），并授权易路行租车可能为提供服务及提升服务质量的目的，从商业合作伙伴处获取信息作为补充。神州租车承诺仅在上述用途中使用获取的补充信息。</p>
                  <h2>第六章 附则</h2>
                    <p>6.1 会员体系执行细则》是本章程的有效补充部分。</p>
                    <p>6.2 易路行租车有权在任何时候更改易路行租车会员服务计划的任何规定或终止当年会员服务计划。</p>
                    <p>6.3 本章程由易路行租车制定，易路行租车拥有最终解释权。</p>
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