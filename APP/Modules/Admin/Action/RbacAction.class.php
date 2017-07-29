<?php
Class RbacAction extends Action{
	//用户列表
	Public function index(){

	}
	//角色列表
	Public function role(){
		$this -> role = M('role') -> select();
		$this ->display();
	}
	//节点列表
	Public function node(){
		$field = array('id','name','title','pid');
		$node = M('node') -> field($field) -> order('sort') -> select();
		// $node = node_merge($node);
		// p($node);
		$this ->node = node_merge($node);
		$this -> display();
	}
	//添加用户
	Public function addUser(){
		$this -> display();
	}

	//添加角色
	Public function addRole(){
		$this -> display();
	}
	//添加角色表单处理
	Public function addRoleHandle(){
		if(M('role')->add($_POST)){
			$this->success('添加成功',U('Admin/Rbac/role'));
		}else{
			$this->error('添加失败');
		}
	}
	//添加节点
	Public function addNode(){
		$this -> pid = I('pid',0,'intval');
		$this -> level = I('level',1,'intval');
		switch($this -> level){
			case 1:
			$this -> type = '应用';
			break;
			case 2:
			$this -> type ='控制器';
			break;
			case 3:
			$this -> type = '动作方法';
			break;
		}
		$this -> display();
	}
	//添加节点表单处理
	Public function addNodeHandle(){
		if(M('node') -> add($_POST)) {
			$this ->success('添加成功',U('Admin/Rbac/node'));
		}else{
			$this -> eror('添加失败');
		}
	}
	//配置权限
	Public function access(){
		$rid = I('rid','','intval');
		$node = M('node') -> select();
		$this ->node = node_merge($node);
		$this -> display();
	}
	//修改权限
	Public function setAccess(){
		p($_POST);
	}

}
?>