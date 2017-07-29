<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加用户</title>
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
    <style>
    	#add{
    		width: 600px;
    		margin: 1px auto;
    	}
    	.title{
    		background: #f0f0f0;
    		padding: 10px;
    		margin-bottom: 20px;
    		font-weight: bold;
    		font-size: 16px;
    	}
    </style>
  </head>
  <body>
  	<div id="add">
  		<div class="title">添加用户</div>
		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="numberid" class="col-sm-2 control-label">用户账号：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="numberid" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="pw" class="col-sm-2 control-label">密码：</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="pw" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="role" class="col-sm-2 control-label">所属角色：</label>
		    <div class="col-sm-10">
		      	<select class="form-control">
		      	  <option value="">请选择角色</option>
				  <option value="">管理员</option>
				  <option value="">教师</option>
				  <option value="">学生</option>
				</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">保存添加</button>
		    </div>
		  </div>
		</form>
	</div>
  </body>
</html>






<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
	<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" >
		$(function (){
			$('.add-role').click(function(){
				var obj=$(this).parents('tr').clone();
				obj.find('.add-role').remove();
				$('#last').before(obj);
			});
		});
	</script>
	<style type="text/css">

		.add-role{
			display: inline-block;
			width: 100px;
			height: 26px;
			line-height: 26px;
			text-align: center;
			border: 1px solid blue;
			border-radius: 4px;
			margin-left: 20px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form action="<?php echo U('Admin/Rbac/addUserHandle');?>" method="post">
		<table class="table">
			<tr>
				<th colspan='2'>添加用户</th>
			</tr>
			<tr>
				<td align='right' width='40%'>用户账号：</td>
				<td>
					<input type="text" name="username" />
				</td>
			</tr>
			<tr>
				<td align='right'>密码：</td>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>
			<tr>
				<td align='right'>所属角色</td>
				<td>
					<select name="role_id[]" >
						<option value="">请选择角色</option>
						<?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>)</option><?php endforeach; endif; ?>
					</select>
					<span class='a dd-role'>添加一个角色</span>
				</td>
			</tr>
			<tr id='last'>
				<td colspan='2' align='center'>
					<input type="submit" value="保存添加" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html> -->