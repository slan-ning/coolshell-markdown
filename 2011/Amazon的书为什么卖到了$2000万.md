# Amazon的书为什么卖到了$2000万
>date: 2011-04-28T12:41:41+08:00


最近，Amazon的新闻比较多，除了[Amazon的云平台宕机](/2011/%E5%85%B3%E4%BA%8EAmazon%E4%BA%91%E5%AE%95%E6%9C%BA%E7%9A%84%E7%BD%91%E8%B4%B4%E6%94%B6%E9%9B%86.md "关于Amazon云宕机的网贴收集")外，还有一个被热炒的新闻是在Amazon的书店里，有一本书要买$23,698,655.93美元，相当于1亿5千万人民币（如下图所示），这个事情是由UC Berkeley的生物学家Michael Eisen发现的，然后他在他的博客上写了[一篇文章来说明这个事情](http://www.michaeleisen.org/blog/?p=358 "Amazon’s $23,698,655.93 book about flies")。


这本书是1992年，现在绝版了，生物学家决定上Amazon找一下，结果看到了有两本新书，还有一些二手的，二手书价比较正常，但是那两个新书的价都上了百万。这个生物学家还写了邮件给原作者和原作者开了玩笑。呵呵。


![](/assets/images/www.michaeleisen.org/blog/wp-content/uploads/2011/04/lawrence_1.png "lawrence_1")


一般人可能就把这个事当成个笑话了，不过，教授就是教授，它还认真的研究了一下为什么会这样。



首先，这个不是Amazon的订价的问题，这是Amazon的第三方商户平台两个商户报价，一个商户叫profnath，另一个商户叫bordeebook。我们的生物学教授观察这两个商户的书价了几天，看到了下面的结果：


![](/assets/images/www.michaeleisen.org/blog/wp-content/uploads/2011/04/lawrence_prices1.png "lawrence_prices1")


从上面的表中，我们可以看到，profnath商户的价格总是bordeebook的99.83%，而bordeebook的总是比profnath的高27.059%，很明显，这两个商户用的是程序在自动定价——“自动竞价”。


* profnath商户想把书买出去，所以，其订价要比最高价要低一些（99.83%），这个很容易理解。
* bordeebook商户为什么要比最高价要高1.27倍呢？合理的解释是，bordeebook并没有这本书，这个商户只是想用更多的选品来吸引买家，这样可以让人觉得他和竞争对手有一样多的选品。所以，他要把价订得高一点，这样就算是被人下单，他可以从别人手里把书买过来，然后再卖给卖家。27%的空间，够他赚了。


因为两个商户订的比例不一样，所以，这两个商户的自动订价系统就成了相互涨价的程序——profnath以差0.17%差价跟上，而bordeebook以27%的幅度甩开，profnth再跟上，bordeebook再甩开……。于是最后的价格就到了$23,698,655.93美金。呵呵。


下面，我说说我的收获——


* **能力**：我非常欣赏这位生物学教授的求甚解的态度，这和[Linus要求其团队成员的能力](/2011/Linux%202.6.39-rc3%E7%9A%84%E4%B8%80%E4%B8%AA%E6%8F%92%E6%9B%B2.md "Linux 2.6.39-rc3的一个插曲")如出一辙。赞一个！
* **商业**：从这两个商户的行为看到了一种相反的商业技巧。profnath 和 bordeebook  都是聪明的商家。
* **电商**：自动定价系统可能会成为未来电子商务的一个重要的方向。电子商务还有很多东西可以做啊。
* **程序**：程序设计中需要加上边界条件，最高值和最低值（当然，我能理解为什么这两个商户没有回，因为不同的商品价格差得太大，也许他们也在卖一些几百万的商品）。


最后，这本书的网址在这里《[The Making of a Fly: The Genetics of Animal Design](https://www.amazon.com/gp/offer-listing/0632030488/ref=dp_olp_0?ie=UTF8&redirect=true&qid=1303712892&sr=8-1&condition=all)》，你可以看到价格又在攀升了，昨天我看的是200多美，我写这篇文章此时的价格是近1000美金了。呵呵。


（全文完）


**（请勿用于商业用途，转载时请注明作者和出处）**


