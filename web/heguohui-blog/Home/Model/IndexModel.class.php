<?php
	namespace Home\Model;

	/* 引入Db类 */
	use \core\lib\Db;

	/* 定义首页模型类 */
	final class IndexModel{

		/* 保存数据库对象的属性 */
		private $db = Null;

		/* 创建构造方法 */
		public function __construct()
		{
			$this -> db = Db::getInstance();
		}

		/* 创建获取多行数据的方法 */
		/* 提供给IndexController 层fetchAll（）方法 */
		public function fetchAll()
		{
			/* 构建查询的sql语句 */
			$sql = 'select * from student order by id desc';
			/* 返回sql查询对象结果 */
			return $this-> db -> fetchAll($sql);
		}
		
	}
?>
