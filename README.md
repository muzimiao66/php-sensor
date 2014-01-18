# 运维监控系统传感器（PHP版本） #

## 遵循的规范 ##

当前实现遵循[运维监控系统API](https://github.com/horsebean/api)的被动传感器规范。

## 获取方式 ##

1. 直接下载：`https://github.com/horsebean/php-sensor/archive/master.zip`
2. git命令克隆：`git clone https://github.com/horsebean/php-sensor.git`
3. bower安装：`bower install horsebean-php-sensor`

## 使用方法 ##

1. 将lib下的horsebean复制到网站根目录下。
2. 将conf.php.sample复制为conf.php，把配置修改为当前PHP应用的信息。
3. 将sensor.php.sample复制为sensor.php，PHP应用的开发者负责在此收集本系统的监视数据。
4. 在PHP应用启动时，执行如下命令注册监视服务：
	{$PHP_PATH}/php {$horsebean}/register.php [-c ./conf.php]

## 目录结构 ##

- lib/horsebean/HorsebeanSensor.class.php	：	运维监控系统传感器类（PHP版本）。
- lib/horsebean/conf.php.sample		:	业务系统的配置样例。
- lib/horsebean/sensor.php.sample	：	运维监控系统传感器（PHP版本）。
- lib/horsebean/register.php			：	注册监视服务。

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