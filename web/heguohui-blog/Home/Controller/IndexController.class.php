<?php
	/* 声明命名空间 */
	namespace Home\Controller;
	
	/* 引用首页模型类 */
	use \Home\Model\IndexModel;

	/* 定义首页控制器类 */
	final class IndexController{
		/* 首页显示方法 */
		public function index()
		{
			/* 创建模型类对象 */
			$modelObj = new IndexModel();
			/* 获取多行数据 */
			/* 需要有 fetchAll(); 方法获取数据,到 Home/Model 目录下的
				* IndexModel.class.php 中创建该函数 */
			$array = $modelObj -> fetchAll();

			/* 加载到视图文件 */
			include VIEW_PATH.'index.html';
		}
	}
?>
