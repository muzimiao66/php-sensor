# 运维监控系统传感器（PHP版本） #

## 环境依赖 ##

本系统需要运行在`>5.3`版本PHP的环境中。

## 遵循的规范 ##

当前实现遵循[运维监控系统API](https://github.com/horsebean/api)的被动传感器规范。

## 获取方式 ##

1. 直接下载：`https://github.com/horsebean/php-sensor/archive/master.zip`
2. git命令克隆：`git clone https://github.com/horsebean/php-sensor.git`
3. bower安装：`bower install horsebean-php-sensor`

## 使用方法 ##

1. 将lib下的horsebean复制到网站根目录下。
2. 修改sensor.conf.php，配置当前PHP应用的信息。
3. 修改CustomHull.php，收集本系统的监视数据。
4. 在PHP应用启动时，执行如下命令注册监视服务：
	php register.php sensor.conf.php

## 目录结构 ##

### 开发者关注 ###

- lib/horsebean/sensor.conf.php	：	需要配置的应用信息。
- lib/horsebean/CustomHull.php	：	需要应用开发者自定义数据收集功能的外壳。
- lib/horsebean/samples/			：	供开发者参考的范例。

### 内部实现 ###

- lib/horsebean/sensor.php			：	负责被动监视实现的传感器。
- lib/horsebean/register.php			：	注册监视服务。
- lib/horsebean/composer.json		：	PHP模块依赖的配置文件。
- lib/horsebean/horsebean.conf.php	：	系统内部配置文件。
- lib/horsebean/bin/		辅助的可执行程序目录。
- lib/horsebean/lib/		系统内部实现库目录。
- lib/horsebean/vendor/	依赖的PHP模块目录。


## 项目依赖 ##

### 安装Composer ###

1. 检查环境变量，将PHP的安装路径添加到系统目录环境变量。
2. 检查php.ini配置文件，使用`;`注释掉`open_basedir`、`disable_functions`、`disable_classes`三个配置。
3. 在当前目录下，创建bin目录。
4. 在命令行中执行`curl -sS https://getcomposer.org/installer | php -- --install-dir=bin`。

### 安装项目依赖 ###

在命令行中执行如下命令，安装配置文件composer.json定义的项目依赖：

	php bin/composer.phar install

### 清理冗余文件 ###

`bin/composer.phar`和`composer.lock`是冗余文件，在版本控制系统中忽略掉较好。