<?php
//递归重组函数
function node_merge ($node, $pid=0) {
	$arr = array();
	foreach ($node as $v) {
		if($v['pid'] == $pid) {
			$v['child'] = node_merge($node,$v['id']);
			$arr[] = $v;
		}
	}
	return $arr;
}

?>