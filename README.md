live-video-site
===============

##PHP
- 要求版本：5.4+

##数据库：
1. 进入mysql
2. 创建一个schema: video_site
3. 输入指令：

```
use video_site;
use names utf8;
source path/to/video_site.sql; /* video_site.sql文件在项目根目录sql文件夹下 */
```

##目录结构：
- /Lib: Model层