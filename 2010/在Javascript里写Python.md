# 在Javascript里写Python
>date: 2010-07-21T08:17:39+08:00


以前，本站介绍过去一种[写HTML和CSS的新方法](https://coolshell.cn/articles/2406.html)，以[一种杂交式的代码](https://coolshell.cn/articles/2529.html)，昨天给大家介绍了[.NET代码和Python及Ruby代码的互相转换工具](https://coolshell.cn/articles/2672.html)，但是这个世界可能比我们想像的还疯狂。[IronPython](  http://ironpython.net/) 是一个在.NET平台上运行Python的东西，就像那些在[JVM上运行其它语言的东东](https://coolshell.cn/articles/2631.html)一样。当然，IronPython最邪恶的事情并不是在.NET上运行Python，而是在Javascript里写Python的语法。这个畸形混血儿的网址在[这里](http://ironpython.net/browser/)（请注意翻墙）。


使用这个玩意很简单，下面，让我们看看这个混血儿长啥样？


首先，你需要链接一个js文件：



```
<script src="http://gestalt.ironpython.net/dlr-latest.js" type="text/javascript"></script>
```

然后，让我们看看如何写一个按钮事件：



```
<input id="button" type="button" value="Say, Hello!" />
<script type="text/python">
  def button_onclick(s, e):
      window.Alert("Hello from Python!")
  document.button.events.onclick += button_onclick
</script>

```

你对此事怎么看？欢迎留下你的看法。


