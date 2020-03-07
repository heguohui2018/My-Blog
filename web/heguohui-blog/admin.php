<?php
	/* 入口文件配置 */
	/* 定义目录分割符 */
	/* DIRECTORY_SEPARATOR:php内置常量用来解析文件目录 */
	define('DS',DIRECTORY_SEPARATOR);

	/* 定义网站根目录 */
	/* getcwd 返回当前工作目录 */
	define('ROOT_PATH',getcwd());

	/* 后端应用目录 */
	define('APP_PATH',ROOT_PATH.DS.'admin'.DS);

	/* 引入框架初始类文件 */
	require_once (ROOT_PATH.DS.'core'.DS.'lib'.DS.'core.class.php');
	/* 框架初始化 */
	\core\core::run();
?>
