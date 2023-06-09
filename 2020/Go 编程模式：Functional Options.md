# Go 编程模式：Functional Options
>date: 2020-12-22T23:23:52+08:00


![](/assets/images/coolshell.cn/wp-content/uploads/2020/12/go.options-300x186.png)在本篇文章中，我们来讨论一下Functional Options这个编程模式。这是一个函数式编程的应用案例，编程技巧也很好，是目前在Go语言中最流行的一种编程模式。但是，在我们正式讨论这个模式之前，我们需要先来看看要解决什么样的问题。


### 本文是全系列中第3 / 10篇：[Go编程模式](https://coolshell.cn/articles/series/go%e7%bc%96%e7%a8%8b%e6%a8%a1%e5%bc%8f)

* [Go编程模式：切片，接口，时间和性能](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E5%88%87%E7%89%87%EF%BC%8C%E6%8E%A5%E5%8F%A3%EF%BC%8C%E6%97%B6%E9%97%B4%E5%92%8C%E6%80%A7%E8%83%BD.md)
* [Go 编程模式：错误处理](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E9%94%99%E8%AF%AF%E5%A4%84%E7%90%86.md)
* Go 编程模式：Functional Options
* [Go编程模式：委托和反转控制](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E5%A7%94%E6%89%98%E5%92%8C%E5%8F%8D%E8%BD%AC%E6%8E%A7%E5%88%B6.md)
* [Go编程模式：Map-Reduce](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9AMap-Reduce.md)
* [Go 编程模式：Go Generation](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9AGo%20Generation.md)
* [Go编程模式：修饰器](/2017/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E4%BF%AE%E9%A5%B0%E5%99%A8.md)
* [Go编程模式：Pipeline](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9APipeline.md)
* [Go 编程模式：k8s Visitor 模式](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9Ak8s%20Visitor%20%E6%A8%A1%E5%BC%8F.md)
* [Go编程模式 ： 泛型编程](/2021/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%20%EF%BC%9A%20%E6%B3%9B%E5%9E%8B%E7%BC%96%E7%A8%8B.md)

« [上一篇文章](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E9%94%99%E8%AF%AF%E5%A4%84%E7%90%86.md "Go 编程模式：错误处理")[下一篇文章](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E5%A7%94%E6%89%98%E5%92%8C%E5%8F%8D%E8%BD%AC%E6%8E%A7%E5%88%B6.md "Go编程模式：委托和反转控制") »


目录



