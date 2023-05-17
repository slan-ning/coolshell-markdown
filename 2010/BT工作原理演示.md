# BT工作原理演示
>date: 2010-03-16T15:09:35+08:00



下面这个网站使用Javascript编写了一个BT工作原理演示动画程序。当然，你可能需要使用Chrome浏览器打开，因为他真的很耗CPU。在我的双核（2GHz）T60电脑上用Chrome打开CPU一下就被耗了50%左右。
<http://mg8.org/processing/bt.html>
下面是我截的一个图，每个圆代表一个结点，其会通过其它结点下载需要的文件段。结点中间的那个Bar有点类似于eDonkey中的下载进度条。至于为什么要用像彩虹一样的颜色，主要是为了让你看到不同的段是从不同的结点下载的。
你可以按热键S来加入一个下载完了的结点，用P来加入一下空结点，按R来删除一个结点（有点慢，要等10秒左右吧）。
[![](/assets/images/coolshell.cn/wp-content/uploads/2010/03/bt_js_demo.jpg "BT工作原理演示动画")](/assets/images/coolshell.cn/wp-content/uploads/2010/03/bt_js_demo.jpg)BT工作原理演示动画
关于其它Javascript的一些小玩意，你可以看看[这篇文章](https://coolshell.cn/articles/1932.html "哥是玩程序的")。


