# You2PHP
关于使用you2php网站搭建之后很快被墙的解决办法：

1.启用SSL加密传输。

2.启用http验证
   Nginx主机参考https://www.howtoing.com/setup-nginx-basic-http-authentication (从此页面搜索 ：密码保护Nginx虚拟主机)
   apache主机参考 http://blog.51cto.com/wushank/1211202
   
  3.编辑footer.php文件，去除程序版权（Powered by YOU2PHP），经过多次验证，证实了Gfw会通过检索源代码中的关键字Powered by YOU2PHP判断关键字来屏蔽某些站点。
  
  4.不要广泛传播，自己使用，
  
  5.国家代码不要填HK与tw，这些地区的热门内容会很不友好，容易被GFW。
  
  做到这几点，被墙的几率基本低于10%。


低调使用，拒绝广泛传播，个人使用建议装在子目录，防止被搜索引擎爬虫嗅探到，切勿在中国大陆主机商提供的海外主机上搭建，不可绑定已备案域名，推荐狗爹几十元一年的虚拟主机，速度快完美运行（亲测）

开发者API（不翻墙下载youtube）:https://ytcdn.bid/ 第三方提供

如果您没有虚拟主机和域名，可以通过申请freenom免费域名+000webhost免费空间搭建you2php。
具体教程：
https://github.com/pigmanidea/you2php-000webhost

如果需要切换国家功能，请使用 https://github.com/hahadaba/YOU2PHP-GL-SELECTOR

如果您需要看1080p或者4k或者直播请使用这个版本（安装方法看压缩包内的说明）
1080p/4K 版本：

https://raw.githubusercontent.com/You2php/you2php/master/%E6%94%AF%E6%8C%811080P-4k-%E7%9B%B4%E6%92%AD%E7%89%88%E6%9C%AC.zip


ps：若部分视频播放不出来，多刷新几次，一般一两分钟之后即可正常播放！！！
在heroku上部署you2php: https://github.com/You2php/you2php-heroku

# You2PHP
----
You2PHP是一个用PHP开发的Youtube流量代理脚本、通过对接谷歌api获取数据，可用来搭建Youtube视频镜像站、可实现长城之内观看Youtube。
请访问项目主页[https://you2php.github.io//](https://you2php.github.io/)查看更详细介绍。

![https://you2php.github.io/img/pic/jt1.png](https://you2php.github.io/img/pic/jt1.png)

# 特点
使用You2PHP的成本非常低，只需要一个支持PHP环境的虚拟海外主机，上传代码简单设置即可立即使用。无论您使用的是虚拟主机，还是VPS，上传即可使用，无需数据库！

You2PHP对接谷歌官方APi，实现了视频/频道搜索、视频在线播放 、频道/类别内容预览、视频下载等功能、浏览这些内容不需要您的设备上安装任何软件。

You2PHP采用GPL开源协议发布，你可以自由的使用和修改代码，随时随地，访问一个URL即可观看全球视频。
请访问项目主页[https://you2php.github.io//](https://you2php.github.io/)查看更详细介绍。
# 如何安装与使用
请查看You2PHP文档[https://you2php.github.io/doc/](https://you2php.github.io/doc/)

请在遵守当地相关法律法规的前提下使用本项目

本人拒绝为任何商业或非法目的提供任何技术支持

本项目仅为科研人员更方便地学习知识而创建, 请勿大范围传播
# 程序截图

![https://you2php.github.io/img/11.png](https://you2php.github.io/img/11.png)
![https://you2php.github.io/img/22.png](https://you2php.github.io/img/22.png)
![https://you2php.github.io/img/33.png](https://you2php.github.io/img/33.png)
![https://you2php.github.io/img/55.png](https://you2php.github.io/img/55.png)
请在遵守当地相关法律法规的前提下使用本项目

本人拒绝为任何商业或非法目的提供任何技术支持

本项目仅为科研人员更方便地学习知识而创建, 请勿大范围传播

