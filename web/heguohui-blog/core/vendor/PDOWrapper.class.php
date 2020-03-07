<?php 
	/* 声明命名空间 */
	namespace core\vendor;

	/* 引入全局PDO类 */
	use \PDO;
	/* 引入PDO异常类 */
	use \PDOException;

	/* 定义最终的PDO类 */
	final class PDOWrapper{
		/* 数据库配置属性 */
		private $db_type;
		private $db_host;
		private $db_port;
		/* 数据库用户 */
		private $db_user;
		private $db_password;
		/* 数据库名 */
		private $db_name;
		private $db_charset;

		/* 保存PDO对象 */
		private $pdo = NULL;


		/* 创建构造函数 */
		public function __construct()
		{
			$this -> db_type = $GLOBALS['config']['db_type'];
			$this -> db_host = $GLOBALS['config']['db_host'];
			$this -> db_port = $GLOBALS['config']['db_port'];
			$this -> db_user = $GLOBALS['config']['db_user'];
			$this -> db_password = $GLOBALS['config']['db_password'];
			$this -> db_name = $GLOBALS['config']['db_name'];
			$this -> db_charset = $GLOBALS['config']['db_charset'];

			/* 连接数据库 */
			$this -> connectPDO();

			/* 开启异常模式,捕获错误 */
			$this -> setErrorMode();
		}

		/* 私有创建PDO */
		private function connectPDO()
		{
			/* pdo认证 */
			try {
				$dsn = '{$this->db_type}:host={$this->db_hsot};port={$this->db_prot};dbname ={$this -> db_name};dbcharset={$this->db_charset};';
				$username = $this  -> db_user;
				$password = $this  -> db_password;

				/* 创建PDO对象 */
				/* 设计传入参数 */
				$this -> pdo = new PDO($dsn,$username,$password);

			} catch (PDOException $e) {
				echo '<h2>创建PDO对象失败</h2>';
				echo "错误状态码:".$e -> getCode();
				echo "<br>错误行号:".$e -> getLine();
				echo "<br>错误文件:".$e -> getFile();
				echo "<br>错误信息:".$e -> getMessage();
				/* 中断 */
				die();
			}
		}

		/* 设置错误模式的方法 */
		private function setErrorMode()
		{
			$this -> pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}

		/* 封装sql语句方法 ,增，删，改，查*/
		public function exec($sql)
		{
			try {
				return $this->pdo->exec($sql);
			} catch (PDOException $e) {
				/* 调用 showErrowMessage()方法; */
				$this->showErrowMessage($e);
			}
		}

		/* 函数体内部代码块缺少错误对象 $e , 需要才函数名后传入一个参数 $e 对象 */
		private function showErrowMessage($e)
		{
				echo '<h2>sql语句执行错误</h2>';
				echo "错误状态码:".$e -> getCode();
				echo "<br>错误行号:".$e -> getLine();
				echo "<br>错误文件:".$e -> getFile();
				echo "<br>错误信息:".$e -> getMessage();
				/* 中断 */
				die();
		}
	}
?>
