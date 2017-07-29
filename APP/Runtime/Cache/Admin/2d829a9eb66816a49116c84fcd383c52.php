<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加角色</title>
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
  		<div class="title">添加角色</div>
		<form class="form-horizontal" action="<?php echo U('Admin/Rbac/addRoleHandle');?>" method="post">
		  <div class="form-group">
		    <label for="name" class="col-sm-2 control-label">角色名称：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="name" name="name" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="remark" class="col-sm-2 control-label">角色描述：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="remark" name="remark" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">是否开启：</label>
		    <div class="col-sm-10">
		      	<label class="radio-inline">
				  <input type="radio" name="status" id="" value="0" checked="checked"> 开启
				</label>
				<label class="radio-inline">
				  <input type="radio" name="status" id="" value="1"> 关闭
				</label>
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