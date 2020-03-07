<?php 
/* 声明命名空间 */
namespace core;
	
/* 定义初始类 */
final class core 
{
	/* 定义初始化方法 */
	public static function run()
	{
		/* self关键字访问类中的静态属性和方法 */

		/* 初始化字符集 */
		self::initCharset();		

		/* 初始化配置文件 */
		self::initConfig();			
		
		/* 初始化路由参数 */
		self::initRoute();			

		/* 初始化常量设置 */
		self::initConst();						

		/* 初始化类的自动加载 */
		self::initAutoload();							

		/* 初始化请求分发 */
		self::initDispatch();							
	}

	/* 私有静态字符集设置 */
	private static function initCharset()
	{
		header("content-type:text/html;charset=utf-8");
	}
	
	/* 私有初始化配置文件 */
	private static function initConfig()
	{
		/* $GLOBALS 的作用在于读取外部变量 */
		$GLOBALS['config'] = require_once(APP_PATH.'Conf'.DS.'Config.php');
	}

	/* /1* 私有初始化路由 *1/ */
	private static function initRoute()
	{
		$platform = $GLOBALS['config']['default_platform'];
		/* 控制器参数 */
		$platform_controller = isset($_GET['c'])?$_GET['c']:$GLOBALS['config']['default_controller'];
		/* 路由参数 */
		$platform_action = isset($_GET['a'])?$_GET['a']:$GLOBALS['config']['default_action'];
		/* 定义认端常量 */
		define("PLAT",$platform);
		/* 定义控制器常量 */
		define("CONTROLLER",$platform_controller);
		/* 定义动作方法常量 */
		define("ACTION",$platform_action);
	}

	/* 私有静态目录常量 */
	private static function initConst()
	{
		/* 定义视图层目录 */
		define('View_PATH',APP_PATH.'View'.DS.'CONTROLLER');
	}

	/* 私有的动态类的自动加载 */
	private static function initAutoload()
	{
		/* 将命名空间的类名转成文件名 */
		/* spl_autoload_registe 实现自动加载*/
		spl_autoload_register(function($className){
			/* 例如一个空类中的类名  \Home\Controller\StudentController */
			/* 真实的类文件 ./Home/Controller/StudentController.class.php */

			/* str_replace() 字符替换函数*/
			/* 字符替换函数考虑操作系统的不同，解决目录分割符不一致 */
			$className = str_replace('\\',DS,$className).'.class.php';
			if(file_exists($className)) require_once($className);
		});
	}

	/* 私有对象请求分发，创建控制器类的对象？调用控制对象的哪个方法 */
	private static function initDispatch()
	{
		/* 构建建控制器类名：\Home\Controller\StudentController */
		$className = '\\'.PLAT.'\\'.'Controller'.'\\'.CONTROLLER.'Controller';
		/* 创建控制器类对象 */
		$controllerObj = new $className();
		/* 调用控制类对象方法 */
		/* 取出 ACTION常量的值放入 $actionName 变量中 */
		$actionName = ACTION;
		$controllerObj -> $actionName();
	}
}

?>
