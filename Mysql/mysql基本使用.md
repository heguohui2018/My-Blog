# Mysql数据库

## mysql安装,登录

由于我使用的是mac，运行如下命令进行安装：

```brew install mysql```

对于在命令中推荐使用mycli工具，一个mysql数据库命令行工具，减轻记忆负担，语法高亮提示，非常棒的一个
工具,通过如下命令进行安装:

```brew install mycli```

mycli配置文件目录: ```/Users/apple/.myclirc```

mycli可以进行语法高亮主题设置，以及 emacs和vi两种按键方式设置,默认的按键方式为
emacs

安装完成后就可以进行登录操作
```sql
mysql -u root -p

```
提示会要求输入密码，然后将你的管理员密码输入进去就可以了

使用mycli进行登录
```sql
mycli -h localhost -P 3306 -u root -p 123456

```
localhost : 主机数据库地址

3306 : 数据库默认的端口号

root : 管理员

123456 : 管理员密码

## mysql修改密码

首先到以下路径/etc/my.cnf,添加 :skip-grant-table,

```mysql
mysql -u root -p 登录数据库

mysql>use mysql  使用数据库

mysql>flush privileges; 刷新，否则会报错

Query OK, 0 rows affected (0.00 sec)

mysql> alter user 'root'@'localhost'IDENTIFIED BY 'Heguohui123456';
ERROR 1819 (HY000): Your password does not satisfy the current policy requirements

mysql>  alter user'root'@'localhost'identified BY 'Heguohui@123456';
Query OK, 0 rows affected (0.01 sec)

需要注意的是mysql8密码策略的修改，必须有大写字母，小写字母，特殊字符，以及数字组成的密码，才能使密码生效，否则会报错
```
设置成功后在把 ：skip-grant-table 这行给删除掉


添加访问权限，解决客户端连接数据库失败
```mysql
mysql>grant all privileges on *.* to 'root'@'localhost' with grant option;

mysql>flush privileges; 刷新权限
```
grant all( 权限列表 ) privileges on ****.*( 数据库 ) to '用户名'@'访问主机' with grant option;(修改权限时在后面加 with grant option)


## 一些常用的sql语句

使用数据库:
```use 数据库名```

显示可用的数据库:
```show DATABASES```

```显示数据库内的表 :show TALES```

```显示某个数据表内的字段 :show columns from 数据表名称```

```检索数据表的某个字段 :select 字段名称 from 数据表名称 ```


```从数据表内检索出多个字段,最后一个字段后面不需要逗号,多个字段使用逗号进行分割: select 字段1名称,字段2名称,字段3名称 from 数据表名称 ```

```在当前数据库中查看其他数据库中的表 :shwo tables from 数据库```

```查看数据表的结构 :show columns from 数据表```

```在数据表中对所有字段插入记录 :insert into 数据表 values(字段1的值，字段2的值，字段3的值);```

```在数据表中只对某几个字段插入记录 :insert into 数据表 (字段1 ,字段2) values (字段1的值，字段2的值);```

```查看数据表中的所有记录 : select * from 数据表```

============================================================

外键创建:子表需要参照父表，子表的外键字段需要与父表的主键字段的数据类型一致，否则不能创建子表

```create table 子表 (id smallint primary  key auto_increment ,username
varchar(10) not null , pid smallint(5) unsigned , foreign key (pid) references
父表 (id));```


```查看数据表索引 :show index from 数据表\G;```


============================================================

从父表中删除记录时，子表中匹配的行也会自动更新或者删除

```create table 子表 (id smallint primary  key auto_increment ,username
varchar(10) not null , pid smallint(5) unsigned , foreign key (pid) references
父表 (id) on delete cascade);```

============================================================

``````
``````
``````
``````
``````
``````
``````
``````
``````
``````
``````
``````
``````
``````
``````
``````
``````



















