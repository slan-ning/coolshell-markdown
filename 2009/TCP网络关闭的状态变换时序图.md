# TCP网络关闭的状态变换时序图
>date: 2009-09-27T16:11:19+08:00


TCP共有11个网路状态，其中涉及到关闭的状态有5个。


在我们编写网络相关程序的时候，这5个状态经常出现。因为这5个状态相互关联，相互纠缠，而且状态变化触发都是由应用触发，但是又涉及操作系统和网络，所以正确的理解TCP 在关闭时网络状态变化情况，为我们诊断网络中各种问题，快速定位故障有着非常重要的作用和意义。


下是是根据W.Richard Stevens的《TCP/IP详解》一书的TCP状态转换图。


![](/assets/images/tcp1.jpg "tcp 状态转换图")



![](/assets/images/tcp2.jpg "tcp 状态转换图 （注释）") ![](/assets/images/tcp3.jpg "tcp 连接建立关闭图") ![](/assets/images/tcp3.jpg "tcp 连接建图") ![](/assets/images/tcp5.jpg "tcp 连接关闭图")



