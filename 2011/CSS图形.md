# CSS图形
>date: 2011-08-15T08:21:50+08:00



下面的示例展示了使用纯CSS制作的各种图形，你可以自由地修改文中的CSS代码。这个收集的[原文在这里](https://css-tricks.com/examples/ShapesOfCSS/?=derp)。


 经测试，IE9, Chrome, FF, Safari都可以正常显示。



.shape {
 padding: 20px;
}
.shape > style {
 display: block;
 white-space: pre;
 background: #333;
 color: white;
 font: 12px Monaco;
 padding: 0 15px;
}
.shape > div {
 margin: 20px ;
}
.shape > h5 {
 border-style:none none double none;
 /\*padding: 10px;
 text-indent: 60px;
 margin: 50px 0 0 -70px;\*/
 position: relative;
 font: bold italic 20px "atrament-web-1","atrament-web-2", Georgia, Serif;
 color:#333;
}
.shape > h5 > a {
 position: absolute;
 right: 20px;
 bottom: 10px;
 font-size: 20px;
}




目录



* [正方形](#%E6%AD%A3%E6%96%B9%E5%BD%A2 "正方形")
* [长方形](#%E9%95%BF%E6%96%B9%E5%BD%A2 "长方形")
* [圆形](#%E5%9C%86%E5%BD%A2 "圆形")
* [椭圆形](#%E6%A4%AD%E5%9C%86%E5%BD%A2 "椭圆形")
* [三角形（向上）](#%E4%B8%89%E8%A7%92%E5%BD%A2%EF%BC%88%E5%90%91%E4%B8%8A%EF%BC%89 "三角形（向上）")
* [三角形（向下）](#%E4%B8%89%E8%A7%92%E5%BD%A2%EF%BC%88%E5%90%91%E4%B8%8B%EF%BC%89 "三角形（向下）")
* [三角形（向左）](#%E4%B8%89%E8%A7%92%E5%BD%A2%EF%BC%88%E5%90%91%E5%B7%A6%EF%BC%89 "三角形（向左）")
* [三角形（向右）](#%E4%B8%89%E8%A7%92%E5%BD%A2%EF%BC%88%E5%90%91%E5%8F%B3%EF%BC%89 "三角形（向右）")
* [三角形（左上）](#%E4%B8%89%E8%A7%92%E5%BD%A2%EF%BC%88%E5%B7%A6%E4%B8%8A%EF%BC%89 "三角形（左上）")
* [三角形（右上）](#%E4%B8%89%E8%A7%92%E5%BD%A2%EF%BC%88%E5%8F%B3%E4%B8%8A%EF%BC%89 "三角形（右上）")
* [三角形（左下）](#%E4%B8%89%E8%A7%92%E5%BD%A2%EF%BC%88%E5%B7%A6%E4%B8%8B%EF%BC%89 "三角形（左下）")
* [三角形（右下）](#%E4%B8%89%E8%A7%92%E5%BD%A2%EF%BC%88%E5%8F%B3%E4%B8%8B%EF%BC%89 "三角形（右下）")
* [平行四边行](#%E5%B9%B3%E8%A1%8C%E5%9B%9B%E8%BE%B9%E8%A1%8C "平行四边行")
* [梯形](#%E6%A2%AF%E5%BD%A2 "梯形")
* [六角星形](#%E5%85%AD%E8%A7%92%E6%98%9F%E5%BD%A2 "六角星形")
* [五角星形 via Kit MacAllister](#%E4%BA%94%E8%A7%92%E6%98%9F%E5%BD%A2_via_Kit_MacAllister "五角星形 via Kit MacAllister")
* [五边形](#%E4%BA%94%E8%BE%B9%E5%BD%A2 "五边形")
* [六边形](#%E5%85%AD%E8%BE%B9%E5%BD%A2 "六边形")
* [八边形](#%E5%85%AB%E8%BE%B9%E5%BD%A2 "八边形")
* [心形 via Nicolas Gallagher](#%E5%BF%83%E5%BD%A2_via_Nicolas_Gallagher "心形 via Nicolas Gallagher")
* [无穷大 via Nicolas Gallagher](#%E6%97%A0%E7%A9%B7%E5%A4%A7_via_Nicolas_Gallagher "无穷大 via Nicolas Gallagher")
* [菱形](#%E8%8F%B1%E5%BD%A2 "菱形")
* [鸡蛋](#%E9%B8%A1%E8%9B%8B "鸡蛋")
* [吃豆人](#%E5%90%83%E8%B1%86%E4%BA%BA "吃豆人")
* [说话泡泡](#%E8%AF%B4%E8%AF%9D%E6%B3%A1%E6%B3%A1 "说话泡泡")
* [12星形 via Alan Johnson](#12%E6%98%9F%E5%BD%A2_via_Alan_Johnson "12星形 via Alan Johnson")
* [8星形 via Alan Johnson](#8%E6%98%9F%E5%BD%A2_via_Alan_Johnson "8星形 via Alan Johnson")

##### 正方形



 
#square {
 width: 100px;
 height: 100px;
 background: #f66;
}
 



##### 长方形



 
#rectangle {
 width: 200px;
 height: 100px;
 background: #f66;
}
 


 



##### 圆形



 
#circle {
 width: 100px;
 height: 100px;
 background: #f66;
 -moz-border-radius: 50px;
 -webkit-border-radius: 50px;
 border-radius: 50px;
}
 



##### 椭圆形



 
#oval {
 width: 200px;
 height: 100px;
 background: #f66;
 -moz-border-radius: 100px / 50px;
 -webkit-border-radius: 100px / 50px;
 border-radius: 100px / 50px;
}
 



##### 三角形（向上）



 
#triangle-up {
 width: 0;
 height: 0;
 border-left: 50px solid transparent;
 border-right: 50px solid transparent;
 border-bottom: 100px solid #f66;
}
 



##### 三角形（向下）



 
#triangle-down {
 width: 0;
 height: 0;
 border-left: 50px solid transparent;
 border-right: 50px solid transparent;
 border-top: 100px solid #f66;
} 
 



##### 三角形（向左）



 
#triangle-left {
 width: 0;
 height: 0;
 border-top: 50px solid transparent;
 border-right: 100px solid #f66;
 border-bottom: 50px solid transparent;
}
 



##### 三角形（向右）



 
#triangle-right {
 width: 0;
 height: 0;
 border-top: 50px solid transparent;
 border-left: 100px solid #f66;
 border-bottom: 50px solid transparent;
}



##### 三角形（左上）



 
#triangle-topleft {
 width: 0;
 height: 0;
 border-top: 100px solid #f66; 
 border-right: 100px solid transparent; 
}
 



##### 三角形（右上）



 
#triangle-topright {
 width: 0;
 height: 0;
 border-top: 100px solid #f66; 
 border-left: 100px solid transparent;
}




##### 三角形（左下）



 
#triangle-bottomleft {
 width: 0;
 height: 0;
 border-bottom: 100px solid #f66; 
 border-right: 100px solid transparent; 
} 
 



##### 三角形（右下）



 
#triangle-bottomright {
 width: 0;
 height: 0;
 border-bottom: 100px solid #f66; 
 border-left: 100px solid transparent;
} 
 



##### 平行四边行



 
#parallelogram {
 width: 150px;
 height: 100px;
 -webkit-transform: skew(20deg);
 -moz-transform: skew(20deg);
 -o-transform: skew(20deg);
 background: #f66;
}
 



##### 梯形



 
#trapezoid {
 border-bottom: 100px solid #f66;
 border-left: 50px solid transparent;
 border-right: 50px solid transparent;
 height: 0;
 width: 100px;
}
 



##### 六角星形



 
#star-six {
 width: 0;
 height: 0;
 border-left: 50px solid transparent;
 border-right: 50px solid transparent;
 border-bottom: 100px solid #f66;
 position: relative;
 margin: 20px 0px 50px 20px;
}
#star-six:after {
 width: 0;
 height: 0;
 border-left: 50px solid transparent;
 border-right: 50px solid transparent;
 border-top: 100px solid #f66;
 position: absolute;
 content: "";
 top: 30px;
 left: -50px;
}
 



##### 五角星形 [via Kit MacAllister](http://kitmacallister.com/2011/css-only-5-point-star/)



 
#star-five {
 margin: 80px 0;
 position: relative;
 display: block;
 color: #f66;
 width: 0px;
 height: 0px;
 border-right: 100px solid transparent;
 border-bottom: 70px solid #f66;
 border-left: 100px solid transparent;
 -moz-transform: rotate(35deg);
 -webkit-transform: rotate(35deg);
 -ms-transform: rotate(35deg);
 -o-transform: rotate(35deg);
}
#star-five:before {
 border-bottom: 80px solid #f66;
 border-left: 30px solid transparent;
 border-right: 30px solid transparent;
 position: absolute;
 height: 0;
 width: 0;
 top: -45px;
 left: -65px;
 display: block;
 content: '';
 -webkit-transform: rotate(-35deg);
 -moz-transform: rotate(-35deg);
 -ms-transform: rotate(-35deg);
 -o-transform: rotate(-35deg);
}
#star-five:after {
 position: absolute;
 display: block;
 color: #f66;
 top: 3px;
 left: -105px;
 width: 0px;
 height: 0px;
 border-right: 100px solid transparent;
 border-bottom: 70px solid #f66;
 border-left: 100px solid transparent;
 -webkit-transform: rotate(-70deg);
 -moz-transform: rotate(-70deg);
 -ms-transform: rotate(-70deg);
 -o-transform: rotate(-70deg);
 content: '';
}
 



##### 五边形



 
#pentagon {
 position: relative;
 width: 54px;
 border-width: 50px 18px 0;
 border-style: solid;
 border-color: #f66 transparent;
 margin: 50px 0px 20px 20px;
}
#pentagon:before {
 content: "";
 position: absolute;
 height: 0;
 width: 0;
 top: -85px;
 left: -18px;
 border-width: 0 45px 35px;
 border-style: solid;
 border-color: transparent transparent #f66;
}
 



##### 六边形



 
#hexagon {
 width: 100px;
 height: 55px;
 background: #f66;
 position: relative;
 margin: 50px 0px 50px 20px;
}
#hexagon:before {
 content: "";
 position: absolute;
 top: -25px; 
 left: 0;
 width: 0;
 height: 0;
 border-left: 50px solid transparent;
 border-right: 50px solid transparent;
 border-bottom: 25px solid #f66;
}
#hexagon:after {
 content: "";
 position: absolute;
 bottom: -25px; 
 left: 0;
 width: 0;
 height: 0;
 border-left: 50px solid transparent;
 border-right: 50px solid transparent;
 border-top: 25px solid #f66;
}


##### 八边形



 
#octagon {
 width: 100px;
 height: 100px;
 background: #f66;
 position: relative;
}
#octagon:before {
 content: "";
 position: absolute;
 top: 0;
 left: 0; 
 border-bottom: 29px solid #f66;
 border-left: 29px solid #fff;
 border-right: 29px solid #fff;
 width: 42px;
 height: 0;
}
#octagon:after {
 content: "";
 position: absolute;
 bottom: 0;
 left: 0; 
 border-top: 29px solid #f66;
 border-left: 29px solid #fff;
 border-right: 29px solid #fff;
 width: 42px;
 height: 0;
}
 



##### 心形 [via Nicolas Gallagher](http://nicolasgallagher.com/)



 
#heart {
 position: relative;
 width: 100px;
 height: 90px;
}
#heart:before,
#heart:after {
 position: absolute;
 content: "";
 left: 50px;
 top: 0;
 width: 50px;
 height: 80px;
 background: #f66;
 -moz-border-radius: 50px 50px 0 0;
 border-radius: 50px 50px 0 0;
 -webkit-transform: rotate(-45deg);
 -moz-transform: rotate(-45deg);
 -ms-transform: rotate(-45deg);
 -o-transform: rotate(-45deg);
 transform: rotate(-45deg);
 -webkit-transform-origin: 0 100%;
 -moz-transform-origin: 0 100%;
 -ms-transform-origin: 0 100%;
 -o-transform-origin: 0 100%;
 transform-origin: 0 100%;
}
#heart:after {
 left: 0;
 -webkit-transform: rotate(45deg);
 -moz-transform: rotate(45deg);
 -ms-transform: rotate(45deg);
 -o-transform: rotate(45deg);
 transform: rotate(45deg);
 -webkit-transform-origin: 100% 100%;
 -moz-transform-origin: 100% 100%;
 -ms-transform-origin: 100% 100%;
 -o-transform-origin: 100% 100%;
 transform-origin :100% 100%;
}




