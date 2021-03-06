<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>易路行后台管理系统</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="/easygo/5.15_5.21/easygo/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/easygo/5.15_5.21/easygo/Public/Admin/css/style.css" rel="stylesheet">
    <link href="/easygo/5.15_5.21/easygo/Public/Admin/css/page.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <div class="row header">
        <h1>易路行后台管理系统<span>欢迎您，<?php echo ($_SESSION['username']); ?>！<a href="/easygo/5.15_5.21/easygo/index.php/Admin/Admin/logout">退出</a></span></h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row content">
        <div class="col-md-2 col-xs-2 left">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title con">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">订单管理</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/Indent/index');?>">订单列表</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title question">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">车辆列表</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/Cars/check');?>">车辆审核</a></li>
                                <li  class="linow"><a href="<?php echo U('Admin/Cars/special');?>">每日一车</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title user">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">用户管理</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/User/user');?>">用户列表</a></li>
                                <li><a href="<?php echo U('Admin/User/owner');?>">车主列表</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title write">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">留言板管理</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/Message/index');?>">留言列表</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title user1">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">管理员管理</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                        	<ul>
                            	<li><a href="<?php echo U('Admin/Admin/index');?>">管理员列表</a></li>
                                <li><a href="<?php echo U('Admin/Admin/add');?>">添加管理员</a></li>
                                <li><a href="<?php echo U('Admin/Admin/alter');?>">个人密码修改</a></li>
                            </ul>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="col-md-10 col-xs-10 right">
            <h1>添加活动车</h1>
            <div class="buttongroup">
                <form action="<?php echo U('Admin/Cars/searchspecial');?>" class="navbar-form" role="search" >
                       <div class="form-group">
                       关键字：
                        <input type="text" class="form-control" name="search_value" placeholder="请输入车辆信息">
                        </div>
                      <button type="submit" class="button1" >搜索</button> 
                      </form>
            </div>
            <div class="tablegroup">
                <table class="table">
                    <tr>
                        <th>车辆信息</th>
                        <th>车辆概况</th>
                        <th>车牌号</th>
                        <th>认证时间</th>
                        <th>车主</th>
                        <th>所在城市</th>
                        <th>车辆原价</th>
                    </tr>
                    <?php if(is_array($information)): $i = 0; $__LIST__ = $information;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr data-toggle="modal" data-target="#mymodal-data" onclick="postIt(<?php echo ($d["inf_id"]); ?>)">
                          <td><?php echo ($d["inf_type"]); ?></td>
                          <td><?php echo ($d["inf_introduce"]); ?></td>
                          <td><?php echo ($d["inf_carnumber"]); ?></td>
                          <td><?php echo ($d["inf_register"]); ?></td>
                          <td><?php echo ($d["user_name"]); ?></td>
                          <td><?php echo ($d["inf_city"]); ?></td>
                          <td><?php echo ($d["inf_dayprice"]); ?>/天</td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    <tr class="table-bottom"> 
                        <td colspan="9" style="text-align:right">
                        <div class="pagination" id="page"><?php echo ($page); ?></div>
                        </td>
                    </tr>
                    <!--弹出框-->
                    <div class="modal" id="mymodal-data" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" style="width:30px;"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title">添加为活动车</h4>
								</div>
								<form method="post" action="/easygo/5.15_5.21/easygo/index.php/Admin/Cars/append">
								<div class="modal-body" style="overflow-y:auto;height:400px;" id="detail">
									<p>车主姓名：<span></span></p>
                                    <p>车主电话：<span></span></p>
                                    <p>活动日期：<input name="inf_specialdate" type="date" value=""></p>
                                    
                                    <p>车辆信息：<span></span></p>
                                    <p>车辆原价：<span></span></p>
                                    <p>活动价格：<span><input name="inf_specialprice" type="text" value=""></span></p>
                                   <p>车辆照片：<span><img src="/easygo/5.15_5.21/easygo/Public/Admin/images/img1.jpg" width="200" height="110" class="img"/><img src="/easygo/5.15_5.21/easygo/Public/Admin/images/img1.jpg" width="200" height="110" class="img"/><br />
                                    &nbsp;<img src="/easygo/5.15_5.21/easygo/Public/Admin/images/img1.jpg" width="200" height="110" class="img"/><img src="/easygo/5.15_5.21/easygo/Public/Admin/images/img1.jpg" width="200" height="110" class="img"/></span></p>
                                    <p style="display:none">车辆id<input type="text" id="inf_id" name="inf_id" /></p>
								</div>
								<div class="modal-footer">
									<button type="submit"class="button1 button2" style="margin-right:20px;">确认添加</button>
                                    <button type="button" data-dismiss="modal" class="button1" style="margin-right:20px;">关闭</button>
								</div>
								</form>
							</div>
						</div>
					</div>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="/easygo/5.15_5.21/easygo/Public/Admin/js/jquery.min.js"></script>
<script src="/easygo/5.15_5.21/easygo/Public/Admin/js/bootstrap.min.js"></script>
<script src="/easygo/5.15_5.21/easygo/Public/Admin/js/scripts.js"></script>
<script type="text/javascript">	
				

		function postIt (res){	
			$.post("action.php",{	
				id : res
			},
			function(data,status){	
				var array = JSON.parse(data);
				console.log(array);
					$('#detail p span').eq(0).text(array['user_name']);
					$('#detail p span').eq(1).text(array['user_telephone']);
					$('#detail p span').eq(2).text("车牌号："+array['inf_carnumber']+"  品牌车型："+array['inf_type']+"  颜色："+array['inf_color']+"  变速箱："+array['inf_gearbox']+"  座位数："+array['inf_chair']+"  GPS导航："+array['inf_gps']+"  天窗："+array['inf_window']+"  音箱："+array['inf_sound']+"  DVD/CD："+array['inf_dvd']+"  真皮沙发："+array['inf_leather']+"  倒车雷达："+array['inf_camera']+"  能否抽烟："+array['inf_smoke']);
					$("#detail p span").eq(3).text(array['inf_dayprice']);
					$("#detail p span").eq(5).text(array['inf_carphoto']);
					$("#inf_id").val(array['inf_id']);
					return false;				
			});

		}
</script>
</body>
</html>