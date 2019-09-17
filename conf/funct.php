<?php 
function debug($var){
	$debug = debug_backtrace();
	echo '<p><a href="#" onclick="$(this.)parent().next(\'ol\').slideToggle(); return false;">
	<b>'.$debug[0]["file"].' Line '.$debug[0]["line"].'</b>
	</a></p>';
	echo '<ol style =" display : none">'; 
	foreach ($debug as $key => $value) {
		if ($key>0) {
			echo '<li><b>'.$value["file"].' Line '.$value["line"].'</b></li>';
		}
	}
	echo "</ol>";
	echo "<pre>";
	print_r($var);
	echo "</pre>";	

}
function dd($var){
	debug($var);die();
}
function notEmpty($datas){
	if (is_array($datas) || is_object($datas)) {
		foreach ($datas as $k => $v) {
			if (!isset($v) || trim($v) ==="") {
				return false;	
			}
		}
	}else{
		if (!isset($datas) || trim($datas) ==="") {
			return false;	
		}
	}
	return true;

}
function setMsg($msg,$type="info"){
	$_SESSION["notif"]["msg"] = $msg;
	$_SESSION["notif"]["type"] = $type;
}
function redirect($url){
	header("Location: ".$url.'.php'); exit();
}
function demystify($tablefields,$dataform){
	$tablefields = (array)$tablefields;
	$dataform = (array)$dataform;
	foreach ($tablefields as $k => $v) {
		$d[$k] = $dataform[$v] ;
	}
	return $d;
}
function e($var){
	return htmlspecialchars(strip_tags(trim($var)));
}