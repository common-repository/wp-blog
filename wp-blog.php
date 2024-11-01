<?php
/*
Plugin Name: 同步博客
Author: 水脉烟香
Author URI: http://www.smyx.net/
Plugin URI: http://www.smyx.net/wp-blog.html
Description: 支持同步全文到 QQ空间日志、新浪博客、网易博客、人人网日志、开心网日记、点点网等。
Version: 0.3
*/

if (version_compare(PHP_VERSION, '5.5', '>=')) {
	$zend_install_tips = '很遗憾，您正在使用PHP 5.5.x以上版本，暂时不能使用“付费插件”。请降到PHP5.4.x或者PHP5.3.x或者PHP5.2.x';
} else {
	$zend_loader_enabled = function_exists('zend_loader_enabled');
	if ($zend_loader_enabled) {
		$zend_loader_version = function_exists('zend_loader_version') ? zend_loader_version() : '';
		if (version_compare($zend_loader_version, '3.3', '>=')) {
			$zend_install_tips = '同步博客 插件目前只提供给付费用户使用，是从<a href="http://www.smyx.net/wp-connect.html" target="_blank">WordPress连接微博专业版</a>早期版本的“同步博客”项目剥离出来的插件(建议直接购买WordPress连接微博专业版)。同步博客 插件支持同步全文到 QQ空间日志、新浪博客、网易博客、人人网日志、开心网日记、点点网等。您的php版本是 ' . PHP_VERSION .' <a href="http://www.smyx.net/wp-blog.html" target="_blank">查看详细</a>';
		} else {
			$zend_install_tips = '对不起，您不能使用 同步博客 插件，zend版本太低，请升级到3.3.0或以上版本，<a href="http://www.zend.com/en/products/guard/downloads" target="_blank">查看</a>';
		} 
	} else {
		if (version_compare(PHP_VERSION, '5.3', '>=')) {
			$zend_install_tips = '对不起，您不能使用 同步博客 插件，php 5.3.x及以上版本请安装 <a href="http://www.zend.com/en/products/guard/downloads" target="_blank">Zend Guard Loader</a>';
		} else {
			$zend_install_tips = '对不起，您不能使用 同步博客 插件，请安装 <a href="http://www.zend.com/en/products/guard/downloads" target="_blank">Zend Optimizer</a>';
		} 
	} 
}
function wp_blog_warning() {
	global $zend_install_tips;
	if ($zend_install_tips) {
		echo '<div class="updated">';
		echo '<p><strong>' . $zend_install_tips . '</strong></p>';
		echo '</div>';
	} 
} 
add_action('admin_notices', 'wp_blog_warning');