##### 无穷大 [via Nicolas Gallagher](http://nicolasgallagher.com/)



 
#infinity {
 position: relative;
 width: 212px;
 height: 100px;
}
#infinity:before,
#infinity:after {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 width: 60px;
 height: 60px; 
 border: 20px solid #f66;
 -moz-border-radius: 50px 50px 0 50px;
 border-radius: 50px 50px 0 50px;
 -webkit-transform: rotate(-45deg);
 -moz-transform: rotate(-45deg);
 -ms-transform: rotate(-45deg);
 -o-transform: rotate(-45deg);
 transform: rotate(-45deg);
}
#infinity:after {
 left: auto;
 right: 0;
 -moz-border-radius: 50px 50px 50px 0;
 border-radius: 50px 50px 50px 0;
 -webkit-transform: rotate(45deg);
 -moz-transform: rotate(45deg);
 -ms-transform: rotate(45deg);
 -o-transform: rotate(45deg);
 transform: rotate(45deg);
}



##### 菱形



 
#diamond {
 width: 80px; 
 height: 80px; 
 background: #f66;
 margin: 50px 20px 20px 60px;
 -webkit-transform: rotate(-45deg);
 -moz-transform: rotate(-45deg);
 -ms-transform: rotate(-45deg);
 -o-transform: rotate(-45deg);
 transform: rotate(-45deg);
 -webkit-transform-origin: 0 100%;
 -moz-transform-origin: 0 100%;
 -ms-transform-origin: 0 100%;
 -o-transform-origin: 0 100%;
 transform-origin: 0 100%;
}



