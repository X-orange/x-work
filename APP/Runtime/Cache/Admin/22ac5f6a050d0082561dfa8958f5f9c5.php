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
	<a href = "<?php echo U('Admin/Rbac/role');?>"><button type="button" class="btn btn-primary">返回</button></a>
	<form action="<?php echo U('Admin/Rbac/setAccess');?>" method="post">
		<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class="panel panel-info" id="app">
				<div class="panel-heading">
					<label class="checkbox-inline">
					  <input type="checkbox" value="<?php echo ($app["id"]); ?>_1" name="access[]" level="1" > <span class="panel-title" id="app-tit"><?php echo ($app["title"]); ?></span>
					</label>
				</div>
				<div id="app-cont">
					<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><div class="panel-body" >
							<div id="action">
								<label class="checkbox-inline">
								  <input type="checkbox" value="<?php echo ($action["id"]); ?>_2" name="access[]" level="2"> <strong><?php echo ($action["title"]); ?></strong>
								</label>
							</div>
							<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><div id="method">
									<label class="checkbox-inline">
									  <input type="checkbox" value="<?php echo ($method["id"]); ?>_3" name="access[]" level="3"> <span><?php echo ($method["title"]); ?></span>
									</label>
								</div><?php endforeach; endif; ?>
						</div><?php endforeach; endif; ?>
				</div>
			</div><?php endforeach; endif; ?>
		<button type="submit" class="btn btn-success" >保存修改</button>
	</form>
</div>
<script src="__PUBLIC__/js/jquery.js"></script>
<script>
	$(function(){
		$('input[level=1]').click(function(){
			var inputs = $(this).parents('#app').find('input');
			$(this).prop("checked")?inputs.prop('checked',true):inputs.prop('checked',false);
		});
		$('input[level=2]').click(function(){
			var inputs = $(this).parents('.panel-body').find('input');
			$(this).prop("checked")?inputs.prop('checked',true):inputs.prop('checked',false);
		});
	});
</script>
</body>
</html>