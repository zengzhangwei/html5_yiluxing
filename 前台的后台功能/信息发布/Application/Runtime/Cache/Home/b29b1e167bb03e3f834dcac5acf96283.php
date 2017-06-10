<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/Public/Home/css/carlist.css" rel="stylesheet" type="text/css" />
<script src="/easygo/Public/Home/js/jquery.min.js"></script>
<script src="/easygo/Public/Home/js/select.js"></script>
</head>

<body>
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
			<ul class="nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li class="navnow"><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
                <li><a href="<?php echo U('Special/index');?>">优惠活动</a></li>
                <li><a href="<?php echo U('Help/index');?>" target="_blank">帮助中心</a></li>
                <li><a href="<?php echo U('Message/index');?>">留言板</a></li>
      		</ul>
            
			<div class="top-right2">
				<div>
					<ul>
                        <?php
 if(!isset($user['user_name'])||$user['user_name']==''){ echo "<a style='color:white' href='".U('user/login')."'>登录</a> | <a style='color:white' href='".U('user/register')."'>注册</a>"; } else{ $str = $user['user_name']; echo "<li><p>您好！&nbsp;$str&nbsp;&nbsp;&nbsp;<img src='/easygo/Public/Home/images/down.gif' alt='' /></p>
                            <div id='children'>
                                <div class='arrow'></div>
                                <ul class='child'>
                                    <li id='xu'><a href=".U('Indent/rentItem')." target='_blank'>我的订单</a></li>
                                    <li id='xu'><a href=".U('Indent/discount')." target='_blank'>我的资产</a></li>
                                    <li id='xu'><a href=".U('Indent/personal')." target='_blank'>我的账户</a></li>
                                    <li id='xu' style='border:none'><a href='/easygo/index.php/Home/user/logout'>退出登录</a></li>
                                </ul>
                            </div>
                        </li>"; } ?>
					</ul>
				</div>
			</div>
		</div>
    </div>

<!-- 主要部分-->
<div class="content">
	<div class="mybody2">
		<div class="bread">
       		<p>当前位置：<a href="<?php echo U('Index/index');?>">易路行</a> > <a href="自驾租车.html">自驾租车</a></p>
       </div>
		<div class="middle-top">
			<form>
				您的位置：<input type="text" name="address"/>
				取车时间：<input id="time" type="date" name="taketime"/>
				还车时间：<input id="time" type="date" name="returntime"/>
				<input type="submit" value="搜索">
			</form>
		</div>
		<!-- ************************************* -->
		<div class="middle-left">
		<div class="tao">
			<ul class="select">
				<li class="select-list">
					<dl id="select1">
						<dt>品牌：</dt>
						<dd class="select-all selected"><a href="javascript:void(0)">全部</a></dd>
						<dd><a href="javascript:void(0)">玛莎拉蒂</a></dd>
						<dd><a href="javascript:void(0)">大众</a></dd>
						<dd><a href="javascript:void(0)">一汽马自达</a></dd>
						<dd><a href="javascript:void(0)">英菲尼迪</a></dd>
						<dd><a href="javascript:void(0)">标致</a></dd>
						<dd><a href="javascript:void(0)">斯柯达</a></dd>
						<dd><a href="javascript:void(0)">MG</a></dd>
						<dd><a href="javascript:void(0)">荣威</a></dd>
						<dd><a href="javascript:void(0)">别克</a></dd>
						<dd><a href="javascript:void(0)">东风</a></dd>
						<dd><a href="javascript:void(0)">本田</a></dd>
						<dd><a href="javascript:void(0)">雪弗兰</a></dd>
						<dd><a href="javascript:void(0)">宝马</a></dd>
						<dd><a href="javascript:void(0)">上汽大众</a></dd>
						<dd><a href="javascript:void(0)">绅宝</a></dd>
						<dd><a href="javascript:void(0)">沃尔沃</a></dd>
						<dd><a href="javascript:void(0)">路虎</a></dd>
						<dd><a href="javascript:void(0)">现代</a></dd>
						<dd><a href="javascript:void(0)">丰田</a></dd>
						<dd><a href="javascript:void(0)">起亚</a></dd>
						<dd><a href="javascript:void(0)">福特</a></dd>
						<dd><a href="javascript:void(0)">捷豹</a></dd>
						<dd><a href="javascript:void(0)">日产</a></dd>
						<dd><a href="javascript:void(0)">奥迪</a></dd>
						<dd><a href="javascript:void(0)">奔驰</a></dd>
						<dd><a href="javascript:void(0)">凯迪拉克</a></dd>
						<dd><a href="javascript:void(0)">纳智捷</a></dd>
						<dd><a href="javascript:void(0)">江淮</a></dd>
						<dd><a href="javascript:void(0)">江铃</a></dd>
						<dd><a href="javascript:void(0)">马自达</a></dd>
						<dd><a href="javascript:void(0)">东南</a></dd>
						<dd><a href="javascript:void(0)">哈弗</a></dd>
						<dd><a href="javascript:void(0)">金杯</a></dd>
						<dd><a href="javascript:void(0)">比亚迪</a></dd>
						<dd><a href="javascript:void(0)">广汽传祺</a></dd>
						<dd><a href="javascript:void(0)">克莱斯勒</a></dd>
					</dl>
				</li>
				<li class="select-list">
					<dl id="select2">
						<dt>价格：</dt>
						<dd class="select-all selected"><a href="javascript:void(0)">全部</a></dd>
						<dd><a href="javascript:void(0)">200元以下</a></dd>
						<dd><a href="javascript:void(0)">200-400元</a></dd>
						<dd><a href="javascript:void(0)">400-600元</a></dd>
						<dd><a href="javascript:void(0)">600元以上</a></dd>

					</dl>
				</li>
				<li class="select-list">
					<dl id="select3">
						<dt>排挡：</dt>
						<dd class="select-all selected"><a href="javascript:void(0)">全部</a></dd>
						<dd><a href="javascript:void(0)">手动</a></dd>
						<dd><a href="javascript:void(0)">自动</a></dd>
						<dd><a href="javascript:void(0)">手自一体</a></dd>
					</dl>
				</li>
				<li class="select-list">
					<dl id="select4">
						<dt>座位：</dt>
						<dd class="select-all selected"><a href="javascript:void(0)">全部</a></dd>
						<dd><a href="javascript:void(0)">2座</a></dd>
						<dd><a href="javascript:void(0)">4座</a></dd>
						<dd><a href="javascript:void(0)">5座</a></dd>
						<dd><a href="javascript:void(0)">7座</a></dd>
					</dl>
				</li>
				<!-- <li class="select-result">
					<dl>
						<dt>已选：</dt>
						<dd class="select-no">暂时没有选择过滤条件</dd>
					</dl>
				</li> -->
			</ul>
			<div class="xv">
			<a>价格从低到高</a>
			</div>
			<table>
				<tr>
					<td style="width:160px;"><a href="<?php echo U('Rent/detail');?>" target="_blank"><img src="/easygo/Public/Home/images/carlist.png" width="150" height="92"></a></td>
					<td style="width:290px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank"><p class="QQ">奇瑞QQ&nbsp;&nbsp;2012</p>
						<p class="qq">张先生的奇瑞QQ 1.0L 手动挡 起航型</p>
						<p class="qq">河北石家庄·裕华区</p></a>
					</td>
					<td class="price" style="width:240px;">
						<p>98元/天</p>
					</td>
					<td style="width:130px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank" class="go">我要租</a>
					</td>
				</tr>
                <tr>
					<td style="width:160px;"><a href="<?php echo U('Rent/detail');?>" target="_blank"><img src="/easygo/Public/Home/images/carlist.png" width="150" height="92"></a></td>
					<td style="width:290px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank"><p class="QQ">奇瑞QQ&nbsp;&nbsp;2012</p>
						<p class="qq">张先生的奇瑞QQ 1.0L 手动挡 起航型</p>
						<p class="qq">河北石家庄·裕华区</p></a>
					</td>
					<td class="price" style="width:240px;">
						<p>98元/天</p>
					</td>
					<td style="width:130px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank" class="go">我要租</a>
					</td>
				</tr>
                <tr>
					<td style="width:160px;"><a href="<?php echo U('Rent/detail');?>" target="_blank"><img src="/easygo/Public/Home/images/carlist.png" width="150" height="92"></a></td>
					<td style="width:290px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank"><p class="QQ">奇瑞QQ&nbsp;&nbsp;2012</p>
						<p class="qq">张先生的奇瑞QQ 1.0L 手动挡 起航型</p>
						<p class="qq">河北石家庄·裕华区</p></a>
					</td>
					<td class="price" style="width:240px;">
						<p>98元/天</p>
					</td>
					<td style="width:130px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank" class="go">我要租</a>
					</td>
				</tr>
                <tr>
					<td style="width:160px;"><a href="<?php echo U('Rent/detail');?>" target="_blank"><img src="/easygo/Public/Home/images/carlist.png" width="150" height="92"></a></td>
					<td style="width:290px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank"><p class="QQ">奇瑞QQ&nbsp;&nbsp;2012</p>
						<p class="qq">张先生的奇瑞QQ 1.0L 手动挡 起航型</p>
						<p class="qq">河北石家庄·裕华区</p></a>
					</td>
					<td class="price" style="width:240px;">
						<p>98元/天</p>
					</td>
					<td style="width:130px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank" class="go">我要租</a>
					</td>
				</tr>
                <tr>
					<td style="width:160px;"><a href="<?php echo U('Rent/detail');?>" target="_blank"><img src="/easygo/Public/Home/images/carlist.png" width="150" height="92"></a></td>
					<td style="width:290px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank"><p class="QQ">奇瑞QQ&nbsp;&nbsp;2012</p>
						<p class="qq">张先生的奇瑞QQ 1.0L 手动挡 起航型</p>
						<p class="qq">河北石家庄·裕华区</p></a>
					</td>
					<td class="price" style="width:240px;">
						<p>98元/天</p>
					</td>
					<td style="width:130px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank" class="go">我要租</a>
					</td>
				</tr>
                <tr>
					<td style="width:160px;"><a href="<?php echo U('Rent/detail');?>" target="_blank"><img src="/easygo/Public/Home/images/carlist.png" width="150" height="92"></a></td>
					<td style="width:290px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank"><p class="QQ">奇瑞QQ&nbsp;&nbsp;2012</p>
						<p class="qq">张先生的奇瑞QQ 1.0L 手动挡 起航型</p>
						<p class="qq">河北石家庄·裕华区</p></a>
					</td>
					<td class="price" style="width:240px;">
						<p>98元/天</p>
					</td>
					<td style="width:130px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank" class="go">我要租</a>
					</td>
				</tr>
                <tr>
					<td style="width:160px;"><a href="<?php echo U('Rent/detail');?>" target="_blank"><img src="/easygo/Public/Home/images/carlist.png" width="150" height="92"></a></td>
					<td style="width:290px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank"><p class="QQ">奇瑞QQ&nbsp;&nbsp;2012</p>
						<p class="qq">张先生的奇瑞QQ 1.0L 手动挡 起航型</p>
						<p class="qq">河北石家庄·裕华区</p></a>
					</td>
					<td class="price" style="width:240px;">
						<p>98元/天</p>
					</td>
					<td style="width:130px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank" class="go">我要租</a>
					</td>
				</tr><tr>
					<td style="width:160px;"><a href="<?php echo U('Rent/detail');?>" target="_blank"><img src="/easygo/Public/Home/images/carlist.png" width="150" height="92"></a></td>
					<td style="width:290px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank"><p class="QQ">奇瑞QQ&nbsp;&nbsp;2012</p>
						<p class="qq">张先生的奇瑞QQ 1.0L 手动挡 起航型</p>
						<p class="qq">河北石家庄·裕华区</p></a>
					</td>
					<td class="price" style="width:240px;">
						<p>98元/天</p>
					</td>
					<td style="width:130px;">
						<a href="<?php echo U('Rent/detail');?>" target="_blank" class="go">我要租</a>
					</td>
				</tr>
			</table>
			<div class="fan">
				<a href="#" class="page pagenow">1</a>
                <a href="#" class="page">2</a>
			</div>
		</div>
		</div>
		<!-- ************************************* -->
		<div class="middle-right">
			<div class="tao2">
			<h1>什么样的车才可以发布？</h1>
            <ul>
            	<li><a href="帮助中心.html" target="_blank">1.客户具备什么条件可以享受租车服务？</a></li>
                <li><a href="帮助中心.html" target="_blank">2.哪些身份证明可以作为租车的身份证件？</a></li>
                <li><a href="帮助中心.html" target="_blank">3.每天的租车次数有限制吗？</a></li>
                <li><a href="帮助中心.html" target="_blank">4.还车时需要走什么手续？</a></li>
                <li><a href="帮助中心.html" target="_blank">5.还车时油箱不满该怎么处理？</a></li>
                <li><a href="帮助中心.html" target="_blank">6.车辆超时还车怎么计算费用？</a></li>
                <li><a href="帮助中心.html" target="_blank">7.租用车辆必须支付保险费用吗？</a></li>
                <li><a href="帮助中心.html" target="_blank">8.如果车辆在使用过程中出现故障该如何处理？</a></li>
                <li><a href="帮助中心.html" target="_blank">9.怎样升级会员级别？</a></li>
                <li><a href="帮助中心.html" target="_blank">10.会员有哪些服务？</a></li>
            </ul>
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
</html>