##### 鸡蛋



 
#egg {
 display:block;
 width: 126px; 
 height: 180px;
 background-color: #f66;
 -webkit-border-radius: 63px 63px 63px 63px / 108px 108px 72px 72px;
 border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
}



##### 吃豆人



 
#pacman {
 width: 0px;
 height: 0px;
 border-right: 60px solid transparent;
 border-top: 60px solid #f66;
 border-left: 60px solid #f66;
 border-bottom: 60px solid #f66;
 border-top-left-radius: 60px;
 border-top-right-radius: 60px;
 border-bottom-left-radius: 60px;
 border-bottom-right-radius: 60px;
}



##### 说话泡泡



 
#talkbubble {
 width: 120px; 
 height: 80px; 
 background: #f66;
 position: relative;
 -moz-border-radius: 10px; 
 -webkit-border-radius: 10px; 
 border-radius: 10px;
}
#talkbubble:before {
 content:"";
 position: absolute;
 right: 100%;
 top: 26px;
 width: 0;
 height: 0;
 border-top: 13px solid transparent;
 border-right: 26px solid #f66;
 border-bottom: 13px solid transparent;
}



##### 12星形 [via Alan Johnson](http://commondream.net/post/8848553728/pure-css-badges)



 
#burst-12 {
 background: #f66;
 width: 80px;
 height: 80px;
 position: relative;
 text-align: center;
}
#burst-12:before, #burst-12:after {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 height: 80px;
 width: 80px;
 background: #f66;
}
#burst-12:before {
 -webkit-transform: rotate(30deg);
 -moz-transform: rotate(30deg);
 -ms-transform: rotate(30deg);
 -o-transform: rotate(30deg);
 transform: rotate(30deg);
}
#burst-12:after {
 -webkit-transform: rotate(60deg);
 -moz-transform: rotate(60deg);
 -ms-transform: rotate(60deg);
 -o-transform: rotate(60deg);
 transform: rotate(60deg);
}



##### 8星形 [via Alan Johnson](http://commondream.net/post/8848553728/pure-css-badges)



 
#burst-8 {
 background: #f66;
 width: 80px;
 height: 80px;
 position: relative;
 text-align: center;
 -webkit-transform: rotate(20deg);
 -moz-transform: rotate(20deg);
 -ms-transform: rotate(20deg);
 -o-transform: rotate(20eg);
 transform: rotate(20deg);
}
#burst-8:before {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 height: 80px;
 width: 80px;
 background: #f66;
 -webkit-transform: rotate(135deg);
 -moz-transform: rotate(135deg);
 -ms-transform: rotate(135deg);
 -o-transform: rotate(135deg);
 transform: rotate(135deg);
}

(全文完)



