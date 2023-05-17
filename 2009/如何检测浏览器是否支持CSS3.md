# 如何检测浏览器是否支持CSS3
>date: 2009-07-24T15:00:02+08:00


如何检测用户的浏览器是否支持CSS3，我们需要使用HTML，CSS和JavaScript来完成这件事情。下面是步骤。


**1）先制作下面的HTML**



```
<span id="check" rel="Detect"></span>

```

**2）然后书写下面的CSS**



```
#check {
  display: none;
  width: 0;
  height: 0;
}
#check[rel^="D"] {
  display: block;
  width: 0;
  height: 0;
}

```

  

**3）下面是JavaScripts的检测脚本**


请确保下面的代码放在HTML文件头。


[javascript]  

<script type="text/javascript">  

var obj = document.getElementById("check");  

var file="special.css";  

if (window.getComputedStyle)  

    var stat = window.getComputedStyle(obj,null).getPropertyValue("display");  

else if (obj.currentStyle)  

    var stat = obj.currentStyle.display;  

var css3 = (stat == "block");  

if (css3) alert("CSS3 Supported.");  

else alert("CSS3 not supported.");  

</script>


[/javascript]


文章：[来源](http://www.geocities.com/seanmhall2003/css3/detect.html)


