<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo/Public/Home/css/message.css" rel="stylesheet" type="text/css" />
<!-- <link href="/easygo/easygo/Public/Home/css/common.css" rel="stylesheet" type="text/css" /> -->
<link href="/easygo/easygo/Public/Home/css/index3.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/easygo/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
			<ul class="nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li class="navnow"><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
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
</div>     
<div class="content">
	<div class="mybody">
       <div class="bread">
       		<p>当前位置：<a href="<?php echo U('Index/index');?>">易路行</a> > <a href="添加座驾1.html">添加座驾</a> - <a href="添加座驾2.html">认证身份</a></p>
       </div>
       <div class="add_bg">
       		<div class="partt part1">
            	<div class="cir2">1</div>&nbsp;&nbsp;提交信息
            </div>
            <div class="part part2">
            	<div class="cir1">2</div>&nbsp;&nbsp;认证身份
            </div>
            <div class="partt part3">
            	<div class="cir2">3</div>&nbsp;&nbsp;完善信息
            </div>
            <div class="partt part4">
            	<div class="cir2">4</div>&nbsp;&nbsp;信息审核
            </div>
       </div>
       <div class="left left2">
       		<table>
            <form method="post" action="/easygo/easygo/index.php/Home/Issue/upload" enctype="multipart/form-data">
            <input name="inf_id" type="text" value="<?php echo ($_GET['inf_id']); ?>" style="display:none">
            	<tr>
                	<th>请上传有效的身份证照片：</th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                	<td style="height:240px;">
                            <!-- <div class="img" style="margin-bottom:10px">
                                <div class="file-box"> 
                                     <img src="/easygo/easygo/Public/Home/images/add_card.jpg" width="360" height="210" />
                                     <input type="file" name="fileField" class="file" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" accept="image/jpeg,image/gif,image/png"/><br />
                                </div>
                            </div> -->

                    <div class="z_photo upimg-div clear" >               
                         <section class="z_file fl">
                            <img src="/easygo/easygo/Public/Home/images/add_card.jpg" width="360" height="210" class="add-img">
                            <input type="file" name="file[]" id="file" class="file"  accept="image/jpg,image/jpeg,image/png,image/bmp" multiple />
                         </section>
                    </div>

                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                	<th colspan="3"><input type="submit" value="点击上传" /></td>
                </tr>
            </form>
            </table>
       </div>

       <aside class="mask works-mask">
            <div class="mask-content">
                <p class="del-p ">您确定要删除作品图片吗？</p>
                <p class="check-p"><span class="del-com wsdel-ok">确定</span><span class="wsdel-no">取消</span></p>
            </div>
        </aside>

       <div class="right">
       		<h1>什么样的车才可以发布？</h1>
            <ul>
            	<li>1.首次注册时间至今不超过10年</li>
                <li>2.行驶里程不超过30万公里</li>
                <li>3.有完备的证件和缴纳交强险</li>
                <li>4.正常保养，车辆清洁</li>
                <li>5.核心部件没有受过重大损伤</li>
            </ul>
            <h1>上线之前应该完善哪些信息</h1>
            <ul>
            	<li>1.座驾的图片，至少需要封面图</li>
                <li>2.座驾的位置，座驾在哪里交车</li>
                <li>3.座驾的证件，行驶证，交强险</li>
                <li>4.座驾的租价，每天租用多少钱</li>
                <li>5.座驾的描述，座驾介绍和特色</li>
            </ul>
       </div>
    </div>  
</div>

<div class="footer">
	<div class="mybody">
    	<div class="bottom-ul">
			<ul>
				<li class="bottom-aa">新手上路</li>
				<li><a href="法律解读.html" target="_blank">法律解读</a></li>
				<li><a href="押金政策.html" target="_blank">押金政策</a></li>
				<li><a href="保险条款.html" target="_blank">保险条款</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">服务规则</li>
				<li><a href="服务条款.html" target="_blank">服务条款</a></li>
				<li><a href="驾客协议.html" target="_blank">驾客协议</a></li>
				<li><a href="车东协议.html" target="_blank">车东协议</a></li>
				<li><a href="平台规则.html" target="_blank">平台规则</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">帮助中心</li>
				<li><a href="预定取车.html" target="_blank">预定取车</a></li>
				<li><a href="我要出租.html" target="_blank">我要出租</a></li>
				<li><a href="会员服务.html" target="_blank">会员服务</a></li>
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
<script>
    var url = "/easygo/easygo/Public/Home";
</script>
<script src="/easygo/easygo/Public/Home/js/imgUp.js" type="text/javascript"></script>
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