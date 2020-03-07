<?php 
	namespace core\lib;

	final class Db
	{
		/* 私有静态属性 */
		private static $obj = Null;

		/* 私有静态数据库配置信息 */
		private $db_host;
		private $db_user;
		private $db_password;
		private $db_name;
		private $db_charset;

		/* 私有构造方法 */
		private function __construct()
		{
			$this ->db_hsot = $GLOBALS['config']['db_host'];
			$this ->db_user = $GLOBALS['config']['db_user'];
			$this ->db_password = $GLOBALS['config']['db_password'];
			$this ->db_name = $GLOBALS['config']['db_name'];
			$this ->db_charset = $GLOBALS['config']['db_charset'];
			$this ->connectDb();
			$this ->selectDb();
			$this->setCharset();
		}
		
		/* 私有对象克隆方法，防止类外clone对象 */
		private function __clone(){};

		/* 公共创建的方法 */
		public static function getInstance()
		{
			/* 判断当前对象是否存在 */
			if (!self::$obj instanceof self) {
				/* 对象不存在则去创建它 */
				self::$obj = new self();
			}
			return self::$obj;
		}

		/* 私有属性连接mysql服务器 */
		private function connectDb()
		{
			if (!mysqli_connect($this->db_host,$this->db_user,$this->db_password)) {
				die('数据库连接失败');
			}
		}

		private function selectDb()
		{
			if (mysqli_select_db($this->db_host,$this->db_user,$this->db_password,$this->db_name)) {
				die('选择数据库 ($this->db_name)');
				
			}
		}
		private function setCharset()
		{
			$this->exec('set names {$this->charset}')
		}
	}
?>