* [配置选项问题](#%E9%85%8D%E7%BD%AE%E9%80%89%E9%A1%B9%E9%97%AE%E9%A2%98 "配置选项问题")
* [配置对象方案](#%E9%85%8D%E7%BD%AE%E5%AF%B9%E8%B1%A1%E6%96%B9%E6%A1%88 "配置对象方案")
* [Builder模式](#Builder%E6%A8%A1%E5%BC%8F "Builder模式")
* [Functional Options](#Functional_Options "Functional Options")
* [参考文档](#%E5%8F%82%E8%80%83%E6%96%87%E6%A1%A3 "参考文档")

#### 配置选项问题


在我们编程中，我们会经常性的需要对一个对象（或是业务实体）进行相关的配置。比如下面这个业务实体（注意，这仅只是一个示例）：



```
type Server struct {
    Addr     string
    Port     int
    Protocol string
    Timeout  time.Duration
    MaxConns int
    TLS      *tls.Config
}
```

在这个 `Server` 对象中，我们可以看到：



* 要有侦听的IP地址 `Addr` 和端口号 `Port` ，这两个配置选项是必填的（当然，IP地址和端口号都可以有默认值，当这里我们用于举例认为是没有默认值，而且不能为空，需要必填的）。
* 然后，还有协议 `Protocol` 、 `Timeout` 和`MaxConns` 字段，这几个字段是不能为空的，但是有默认值的，比如：协议是`tcp`, 超时`30`秒 和 最大链接数`1024`个。
* 还有一个 `TLS` 这个是安全链接，需要配置相关的证书和私钥。这个是可以为空的。


所以，针对于上述这样的配置，我们需要有多种不同的创建不同配置 `Server` 的函数签名，如下所示（代码比较宽，需要左右滚动浏览）：



```
func NewDefaultServer(addr string, port int) (*Server, error) {
  return &Server{addr, port, "tcp", 30 * time.Second, 100, nil}, nil
}

func NewTLSServer(addr string, port int, tls *tls.Config) (*Server, error) {
  return &Server{addr, port, "tcp", 30 * time.Second, 100, tls}, nil
}

func NewServerWithTimeout(addr string, port int, timeout time.Duration) (*Server, error) {
  return &Server{addr, port, "tcp", timeout, 100, nil}, nil
}

func NewTLSServerWithMaxConnAndTimeout(addr string, port int, maxconns int, timeout time.Duration, tls *tls.Config) (*Server, error) {
  return &Server{addr, port, "tcp", 30 * time.Second, maxconns, tls}, nil
}
```

因为Go语言不支持重载函数，所以，你得用不同的函数名来应对不同的配置选项。


#### 配置对象方案


要解决这个问题，最常见的方式是使用一个配置对象，如下所示：



```
type Config struct {
    Protocol string
    Timeout  time.Duration
    Maxconns int
    TLS      *tls.Config
}
```

我们把那些非必输的选项都移到一个结构体里，于是 `Server` 对象变成了：



```
type Server struct {
    Addr string
    Port int
    Conf *Config
}
```

于是，我们只需要一个 `NewServer()` 的函数了，在使用前需要构造 `Config` 对象。



```
func NewServer(addr string, port int, conf *Config) (*Server, error) {
    //...
}

//Using the default configuratrion
srv1, _ := NewServer("localhost", 9000, nil) 

conf := ServerConfig{Protocol:"tcp", Timeout: 60*time.Duration}
srv2, _ := NewServer("locahost", 9000, &conf)
```

这段代码算是不错了，大多数情况下，我们可能就止步于此了。但是，对于有洁癖的有追求的程序员来说，他们能看到其中有一点不好的是，`Config` 并不是必需的，所以，你需要判断是否是 `nil` 或是 Empty –  `Config{}`这让我们的代码感觉还是有点不是很干净。


#### Builder模式


如果你是一个Java程序员，熟悉设计模式的一定会很自然地使用上Builder模式。比如如下的代码：



```
User user = new User.Builder()
  .name("Hao Chen")
  .email("[[email protected]](/cdn-cgi/l/email-protection)")
  .nickname("左耳朵")
  .build();
```

仿照上面这个模式，我们可以把上面代码改写成如下的代码（注：下面的代码没有考虑出错处理，其中关于出错处理的更多内容，请参看《[Go 编程模式：出错处理](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E9%94%99%E8%AF%AF%E5%A4%84%E7%90%86.md "GO 编程模式：错误处理")》）：



```
//使用一个builder类来做包装
type ServerBuilder struct {
  Server
}

func (sb *ServerBuilder) Create(addr string, port int) *ServerBuilder {
  sb.Server.Addr = addr
  sb.Server.Port = port
  //其它代码设置其它成员的默认值
  return sb
}

func (sb *ServerBuilder) WithProtocol(protocol string) *ServerBuilder {
  sb.Server.Protocol = protocol 
  return sb
}

func (sb *ServerBuilder) WithMaxConn( maxconn int) *ServerBuilder {
  sb.Server.MaxConns = maxconn
  return sb
}

func (sb *ServerBuilder) WithTimeOut( timeout time.Duration) *ServerBuilder {
  sb.Server.Timeout = timeout
  return sb
}

func (sb *ServerBuilder) WithTLS( tls *tls.Config) *ServerBuilder {
  sb.Server.TLS = tls
  return sb
}

func (sb *ServerBuilder) Build() (Server) {
  return  sb.Server
}

```

于是就可以以如下的方式来使用了



```
sb := ServerBuilder{}
server, err := sb.Create("127.0.0.1", 8080).
  WithProtocol("udp").
  WithMaxConn(1024).
  WithTimeOut(30*time.Second).
  Build()
```

上面这样的方式也很清楚，不需要额外的Config类，使用链式的函数调用的方式来构造一个对象，只需要多加一个Builder类，这个Builder类似乎有点多余，我们似乎可以直接在`Server` 上进行这样的 Builder 构造，的确是这样的。但是在处理错误的时候可能就有点麻烦（需要为Server结构增加一个error 成员，破坏了Server结构体的“纯洁”），不如一个包装类更好一些。


如果我们想省掉这个包装的结构体，那么就轮到我们的Functional Options上场了，函数式编程。


#### Functional Options


首先，我们先定义一个函数类型：



```
type Option func(*Server)
```

然后，我们可以使用函数式的方式定义一组如下的函数：



```
func Protocol(p string) Option {
    return func(s *Server) {
        s.Protocol = p
    }
}
func Timeout(timeout time.Duration) Option {
    return func(s *Server) {
        s.Timeout = timeout
    }
}
func MaxConns(maxconns int) Option {
    return func(s *Server) {
        s.MaxConns = maxconns
    }
}
func TLS(tls *tls.Config) Option {
    return func(s *Server) {
        s.TLS = tls
    }
}
```

上面这组代码传入一个参数，然后返回一个函数，返回的这个函数会设置自己的 `Server` 参数。例如：


* 当我们调用其中的一个函数用 `MaxConns(30)` 时
* 其返回值是一个 `func(s* Server) { s.MaxConns = 30 }` 的函数。


这个叫高阶函数。在数学上，就好像这样的数学定义，计算长方形面积的公式为： `rect(width, height) = width * height;` 这个函数需要两个参数，我们包装一下，就可以变成计算正方形面积的公式：`square(width) = rect(width, width)` 也就是说，`squre(width)`返回了另外一个函数，这个函数就是`rect(w,h)` 只不过他的两个参数是一样的。即：`f(x)  = g(x, x)`


好了，现在我们再定一个 `NewServer()`的函数，其中，有一个可变参数 `options` 其可以传出多个上面上的函数，然后使用一个for-loop来设置我们的 `Server` 对象。



```
func NewServer(addr string, port int, options ...func(*Server)) (*Server, error) {

  srv := Server{
    Addr:     addr,
    Port:     port,
    Protocol: "tcp",
    Timeout:  30 * time.Second,
    MaxConns: 1000,
    TLS:      nil,
  }
  for _, option := range options {
    option(&srv)
  }
  //...
  return &srv, nil
}
```

于是，我们在创建 `Server` 对象的时候，我们就可以这样来了。



```
s1, _ := NewServer("localhost", 1024)
s2, _ := NewServer("localhost", 2048, Protocol("udp"))
s3, _ := NewServer("0.0.0.0", 8080, Timeout(300*time.Second), MaxConns(1000))
```

怎么样，是不是高度的整洁和优雅？不但解决了使用 `Config` 对象方式 的需要有一个config参数，但在不需要的时候，是放 `nil` 还是放 `Config{}`的选择困难，也不需要引用一个Builder的控制对象，直接使用函数式编程的试，在代码阅读上也很优雅。


所以，以后，大家在要玩类似的代码时，强烈推荐使用Functional Options这种方式，这种方式至少带来了如下的好处：


* 直觉式的编程
* 高度的可配置化
* 很容易维护和扩展
* 自文档
* 对于新来的人很容易上手
* 没有什么令人困惑的事（是nil 还是空）


#### 参考文档


* **“Self referential functions and design” by Rob Pike**<http://commandcenter.blogspot.com.au/2014/01/self-referential-functions-and-design.html>


(全文完)


