# 一个显示排序过程的Python脚本
>date: 2009-04-15T14:01:45+08:00


之前向大家介绍过《[一个排序算法比较的网站](/2009/%E4%B8%80%E4%B8%AA%E6%8E%92%E5%BA%8F%E7%AE%97%E6%B3%95%E6%AF%94%E8%BE%83%E7%9A%84%E7%BD%91%E7%AB%99.md)》，那个网站用动画演示了各种排序算法，并分析了各种排序算法。这里，要向大家推荐一个Python脚本，其可以把排序的过程给显示出来。


下图是“**冒泡排序**”的一个示例，其中：


1. 折线表示了各个元素的位置变化。
2. 折线的深浅表示了元素的大小。越深则越大。


[![bubble](/assets/images/coolshell.cn/wp-content/uploads/2009/04/bubble.png "bubble")](/assets/images/coolshell.cn/wp-content/uploads/2009/04/bubble.png)



同样，还有其它一些排序算法的图片：


**堆排序（Heap Sort）**


[![heap](/assets/images/coolshell.cn/wp-content/uploads/2009/04/heap.png "heap")](/assets/images/coolshell.cn/wp-content/uploads/2009/04/heap.png)


**选择排序（Selection）**


[![selection](/assets/images/coolshell.cn/wp-content/uploads/2009/04/selection.png "selection")](/assets/images/coolshell.cn/wp-content/uploads/2009/04/selection.png)


**快速排序（Quick）**


[![quick](/assets/images/coolshell.cn/wp-content/uploads/2009/04/quick.png "quick")](/assets/images/coolshell.cn/wp-content/uploads/2009/04/quick.png)


**Shell排序**


[![shell](/assets/images/coolshell.cn/wp-content/uploads/2009/04/shell.png "shell")](/assets/images/coolshell.cn/wp-content/uploads/2009/04/shell.png)


**插入排序（Insertion）**


[![listinsertion](/assets/images/coolshell.cn/wp-content/uploads/2009/04/listinsertion.png "listinsertion")](/assets/images/coolshell.cn/wp-content/uploads/2009/04/listinsertion.png)


你可以使用如下的Python代码来制作这些图片：（需要 [Cairo](http://cairographics.org/)图片库支持）


[**Python排序脚本**](https://coolshell.cn/wp-content/uploads/2009/04/visualise.py)


这个脚本`参数如下：`


* `-a 表示使用什么样的算法，取值为"quick", "heap", "selection", "insertion", "bubble", "shell"。`
* `-n 表示要排序的数据个数。`
* `-f 表示输入文件。`
* `-p 表示文件前缀。`
* `-d 表示输出顺序。`
* `-x 图片宽度。`
* `-y 图片高度。`
* `-l 所有线的宽度。`
* `-b 边界宽度。`


`使用示例如下：`



`./visualise.py -l 6 -x 700 -y 300 -n 15` 



文章：[来源](http://www.hatfulofhollow.com/posts/code/visualisingsorting/index.html)


