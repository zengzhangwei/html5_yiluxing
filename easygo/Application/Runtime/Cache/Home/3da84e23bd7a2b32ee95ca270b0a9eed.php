<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
	<link href="/easygo/easygo/Public/Home/css/public.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/easygo/easygo/Public/Home/css/helpcenter.css">	
    <script type="text/javascript" src="/easygo/easygo/Public/Home/js/jquery.min.js"></script>
    <style type="text/css">
    :focus{
    	outline:0px #000 auto;/*设置他在有焦点时的样式*/
    }
    </style>
    <script type="text/javascript">
    	/*页头下拉菜单*/
    	$(document).ready(function($) {
    		$("li").hover(function() {
    			$(this).children('#children').css('display', 'block');
    		}, function() {
    			$(this).children('#children').css('display', 'none');
    		});
    	})
		
    	$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});
	</script>
</head>
<body>
<!-- logo -->
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Rent/index');?>"><img src="/easygo/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
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
 if(!isset($_SESSION['id'])||$_SESSION['id']==''){ echo "<a style='color:white' href='".U('user/login')."'>登录</a> | <a style='color:white' href='".U('user/register')."'>注册</a>"; } else{ $str = $user['user_name']; echo "<li><p>您好！&nbsp;$str&nbsp;&nbsp;&nbsp;<img src='/easygo/easygo/Public/Home/images/down.gif' alt='' /></p>
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

<!-- 主要部分-->
<div class="content">
	<div class="banner">
		<div class="find">
			<h1>帮助中心</h1>
            <p>你想知道的，这里都有。了解易路行就在这里</p>
		</div>
	</div>
	<div id="tabs">
		<ul>
			<li class="xs xs1"><a href="<?php echo U('Help/law');?>">新手上路</a></li>
			<li class="fw"><a href="<?php echo U('Help/service');?>">服务规则</a></li>
			<li class="bz"><a href="<?php echo U('Help/index');?>">帮助中心</a></li>

		</ul>
	</div>
<!-- 帮助中心******************************** -->
	<div class="mybody">
    	<div class="left">
            <div class="left_nav">
            	<h1>新手上路</h1>
                <a href="<?php echo U('Help/law');?>">法律解读</a>
                <a href="<?php echo U('Help/cash');?>">押金政策</a>
                <a href="<?php echo U('Help/insurance');?>" class="person_now">保险条款</a>
                <a href="<?php echo U('Help/privacy');?>">隐私协议</a>
            </div>
       </div>
       <div class="right">
       		<h1>驾驶人责任保险条款</h1>
            <div class="text">
				<h1>第一条  本保险合同由保险条款、投保单、保险单、保险凭证以及批单组成。凡涉及本保险合同的约定，均应采用书面形式。</h1>
                <h1>第二条 依法租赁机动车并具有合法机动车驾驶资格的自然人，均可作为本保险合同的被保险人。</h1>
                <h1>第三条  保险期间内，被保险人在驾驶保险单载明的所租赁机动车过程中发生意外事故，导致下列财产损失或人身伤害的，对于依法或依租赁合同应由被保险人承担的经济赔偿责任，且不属于免除保险人责任的范围的，保险人将按照本合同的约定负责赔偿：</h1>
                <p>（一）财产损失，包括：</p>
                <p>1、所租赁机动车辆的直接损毁；</p>
                <p>2、所租赁机动车辆被盗窃、抢劫、抢夺，且经出险当地县级以上公安刑侦部门立案侦查，满60天未查明下落的全车损失；</p>
                <p>3、第三者财产的直接损毁；</p>
                <p>（二）人身伤亡，包括：</p>
                <p>1、第三者的人身伤亡；</p>
                <p>2、所租赁机动车的车上人员的人身伤亡。</p>
                <h1>第四条  保险事故发生后，被保险人因保险事故而被提起仲裁或者诉讼的，对应由被保险人支付的仲裁或诉讼费用以及其它必要的、合理的费用（以下简称“法律费用”），经保险人事先书面同意，保险人按照本保险合同约定也负责赔偿。</h1>
                <h1>第五条  在上述保险责任范围内，下列情况下，不论任何原因造成的人身伤亡、财产损失和费用，保险人均不负责赔偿：</h1>
                <p>（一）事故发生后，被保险人或其允许的驾驶人故意破坏、伪造现场、毁灭证据；</p>
                <p>（二）发生所租赁机动车全车盗抢的，被保险人在索赔时未能提供出险当地县级以上公安刑侦部门出具的盗抢立案证明；</p>
                <p>（三）驾驶人有下列情形之一者：</p>
                <p>1、事故发生后，在未依法采取措施的情况下驾驶所租赁机动车或者遗弃所租赁机动车离开事故现场；</p>
                <p>2、饮酒、吸食或注射毒品、服用国家管制的精神药品或者麻醉药品；</p>
                <p>3、无驾驶证，驾驶证被依法扣留、暂扣、吊销、注销期间；</p>
                <p>4、驾驶与驾驶证载明的准驾车型不相符合的机动车；</p>
                <p>5、非被保险人允许的驾驶人；</p>
                <p>（四）所租赁机动车有下列情形之一者：</p>
                <p>1、发生保险事故时，被保险人所驾驶的所租赁机动车的行驶证、号牌被注销的，或未按规定检验或检验不合格；</p>
                <p>2、被扣押、收缴、没收、政府征用期间；</p>
                <p>3、在竞赛、测试期间，在营业性场所维修、保养、改装期间；</p>
                <p>4、被保险人或其允许的驾驶人故意或重大过失，导致所租赁机动车被利用从事犯罪行为；</p>
                <p>5、全车被盗窃、被抢劫、被抢夺、下落不明期间；</p>
                <p>6、所租赁机动车改变使用性质，被保险人未及时通知保险人，且因改变使用性质导致所租赁机动车危险程度显著增加；</p>
                <p>7、所租赁的非营运机动车被用于营运性运输。</p>
                <h1>第六条  下列原因导致的人身伤亡、财产损失和费用，保险人不负责赔偿：</h1>
                <p>（一）地震及其次生灾害；</p>
                <p>（二）战争、军事冲突、恐怖活动、暴乱、污染（含放射性污染）、核反应、核辐射；</p>
                <p>（三）人工直接供油、高温烘烤、自燃、不明原因火灾；</p>
                <p>（四）被保险人或其允许的驾驶人的故意行为。</p>
                <h1><span>第七条  下列人身伤亡、财产损失和费用，保险人不负责赔偿：</span></h1>
                <p><span>（一）被保险人驾驶所租赁机动车发生意外事故，致使任何单位或个人停业、停驶、停电、停水、停气、停产、通讯或网络中断、电压变化、数据丢失造成的损失以及其他各种间接损失；</span></p>
                <p><span>（二）所租赁机动车和第三者财产因市场价格变动造成的贬值，修理后因价值降低引起的减值损失；</span></p>
                <p><span>（三）所租赁机动车的自然磨损、朽蚀、腐蚀、故障、本身质量缺陷；</span></p>
                <p><span>（四）所租赁机动车的车上零部件、附属设备的丢失，新增设备的损失，发动机进水后导致的发动机损坏；</span></p>
                <p><span>（五）停车费、保管费、扣车费、罚款、罚金或惩罚性赔款；</span></p>
                <p><span>（六）违法、违章搭乘人员的人身伤亡；</span></p>
                <p><span>（七）因诈骗引起的任何损失；因投保人、被保险人、所租赁机动车所有人与他人的民事、经济纠纷导致的任何损失；</span></p>
                <p><span>（八）非全车遭盗窃，仅车上零部件或附属设备被盗窃或损坏；</span></p>
                <p><span>（九）所租赁机动车在全车盗抢期间受到的损坏，或被盗窃、被抢劫、被抢夺未遂受到的损坏；</span></p>
                <p><span>（十）车轮单独损坏，玻璃单独破碎，无明显碰撞痕迹的车身划痕，以及新增设备的损失；</span></p>
                <p><span>（十一）超出《道路交通事故受伤人员临床诊疗指南》和国家基本医疗保险同类医疗费用标准的医疗费用部分；</p>
                <p><span>（十二）律师费，未经保险人事先书面同意的诉讼费、仲裁费；</span></p>
                <p><span>（十三）被保险人知道保险事故发生后，故意或者因重大过失未及时通知，致使保险事故的性质、原因、损失程度等难以确定的，保险人对无法确定的部分，不承担赔偿责任，但保险人通过其他途径已经及时知道或者应当及时知道保险事故发生的除外；</span></p>
                <p><span>（十四）精神损害抚慰金；</span></p>
                <p><span>（十五）应当由机动车交通事故责任强制保险赔偿的损失和费用；保险事故发生时，所租赁机动车未投保机动车交通事故责任强制保险或机动车交通事故责任强制保险合同已经失效的，对于机动车交通事故责任强制保险责任限额以内的损失和费用，保险人不负责赔偿。</span></p>
            </div>
       </div>
    </div>
</div>
<!-- footer -->
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
</html>