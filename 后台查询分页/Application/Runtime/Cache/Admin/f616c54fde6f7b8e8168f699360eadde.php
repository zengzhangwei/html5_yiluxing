<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>易路行后台管理系统</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="/easygo/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/easygo/Public/Admin/css/style.css" rel="stylesheet">
    <link href="/easygo/Public/Admin/css/page.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <div class="row header">
        <h1>易路行后台管理系统<span>欢迎您，<?php echo ($_SESSION['username']); ?>！<a href="/easygo/index.php/Admin/Admin/logout">退出</a></span></h1>
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
                                <li class="linow"><a href="<?php echo U('Admin/Cars/check');?>">车辆审核</a></li>
                                <li><a href="<?php echo U('Admin/Cars/special');?>">每日一车</a></li>
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
                                <li><a href="<?php echo U('Admin/Admin/alert');?>">个人密码修改</a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="col-md-10 col-xs-10 right">
            <h1>车辆列表</h1>
            <div class="buttongroup">
                <div class="col-md-6 col-xs-6 left">
                    <form action="<?php echo U('Admin/Cars/search');?>" class="navbar-form" role="search" >
                       <div class="form-group">
                       关键字：
                        <input type="text" class="form-control" name="search_value" placeholder="请输入车辆信息">
                        </div>
                      <button type="submit" class="button1" >搜索</button> 
                      </form>
                </div>
                <div class="col-md-6 col-xs-6 left">
                       <form action="<?php echo U('Admin/Cars/query');?>" class="navbar-form" role="search" style="margin-left:-50px;">
                        认证日期：
                        <input type="date" value="" name="date1">
                        至
                        <input type="date" value="" name="date2">
                        <button type="submit" class="button1">查询</button>
                    </form>
                </div>
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
                        <th>审核状态</th>
                    </tr>
                    <?php if(is_array($information)): $i = 0; $__LIST__ = $information;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr data-toggle="modal" data-target="#mymodal-data">
                          <td><?php echo ($d["inf_type"]); ?></td>
                          <td><?php echo ($d["inf_introduce"]); ?></td>
                          <td><?php echo ($d["inf_carnumber"]); ?></td>
                          <td><?php echo ($d["inf_register"]); ?></td>
                          <td><?php echo ($d["user_name"]); ?></td>
                          <td><?php echo ($d["inf_city"]); ?></td>
                          <td id="state"><?php echo ($d["inf_state"]); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    <tr class="table-bottom"> 
                        <td colspan="9" style="text-align:right">
                        <div class="pagination" id="page"><?php echo ($page); ?></div>
                            <!-- <ul class="page">
                                <li><a href="#">上一页</a></li>
                                <li class="now"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>...</li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">下一页</a></li>
                                <li>共5页/48条数据 转到<input type="text" class="pageinput" placeholder="1">页</li>
                            </ul> -->
                        </td>
                    </tr>
                    <!--弹出框-->
                    <div class="modal" id="mymodal-data" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" style="width:30px;"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title">车辆详情</h4>
								</div>
								<div class="modal-body" style="overflow-y:auto;height:400px;">
									<p>车主姓名：<span><?php echo ($d["user_name"]); ?></span></p>
                                    <p>车主电话：<span><?php echo ($d["user_telephone"]); ?></span></p>
                                    <p>证件号码：<span><?php echo ($d["user_idnum"]); ?></span></p>
                                    <p>证件照片：<span><img src="/easygo/Public/Admin/images/idcard.gif" width="290" height="180" /></span></p>
                                    <p>车辆信息：<span>车牌号：<?php echo ($d["inf_carnumber"]); ?>&nbsp;&nbsp;品牌车型：<?php echo ($d["inf_type"]); ?>&nbsp;&nbsp;颜色：<?php echo ($d["inf_color"]); ?><br />&nbsp;变速箱：<?php echo ($d["inf_gearbox"]); ?>&nbsp;&nbsp;座位数：<?php echo ($d["inf_chair"]); ?>&nbsp;&nbsp;燃料类型：汽油&nbsp;&nbsp;天窗：<?php echo ($d["inf_window"]); ?><br />&nbsp;音箱：<?php echo ($d["inf_sound"]); ?>&nbsp;&nbsp;真皮座椅：<?php echo ($d["inf_leather"]); ?>&nbsp;&nbsp;倒车雷达：<?php echo ($d["inf_camera"]); ?><br />&nbsp;GPS导航：<?php echo ($d["inf_gps"]); ?>&nbsp;&nbsp;可抽烟：<?php echo ($d["inf_smoke"]); ?></span></p>
                                    <p>车主描述：<span>我的车很棒棒！！！！</span></p>
                                    <p>车辆照片：<span><img src="/easygo/Public/Admin/images/img1.jpg" width="200" height="110" class="img"/><img src="/easygo/Public/Admin/images/img1.jpg" width="200" height="110" class="img"/><br />
                                    &nbsp;<img src="/easygo/Public/Admin/images/img1.jpg" width="200" height="110" class="img"/><img src="/easygo/Public/Admin/images/img1.jpg" width="200" height="110" class="img"/></span></p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="button1 button2" style="margin-right:20px;" id="success">通过审核</button>
                                    <button type="button" data-dismiss="modal" class="button1 button3" style="margin-right:20px;" id="fail">未通过</button>
								</div>
							</div>
						</div>
					</div>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function(){
    var a = document.getElementById("success");
    var b = document.getElementById("fail");
    var ss = document.getElementById("state");
    a.onclick = function(){
        ss.innerHTML = "已通过";
        ss.style.color = "green";
    }
    b.onclick = function(){
        ss.innerHTML = "未通过";
        ss.style.color = "red";
    }
    window.localStroge(ss.innerHTML);
}    
</script>
<script src="/easygo/Public/Admin/js/jquery.min.js"></script>
<script src="/easygo/Public/Admin/js/bootstrap.min.js"></script>
<script src="/easygo/Public/Admin/js/scripts.js"></script>
</body>
</html>