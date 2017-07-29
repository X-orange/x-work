<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <base target="iframe"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台首页</title>
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      a{
          text-decoration: none;
        }
      .container{
        margin-top: 30px;
      }
      #main{
        overflow: hidden;
        
      }
      #main_left{
        width: 200px;
        float: left;
        height: 100%;
        background-color: #f0f0f0;
      }
      #main_right{
        float: left;
        width: 740px;
        margin-left: 30px;
      }
      #main_left dd{
        height: 32px;
        line-height: 32px;
        text-indent: 1.2em;
        display: block;
      }
      #main_left dd:hover{
        background:#fff;
        color: #000;
        border-left: 1px solid #ccc;
      }
      #main_left dd:active{
        background:#fff;
        color: #000;
      }
      #main_left dd:hover a{
        text-decoration: none;
      }
      

    </style>
    
  </head>
  <body>
    <div class="container">
      <div id="header">
        <div class="panel panel-default">
          <div class="panel-body">
            系统管理后台
          </div>
        </div>
      </div>
      <div id="main">
        <div id="main_left">
          <dl>
            <dt class="alert alert-info">rbac</dt>
            <dd><a href="<?php echo U('Admin/Rbac/index');?>">用户列表</a></dd>
            <dd><a href="<?php echo U('Admin/Rbac/role');?>">角色列表</a></dd>
            <dd><a href="<?php echo U('Admin/Rbac/node');?>">节点列表</a></dd>
            <dd><a href="<?php echo U('Admin/Rbac/addRole');?>">添加角色</a></dd>
            <dd><a href="<?php echo U('Admin/Rbac/addUser');?>">添加用户</a></dd>
            <dd><a href="<?php echo U('Admin/Rbac/addNode');?>">添加节点</a></dd>
          </dl>
        </div>
        <div id="main_right">
          <iframe name="iframe" src="#" height="2000px" width="100%" frameborder="0" scrolling="no" seamless="seamless"></iframe>
        </div>
      </div>
      <div id="footer"></div>
    </div>
  </body>
</html>