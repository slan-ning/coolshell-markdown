# WTF Javascript
>date: 2010-06-02T09:51:49+08:00


请先看一下下面的这段Javascript程序以及其结果。


[javascript]  

1 + + 1              // => 2  

1 + – + 1            // => 0  

1 + – + – + 1        // => 2  

1 + – + – + – + 1    // => 0  

1 + – + + + – + 1    // => 2  

1 + / + + + / + 1    // => 1/ + + + /1  

[/javascript]


提示一下，1++1等价于1 + (+1)，也就是1加上一个正数1，如果你能搞懂其它的表达式的话，请看看下面的这段程序，你能说出其结果吗？


[javascript]  

1 + / + / + / + 1 // => ?  

[/javascript]


如果不知道的话，你可以到这个[网页上去讨论讨论](http://mir.aculo.us/2010/05/28/valid-javascript-or-not/)。当然，如果你不懂也没有什么关系，因为Javascript本身就是一个很怪异的语言，再加上浏览器的种种不是，所以，[Javascript程序员也是很郁闷的](/2009/Javascript%E7%A8%8B%E5%BA%8F%E5%91%98%E5%98%B4%E6%9C%80%E8%84%8F%3F%3F.md)。在以前的“[最为奇怪的程序语言的特性](/2010/%E6%9C%80%E4%B8%BA%E5%A5%87%E6%80%AA%E7%9A%84%E7%A8%8B%E5%BA%8F%E8%AF%AD%E8%A8%80%E7%9A%84%E7%89%B9%E6%80%A7.md)”中也说过一些。Javascript最怪异的特性导致了[wtfjs.com](http://wtfjs.com/)这样的一个网站，还有一个[WTF JS的开源站点](https://github.com/brianleroux/wtfjs)。呵呵。


