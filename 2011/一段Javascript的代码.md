# 一段Javascript的代码
>date: 2011-01-26T08:39:39+08:00


我们先看一段Javascript的代码，如下所示：（你能看出来这是干什么的？）


[javascript]($=[$=[]][(\_\_=!$+$)[\_=-~-~-~$]+({}+$)[\_/\_]+  

($$=($\_=!”+$)[\_/\_]+$\_[+$])])()[\_\_[\_/\_]+\_\_  

[\_+~$]+$\_[\_]+$$](\_/\_)[/javascript]


这段代码来自[BlackHat DC 2011](http://www.blackhat.com/html/bh-dc-11/bh-dc-11-home.html)（(黑帽安全大会，全世界最大两个黑客大会之一，另一个是Defcon）中的一个叫[Ryan Barnett](http://www.blackhat.com/html/bh-dc-11/bh-dc-11-speaker_bios.html#Barnett)黑客做的[XSS Street-Fight](https://docs.google.com/viewer?url=http://www.modsecurity.org/documentation/XSS_Street_Fight-Ryan_Barnett-BlackhatDC-2011.pdf&embedded=true&chrome=true)！的演讲(XSS是Web上比较经典的跨站式攻击，操作起来也有些复杂)，一共69页，基本上都是一些比较枯燥的Javascript，不过这段代码挺有意思的，如果上面这段代码换个样子：


[javascript]($=[$=[]][(\_\_=!$+$)[\_=-~-~-~$]+({}+$)[\_/\_]+  

($$=($\_=!”+$)[\_/\_]+$\_[+$])])()[\_\_[\_/\_]+\_\_  

[\_+~$]+$\_[\_]+$$](document.cookie)[/javascript]


你看到了document.cookie，于是你可能会想到这是偷用户帐号免登录cookie的。是的，就是这样。答案是，这代码等价于alert(document.cookie)，而最上面的那个代码等价于alert(1)——当然，还不仅仅只是alert。看到这里，你可能会想起[变态的C语言Hello World程序](/2009/6%E4%B8%AA%E5%8F%98%E6%80%81%E7%9A%84C%E8%AF%AD%E8%A8%80Hello%20World%E7%A8%8B%E5%BA%8F.md "6个变态的C语言Hello World程序 ")，以及[如何加密/混乱C源代码](/2009/%E5%A6%82%E4%BD%95%E5%8A%A0%E5%AF%86-%E6%B7%B7%E4%B9%B1C%E6%BA%90%E4%BB%A3%E7%A0%81.md "如何加密/混乱C源代码")，是的，这回的这个是Javascript版的，混乱Javascript的会比混乱C的更难懂，因为Javascript的变量类型是可以乱用的。


好，下面让我们来对这个代码做个解析。


首先，我们先明确一点，在Javascript和C中，混乱后的代码都是要使用一个或多个下划线（\_）来当变量名使用的，所以，请把其中的下划线看成变量名。


其次，这段代码可以分成两个部分，第一个部门其实就是sort()，第二个部分才是alert()


[javascript title=”sort()”]($=[$=[]][(\_\_=!$+$)[\_=-~-~-~$]+({}+$)[\_/\_]+  

($$=($\_=!”+$)[\_/\_]+$\_[+$])])()[/javascript]


[javascript title=”alert()”][\_\_[\_/\_]+\_\_[\_+~$]+$\_[\_]+$$](\_/\_)[/javascript]


我们来看看细节的解释。


* $=[] 是一个空数组
* $=[$=[]] 是一个引用空数组的数组。所以 $ 的解引用就是数字 0。
* \_\_ =  (\_\_ = !$ + $ )   等价于字符串”false”
* \_ = -~-~-~$    中~是位运算符“非”，~$等于-1，所以-~$ 就是+1，基本上来说，~N就是 -(N+1)，所以这个表达式的值为3。
* 因为\_ = 3，所以 \_/\_ = 3/3 = 1


于是：


* (\_\_ = !$ + $ )[ \_ = -~-~-~$]
* (“false”)[\_]
* (“false”)[3]
* “false”[3] = s


而：


* ({} + $)[\_/\_]
* (” object”)[\_/\_]
* (” object”)[1]
* ” object”[1] = o


再来：


* $ = ( $\_ = !” + $)[\_/\_]
* $ = ( “true”)[1]
* “true”[1] = r


最后：


* $\_[+$] = “true”[0] = t


因为


($$ = ( $\_ = !” + $)[\_/\_] + $\_[+$] ))


所以我们可以经过下面的推算得出$$的值


* !” = “true”
* $\_ = (true)
* $\_[1] = r
* $\_[0] = t
* $$ = rt


所以第一部分就成了 sort()，也就是以下的代码


[javascript]($ = [ $=[]] ["s" + "o"+ "r"+ "t" ] )()[/javascript]


Sort 接受一个作为函数的参数来运行，从而执行了第二部份。


[\_\_[\_/\_]+\_\_[\_+~$]+$\_[\_]+$$](\_/\_)


我们知道：


* $ = 0
* \_ = 3
* \_\_ = “false”
* $! = “true”
* $$ = “rt”


[\_\_[\_/\_]+\_\_[\_+~$]+$\_[\_]+$$](\_/\_)


等价于  

[\_\_[1] + \_\_[3 + -1] + $![3] + $$)(1);


等价于  

[“false”[1] + “false”[3 + -1 ] + “true”[3] + “rt”] (1)


等价于  

[ a + l + e + r + t ](1)


等价于  

alert(1)


就是这样！于是这段代码可能绕过你的一些对Javascript的检查。


