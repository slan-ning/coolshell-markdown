# GNU-Linux下有多少是GNU的？
>date: 2011-06-13T08:25:42+08:00


一个葡萄牙的学生写了一篇文章 《[How much GNU is there in GNU/Linux?](http://pedrocr.net/text/how-much-gnu-in-gnu-linux)》 – GNU/Linux下有多少是GNU的。他的这篇文章主要分布了今年4月份的Ubuntu Natty的Linux分发包。其主要是用代码行来做的分析，其给了两个饼图。


第一个饼图如下，其指明了各种主流的开源项目组的分布情况。可见GNU只占了8%，当然，GNome也是GNU的，加起来也只有13%，只占整个分发包很少的比重。


![](/assets/images/pedrocr.net/images/GNUTotalSplit.png)


第二个图，作者把GNU的部分拿了出来，再进行了分析：



在下面这个图中，我们可以看到主要是四大块——gcc, gdb, binutils 和 glibc，所以，作者说，这些东西都不是最终用户需要的，不是每一个用户都是需要搞开发的。所以，如果去除这些，再去除Gnome（这个桌面UI也不是很力），那么GNU的东西几乎没有了。


![](/assets/images/pedrocr.net/images/GNUSplit.png)


所以，作者以此来挑战Richard Stallman提到的 GNU/Linux的这个说法。好像更为好的说法应该叫——


**GNU/KDE/java/xorg/Linux**


我对这篇文章有下述一些感觉：


* 以代码行来衡量重要性，非常的不准确。比尔盖茨说过——“用代码行数来衡量编程的进度，就如同用航空器零件的重量来衡量航空飞机的制造进度一样”（参看《[最佳编程语录](/2010/%E6%9C%80%E4%BD%B3%E7%BC%96%E7%A8%8B%E8%AF%AD%E5%BD%95.md "最佳编程语录")》），所以，用这个数据来并不一定正确。如果用Linux的各种包的依赖性可能会更好一点。
* 至少我知道，离开了glibc，可能整个操作系统都会不举。Linux下，绝大多数软件都是gcc/gdb编程和调试出来的（当然，LLVM和Clang正在挑战着gcc编译器），而且大多数软件都在用着GPL的许可证（[虽然开源世界的许可证是如此的混乱](/2011/%E7%8B%97%E6%97%A5%E7%9A%84%E5%BC%80%E6%BA%90%E8%BD%AF%E4%BB%B6%E8%AE%B8%E5%8F%AF%E8%AF%81.md "狗日的开源软件许可证")）
* 辩证地，我们不能否定GNU的历史价值，同时我们似乎也在看到GNU好像有点萎靡。


老实说，其实叫什么不重要，是GNU/Linux也好，是Ubuntu 也好，还是Android也好，无所谓。Linux的各种分发包中都存在着全世界黑客文化的和开源文化的结晶，每当我看到这样的分布图时（例如：[是谁写的Linux?](/2009/%E8%B0%81%E5%86%99%E4%BA%86Linux.md "谁写了Linux")），我心中都有一种说不出来的豪情，这难道不真是一种壮举吗？（[Unix黑客文化的真正延伸](/2010/Unix%E4%BC%A0%E5%A5%87%28%E4%B8%8A%E7%AF%87%29.md "Unix传奇(上篇)")）。


不管这种方式的软件有没有市场，能不能得到“最终用户”的认可，但这已成为了软件开发的一种精神——那种不分彼此，相互协作的精神，不是吗？


（全文完）


