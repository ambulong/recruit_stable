<?php
if(!defined('ROOT_PATH')){
	header("HTTP/1.0 404 Not Found");
	exit;
}

func_need_login();
header("location:".func_url("show", "proj_list"));
