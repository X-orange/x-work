<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>节点列表</title>
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
    <link href="__ROOT__/APP/Modules/Admin/Tpl/Public/css/node.css" rel="stylesheet">
</head>
<body>
	<div id = "container">
		<a href = "<?php echo U('Admin/Rbac/addNode');?>"><button type="button" class="btn btn-primary">添加应用</button></a>
		<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class="panel panel-info" id="app">
				<div class="panel-heading">
					<span class="panel-title" id="app-tit"><?php echo ($app["title"]); ?></span>
					<a href="<?php echo U('Admin/Rbac/addNode',array('pid' => $app['id'],'level' => 2));?>"><span class="label label-success">添加控制器</span></a>
					<a href="#"><span class="label label-info">修改</span></a>
					<a href="#"><span class="label label-danger">删除</span></a>
				</div>
				<div id="app-cont">
					<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><div class="panel-body" >
								<div id="action">
									<strong><?php echo ($action["title"]); ?></strong>
									<a href="<?php echo U('Admin/Rbac/addNode',array('pid' => $action['id'],'level' => 3));?>"><span class="label label-success">添加动作方法</span></a>
								</div>
								<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><div id="method">
										<span><?php echo ($method["title"]); ?></span>
										<a href="#"><span class="label label-info">修改</span></a>
										<a href="#"><span class="label label-danger">删除</span></a>
									</div><?php endforeach; endif; ?>
							</div><?php endforeach; endif; ?>
				</div>
			</div><?php endforeach; endif; ?>
	</div>
</body>
</html>