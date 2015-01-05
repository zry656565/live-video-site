live-video-site
===============

##服务器
- 使用apache

##PHP
- 要求版本：5.5+

##数据库：
1. 进入mysql
2. 创建一个schema: video_site
3. 输入指令：

```
use video_site;
set names utf8;
source path/to/video_site.sql; /* video_site.sql文件在项目根目录sql文件夹下 */
```

##框架
- 使用[Yii2](https://github.com/yiisoft/yii2)
  - 安装与简单教程：[Get Start](http://www.yiiframework.com/doc-2.0/guide-start-installation.html)