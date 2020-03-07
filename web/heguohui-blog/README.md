# 个人博客系统

## 工程目录规划和规划
	index.php				前端入口文件
	admin.php				后端入口文件

	core/					框架核心目录
		-->lib/				框架核心类目录
		-->vendor/			第三方类库文件

	Home/	  				前端应用目录
		-->conf/			配置目录
		-->controller/		控制器目录
		-->Model/			模型层目录
		-->View/			视图层目录

	Admin/					后端应用目录
		-->conf/			配置目录
		-->controller/		控制器目录
		-->Model/			模型层目录
		-->View/			视图层目录

	Public/					静态资源目录
		-->Home/			前端静态资源目录
			-->images/		图片
			-->css/			css样式
			-->js/			js文件

		-->Admin/			后端静态资源目录
			-->images/		图片
			-->css/			css样式
			-->js/			js文件

## MVC的写法
	配置文件 : Config.php
	前端入口文件 : index.php
	后端入口文件 : admin.php
	框架初始类文件 : core.class.php
		--> 网页字符集设置
		-->初始化配置文件 Config.php
		-->初始化路由参数 : p参数 c参数 a参数
		-->目录常量设置
		-->初始化类的自动加载
		-->初始化请求分发
			-->在控制器方法中创建模型类对象
			-->在控制器方法中，载入视图文件

	首页控制器类文件: IndexController.class.php
		-->定义一个首页控制器类: IndexController
		-->在类里写入一个首页方法：index
		-->在index（）方法中创建一个创建一个模型类对象：IndexModel
		-->IndexModel 需要有一个获取数据的方法 : fetchAll()
		-->加载视图文件
		-->注意点 : 需要使用 use \Home\Controller\IndexController 来引用控制器类






## 功能模块的开发
	功能模块需要考虑：controller 控制器;view 视图; model 模型
