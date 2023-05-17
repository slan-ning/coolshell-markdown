# 在Javascript里写Python
>date: 2010-07-21T08:17:39+08:00


以前，本站介绍过去一种[写HTML和CSS的新方法](/2010/%E5%86%99HTML%E5%92%8CCSS%E7%9A%84%E6%96%B0%E6%96%B9%E6%B3%95.md)，以[一种杂交式的代码](/2010/StackOverflow%E7%9A%84404%E9%94%99%E8%AF%AF%E9%A1%B5.md)，昨天给大家介绍了[.NET代码和Python及Ruby代码的互相转换工具](/2010/.NET%E4%BB%A3%E7%A0%81%E8%BD%AC%E6%8D%A2%E5%99%A8.md)，但是这个世界可能比我们想像的还疯狂。[IronPython](  http://ironpython.net/) 是一个在.NET平台上运行Python的东西，就像那些在[JVM上运行其它语言的东东](/2010/%E4%BA%94%E5%A4%A7%E5%9F%BA%E4%BA%8EJVM%E7%9A%84%E8%84%9A%E6%9C%AC%E8%AF%AD%E8%A8%80.md)一样。当然，IronPython最邪恶的事情并不是在.NET上运行Python，而是在Javascript里写Python的语法。这个畸形混血儿的网址在[这里](http://ironpython.net/browser/)（请注意翻墙）。


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


