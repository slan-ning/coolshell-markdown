# Python修饰器的函数式编程
>date: 2014-03-20T09:50:34+08:00


![](/assets/images/coolshell.cn/wp-content/uploads/2014/03/snake-hat-new-year-schedule-800x960.jpg)Python的修饰器的英文名叫Decorator，当你看到这个英文名的时候，你可能会把其跟Design Pattern里的Decorator搞混了，其实这是完全不同的两个东西。虽然好像，他们要干的事都很相似——都是想要对一个已有的模块做一些“修饰工作”，所谓修饰工作就是想给现有的模块加上一些小装饰（一些小功能，这些小功能可能好多模块都会用到），但又不让这个小装饰（小功能）侵入到原有的模块中的代码里去。但是OO的Decorator简直就是一场恶梦，不信你就去看看wikipedia上的词条（[Decorator Pattern](https://en.wikipedia.org/wiki/Decorator_pattern)）里的UML图和那些代码，这就是我在《 [从面向对象的设计模式看软件设计](/2013/%E4%BB%8E%E9%9D%A2%E5%90%91%E5%AF%B9%E8%B1%A1%E7%9A%84%E8%AE%BE%E8%AE%A1%E6%A8%A1%E5%BC%8F%E7%9C%8B%E8%BD%AF%E4%BB%B6%E8%AE%BE%E8%AE%A1.md "链接：从面向对象的设计模式看软件设计")》“餐后甜点”一节中说的，OO鼓励了——“厚重地胶合和复杂层次”，也是《 [如此理解面向对象编程](/2012/%E5%A6%82%E6%AD%A4%E7%90%86%E8%A7%A3%E9%9D%A2%E5%90%91%E5%AF%B9%E8%B1%A1%E7%BC%96%E7%A8%8B.md "链接：如此理解面向对象编程")》中所说的“OO的狂热者们非常害怕处理数据”，Decorator Pattern搞出来的代码简直就是OO的反面教程。


Python 的 Decorator在使用上和Java/C#的Annotation很相似，就是在方法名前面加一个@XXX注解来为这个方法装饰一些东西。但是，Java/C#的Annotation也很让人望而却步，太TMD的复杂了，你要玩它，你需要了解一堆Annotation的类库文档，让人感觉就是在学另外一门语言。


而Python使用了一种相对于Decorator Pattern和Annotation来说非常优雅的方法，这种方法不需要你去掌握什么复杂的OO模型或是Annotation的各种类库规定，完全就是语言层面的玩法：一种函数式编程的技巧。如果你看过本站的《[函数式编程](/2013/%E5%87%BD%E6%95%B0%E5%BC%8F%E7%BC%96%E7%A8%8B.md)》，你一定会为函数式编程的那种“描述你想干什么，而不是描述你要怎么去实现”的编程方式感到畅快。（如果你不了解函数式编程，那在读本文之前，还请你移步去看看《[函数式编程](/2013/%E5%87%BD%E6%95%B0%E5%BC%8F%E7%BC%96%E7%A8%8B.md)》） 好了，我们先来点感性认识，看一个Python修饰器的Hello World的代码。





目录



* [Hello World](#Hello_World "Hello World")
* [Decorator 的本质](#Decorator_%E7%9A%84%E6%9C%AC%E8%B4%A8 "Decorator 的本质")
* [带参数及多个Decrorator](#%E5%B8%A6%E5%8F%82%E6%95%B0%E5%8F%8A%E5%A4%9A%E4%B8%AADecrorator "带参数及多个Decrorator")
* [class式的 Decorator](#class%E5%BC%8F%E7%9A%84_Decorator "class式的 Decorator")
* [用Decorator设置函数的调用参数](#%E7%94%A8Decorator%E8%AE%BE%E7%BD%AE%E5%87%BD%E6%95%B0%E7%9A%84%E8%B0%83%E7%94%A8%E5%8F%82%E6%95%B0 "用Decorator设置函数的调用参数")
* [Decorator的副作用](#Decorator%E7%9A%84%E5%89%AF%E4%BD%9C%E7%94%A8 "Decorator的副作用")
* [一些decorator的示例](#%E4%B8%80%E4%BA%9Bdecorator%E7%9A%84%E7%A4%BA%E4%BE%8B "一些decorator的示例")
	+ [给函数调用做缓存](#%E7%BB%99%E5%87%BD%E6%95%B0%E8%B0%83%E7%94%A8%E5%81%9A%E7%BC%93%E5%AD%98 "给函数调用做缓存")
	+ [Profiler的例子](#Profiler%E7%9A%84%E4%BE%8B%E5%AD%90 "Profiler的例子")
	+ [注册回调函数](#%E6%B3%A8%E5%86%8C%E5%9B%9E%E8%B0%83%E5%87%BD%E6%95%B0 "注册回调函数")
	+ [给函数打日志](#%E7%BB%99%E5%87%BD%E6%95%B0%E6%89%93%E6%97%A5%E5%BF%97 "给函数打日志")
	+ [一个MySQL的Decorator](#%E4%B8%80%E4%B8%AAMySQL%E7%9A%84Decorator "一个MySQL的Decorator")
	+ [线程异步](#%E7%BA%BF%E7%A8%8B%E5%BC%82%E6%AD%A5 "线程异步")
* [其它](#%E5%85%B6%E5%AE%83 "其它")

#### Hello World


下面是代码（文件名：hello.py）：



```
def hello(fn):
    def wrapper():
        print "hello, %s" % fn.__name__
        fn()
        print "goodby, %s" % fn.__name__
    return wrapper

@hello
def foo():
    print "i am foo"

foo()

```

当你运行代码，你会看到如下输出：



```
[[[email protected]](/cdn-cgi/l/email-protection)]$ python hello.py
hello, foo
i am foo
goodby, foo
```

你可以看到如下的东西：


1）函数foo前面有个@hello的“注解”，hello就是我们前面定义的函数hello


2）在hello函数中，其需要一个fn的参数（这就用来做回调的函数）


3）hello函数中返回了一个inner函数wrapper，这个wrapper函数回调了传进来的fn，并在回调前后加了两条语句。


#### Decorator 的本质


对于Python的这个@注解语法糖- Syntactic Sugar 来说，当你在用某个@decorator来修饰某个函数func时，如下所示:



```
@decorator
def func():
    pass

```

其解释器会解释成下面这样的语句：



```
func = decorator(func)
```

尼玛，这不就是把一个函数当参数传到另一个函数中，然后再回调吗？是的，但是，我们需要注意，那里还有一个赋值语句，把decorator这个函数的返回值赋值回了原来的func。 根据《[函数式编程](/2013/%E5%87%BD%E6%95%B0%E5%BC%8F%E7%BC%96%E7%A8%8B.md)》中的**first class functions**中的定义的，你可以把函数当成变量来使用，所以，decorator必需得返回了一个函数出来给func，这就是所谓的**higher order function** 高阶函数，不然，后面当func()调用的时候就会出错。 就我们上面那个hello.py里的例子来说，



```
@hello
def foo():
    print "i am foo"

```

被解释成了：



```
 foo = hello(foo)
```

**是的，这是一条语句，而且还被执行了。**你如果不信的话，你可以写这样的程序来试试看：



```
def fuck(fn):
    print "fuck %s!" % fn.__name__[::-1].upper()

@fuck
def wfg():
    pass

```

没了，就上面这段代码，没有调用wfg()的语句，你会发现， fuck函数被调用了，而且还很NB地输出了我们每个人的心声！


再回到我们hello.py的那个例子，我们可以看到，**hello(foo)返回了wrapper()函数，所以，foo其实变成了wrapper的一个变量，而后面的foo()执行其实变成了wrapper()**。


知道这点本质，当你看到有多个decorator或是带参数的decorator，你也就不会害怕了。


比如：多个decorator



```
@decorator_one
@decorator_two
def func():
    pass
```

相当于：



```
func = decorator_one(decorator_two(func))
```

比如：带参数的decorator：



```
@decorator(arg1, arg2)
def func():
    pass
```

相当于：



```
func = decorator(arg1,arg2)(func)
```

这意味着decorator(arg1, arg2)这个函数需要返回一个“真正的decorator”。


#### 带参数及多个Decrorator


我们来看一个有点意义的例子（文件名：html.py）：


在上面这个例子中，我们可以看到：makeHtmlTag有两个参数。所以，**为了让 hello = makeHtmlTag(arg1, arg2)(hello) 成功，makeHtmlTag 必需返回一个decorator**（这就是为什么我们在makeHtmlTag中加入了real\_decorator()的原因）**，这样一来，我们就可以进入到 decorator 的逻辑中去了**—— decorator得返回一个wrapper，wrapper里回调hello。**看似那个makeHtmlTag() 写得层层叠叠，但是，已经了解了本质的我们觉得写得很自然**。 你看，Python的Decorator就是这么简单，没有什么复杂的东西，你也不需要了解过多的东西，使用起来就是那么自然、体贴、干爽、透气，独有的速效凹道和完美的吸收轨迹，让你再也不用为每个月的那几天感到焦虑和不安，再加上贴心的护翼设计，量多也不用当心。对不起，我调皮了。 什么，你觉得上面那个带参数的Decorator的函数嵌套太多了，你受不了。好吧，没事，我们看看下面的方法。


#### class式的 Decorator


首先，先得说一下，decorator的class方式，还是看个示例：



```
class myDecorator(object):

    def __init__(self, fn):
        print "inside myDecorator.__init__()"
        self.fn = fn

    def __call__(self):
        self.fn()
        print "inside myDecorator.__call__()"

@myDecorator
def aFunction():
    print "inside aFunction()"

print "Finished decorating aFunction()"

aFunction()

# 输出：
# inside myDecorator.__init__()
# Finished decorating aFunction()
# inside aFunction()
# inside myDecorator.__call__()
```

上面这个示例展示了，用类的方式声明一个decorator。我们可以看到这个类中有两个成员：  

1）一个是**init**()，这个方法是在我们给某个函数decorator时被调用，所以，需要有一个fn的参数，也就是被decorator的函数。  

2）一个是**call**()，这个方法是在我们调用被decorator函数时被调用的。  

上面输出可以看到整个程序的执行顺序。


这看上去要比“函数式”的方式更易读一些。


下面，我们来看看用类的方式来重写上面的html.py的代码（文件名：html.py）：



```
class makeHtmlTagClass(object):

    def __init__(self, tag, css_class=""):
        self._tag = tag
        self._css_class = " class='{0}'".format(css_class) \
                                       if css_class !="" else ""

    def __call__(self, fn):
        def wrapped(*args, **kwargs):
            return "<" + self._tag + self._css_class+">"  \
                       + fn(*args, **kwargs) + "</" + self._tag + ">"
        return wrapped

@makeHtmlTagClass(tag="b", css_class="bold_css")
@makeHtmlTagClass(tag="i", css_class="italic_css")
def hello(name):
    return "Hello, {}".format(name)

print hello("Hao Chen")

```

上面这段代码中，我们需要注意这几点：  

1）如果decorator有参数的话，**init**() 成员就不能传入fn了，而fn是在**call**的时候传入的。  

2）这段代码还展示了 wrapped(\*args, \*\*kwargs) 这种方式来传递被decorator函数的参数。（其中：args是一个参数列表，kwargs是参数dict，具体的细节，请参考Python的文档或是[StackOverflow的这个问题](http://stackoverflow.com/questions/3394835/args-and-kwargs)，这里就不展开了）


#### 用Decorator设置函数的调用参数


你有三种方法可以干这个事：


第一种，通过 \*\*kwargs，这种方法decorator会在kwargs中注入参数。



```
def decorate_A(function):
    def wrap_function(*args, **kwargs):
        kwargs['str'] = 'Hello!'
        return function(*args, **kwargs)
    return wrap_function

@decorate_A
def print_message_A(*args, **kwargs):
    print(kwargs['str'])

print_message_A()
```

第二种，约定好参数，直接修改参数



```
def decorate_B(function):
    def wrap_function(*args, **kwargs):
        str = 'Hello!'
        return function(str, *args, **kwargs)
    return wrap_function

@decorate_B
def print_message_B(str, *args, **kwargs):
    print(str)

print_message_B()
```

第三种，通过 \*args 注入



```
def decorate_C(function):
    def wrap_function(*args, **kwargs):
        str = 'Hello!'
        #args.insert(1, str)
        args = args +(str,)
        return function(*args, **kwargs)
    return wrap_function

class Printer:
    @decorate_C
    def print_message(self, str, *args, **kwargs):
        print(str)

p = Printer()
p.print_message()
```

#### Decorator的副作用


到这里，我相信你应该了解了整个Python的decorator的原理了。


相信你也会发现，被decorator的函数其实已经是另外一个函数了，对于最前面那个hello.py的例子来说，如果你查询一下foo.**name**的话，你会发现其输出的是“wrapper”，而不是我们期望的“foo”，这会给我们的程序埋一些坑。所以，Python的functool包中提供了一个叫wrap的decorator来消除这样的副作用。下面是我们新版本的 hello.py。



```
from functools import wraps
def hello(fn):
    @wraps(fn)
    def wrapper():
        print "hello, %s" % fn.__name__
        fn()
        print "goodby, %s" % fn.__name__
    return wrapper

@hello
def foo():
    '''foo help doc'''
    print "i am foo"
    pass

foo()
print foo.__name__ #输出 foo
print foo.__doc__  #输出 foo help doc

```

当然，即使是你用了functools的wraps，也不能完全消除这样的副作用。


来看下面这个示例：



```
from inspect import getmembers, getargspec
from functools import wraps

def wraps_decorator(f):
    @wraps(f)
    def wraps_wrapper(*args, **kwargs):
        return f(*args, **kwargs)
    return wraps_wrapper

class SomeClass(object):
    @wraps_decorator
    def method(self, x, y):
        pass

obj = SomeClass()
for name, func in getmembers(obj, predicate=inspect.ismethod):
    print "Member Name: %s" % name
    print "Func Name: %s" % func.func_name
    print "Args: %s" % getargspec(func)[0]

# 输出：
# Member Name: method
# Func Name: method
# Args: []
```

你会发现，即使是你你用了functools的wraps，你在用getargspec时，参数也不见了。


要修正这一问，我们还得用Python的反射来解决，下面是相关的代码：



```
def get_true_argspec(method):
    argspec = inspect.getargspec(method)
    args = argspec[0]
    if args and args[0] == 'self':
        return argspec
    if hasattr(method, '__func__'):
        method = method.__func__
    if not hasattr(method, 'func_closure') or method.func_closure is None:
        raise Exception("No closure for method.")

    method = method.func_closure[0].cell_contents
    return get_true_argspec(method)
```

当然，我相信大多数人的程序都不会去getargspec。所以，用functools的wraps应该够用了。


#### 一些decorator的示例


好了，现在我们来看一下各种decorator的例子：


##### 给函数调用做缓存


这个例实在是太经典了，整个网上都用这个例子做decorator的经典范例，因为太经典了，所以，我这篇文章也不能免俗。



```
from functools import wraps
def memo(fn):
    cache = {}
    miss = object()

    @wraps(fn)
    def wrapper(*args):
        result = cache.get(args, miss)
        if result is miss:
            result = fn(*args)
            cache[args] = result
        return result

    return wrapper

@memo
def fib(n):
    if n < 2:
        return n
    return fib(n - 1) + fib(n - 2)

```

上面这个例子中，是一个斐波拉契数例的递归算法。我们知道，这个递归是相当没有效率的，因为会重复调用。比如：我们要计算fib(5)，于是其分解成fib(4) + fib(3)，而fib(4)分解成fib(3)+fib(2)，fib(3)又分解成fib(2)+fib(1)…… 你可看到，基本上来说，fib(3), fib(2), fib(1)在整个递归过程中被调用了两次。


而我们用decorator，在调用函数前查询一下缓存，如果没有才调用了，有了就从缓存中返回值。一下子，这个递归从二叉树式的递归成了线性的递归。


##### Profiler的例子


这个例子没什么高深的，就是实用一些。



```
import cProfile, pstats, StringIO

def profiler(func):
    def wrapper(*args, **kwargs):
        datafn = func.__name__ + ".profile" # Name the data file
        prof = cProfile.Profile()
        retval = prof.runcall(func, *args, **kwargs)
        #prof.dump_stats(datafn)
        s = StringIO.StringIO()
        sortby = 'cumulative'
        ps = pstats.Stats(prof, stream=s).sort_stats(sortby)
        ps.print_stats()
        print s.getvalue()
        return retval

    return wrapper


```

##### 注册回调函数


下面这个示例展示了通过URL的路由来调用相关注册的函数示例：



```
class MyApp():
    def __init__(self):
        self.func_map = {}

    def register(self, name):
        def func_wrapper(func):
            self.func_map[name] = func
            return func
        return func_wrapper

    def call_method(self, name=None):
        func = self.func_map.get(name, None)
        if func is None:
            raise Exception("No function registered against - " + str(name))
        return func()

app = MyApp()

@app.register('/')
def main_page_func():
    return "This is the main page."

@app.register('/next_page')
def next_page_func():
    return "This is the next page."

print app.call_method('/')
print app.call_method('/next_page')

```

注意：  

1）上面这个示例中，用类的实例来做decorator。  

2）decorator类中没有**call**()，但是wrapper返回了原函数。所以，原函数没有发生任何变化。


##### 给函数打日志


下面这个示例演示了一个logger的decorator，这个decorator输出了函数名，参数，返回值，和运行时间。



```
from functools import wraps
def logger(fn):
    @wraps(fn)
    def wrapper(*args, **kwargs):
        ts = time.time()
        result = fn(*args, **kwargs)
        te = time.time()
        print "function      = {0}".format(fn.__name__)
        print "    arguments = {0} {1}".format(args, kwargs)
        print "    return    = {0}".format(result)
        print "    time      = %.6f sec" % (te-ts)
        return result
    return wrapper

@logger
def multipy(x, y):
    return x * y

@logger
def sum_num(n):
    s = 0
    for i in xrange(n+1):
        s += i
    return s

print multipy(2, 10)
print sum_num(100)
print sum_num(10000000)
```

上面那个打日志还是有点粗糙，让我们看一个更好一点的（带log level参数的）：



```
import inspect
def get_line_number():
    return inspect.currentframe().f_back.f_back.f_lineno

def logger(loglevel):
    def log_decorator(fn):
        @wraps(fn)
        def wrapper(*args, **kwargs):
            ts = time.time()
            result = fn(*args, **kwargs)
            te = time.time()
            print "function   = " + fn.__name__,
            print "    arguments = {0} {1}".format(args, kwargs)
            print "    return    = {0}".format(result)
            print "    time      = %.6f sec" % (te-ts)
            if (loglevel == 'debug'):
                print "    called_from_line : " + str(get_line_number())
            return result
        return wrapper
    return log_decorator
```

但是，上面这个带log level参数的有两具不好的地方，  

1） loglevel不是debug的时候，还是要计算函数调用的时间。  

2） 不同level的要写在一起，不易读。


我们再接着改进：



```
import inspect

def advance_logger(loglevel):

    def get_line_number():
        return inspect.currentframe().f_back.f_back.f_lineno

    def _basic_log(fn, result, *args, **kwargs):
        print "function   = " + fn.__name__,
        print "    arguments = {0} {1}".format(args, kwargs)
        print "    return    = {0}".format(result)

    def info_log_decorator(fn):
        @wraps(fn)
        def wrapper(*args, **kwargs):
            result = fn(*args, **kwargs)
            _basic_log(fn, result, args, kwargs)
        return wrapper

    def debug_log_decorator(fn):
        @wraps(fn)
        def wrapper(*args, **kwargs):
            ts = time.time()
            result = fn(*args, **kwargs)
            te = time.time()
            _basic_log(fn, result, args, kwargs)
            print "    time      = %.6f sec" % (te-ts)
            print "    called_from_line : " + str(get_line_number())
        return wrapper

    if loglevel is "debug":
        return debug_log_decorator
    else:
        return info_log_decorator

```

你可以看到两点，  

1）我们分了两个log level，一个是info的，一个是debug的，然后我们在外尾根据不同的参数返回不同的decorator。  

2）我们把info和debug中的相同的代码抽到了一个叫\_basic\_log的函数里，DRY原则。


##### 一个MySQL的Decorator


下面这个decorator是我在工作中用到的代码，我简化了一下，把DB连接池的代码去掉了，这样能简单点，方便阅读。



```
import umysql
from functools import wraps

class Configuraion:
    def __init__(self, env):
        if env == "Prod":
            self.host    = "coolshell.cn"
            self.port    = 3306
            self.db      = "coolshell"
            self.user    = "coolshell"
            self.passwd  = "fuckgfw"
        elif env == "Test":
            self.host   = 'localhost'
            self.port   = 3300
            self.user   = 'coolshell'
            self.db     = 'coolshell'
            self.passwd = 'fuckgfw'

def mysql(sql):

    _conf = Configuraion(env="Prod")

    def on_sql_error(err):
        print err
        sys.exit(-1)

    def handle_sql_result(rs):
        if rs.rows > 0:
            fieldnames = [f[0] for f in rs.fields]
            return [dict(zip(fieldnames, r)) for r in rs.rows]
        else:
            return []

    def decorator(fn):
        @wraps(fn)
        def wrapper(*args, **kwargs):
            mysqlconn = umysql.Connection()
            mysqlconn.settimeout(5)
            mysqlconn.connect(_conf.host, _conf.port, _conf.user, \
                              _conf.passwd, _conf.db, True, 'utf8')
            try:
                rs = mysqlconn.query(sql, {})
            except umysql.Error as e:
                on_sql_error(e)

            data = handle_sql_result(rs)
            kwargs["data"] = data
            result = fn(*args, **kwargs)
            mysqlconn.close()
            return result
        return wrapper

    return decorator

@mysql(sql = "select * from coolshell" )
def get_coolshell(data):
    ... ...
    ... ..

```

##### 线程异步


下面量个非常简单的异步执行的decorator，注意，异步处理并不简单，下面只是一个示例。



```
from threading import Thread
from functools import wraps

def async(func):
    @wraps(func)
    def async_func(*args, **kwargs):
        func_hl = Thread(target = func, args = args, kwargs = kwargs)
        func_hl.start()
        return func_hl

    return async_func

if __name__ == '__main__':
    from time import sleep

    @async
    def print_somedata():
        print 'starting print_somedata'
        sleep(2)
        print 'print_somedata: 2 sec passed'
        sleep(2)
        print 'print_somedata: 2 sec passed'
        sleep(2)
        print 'finished print_somedata'

    def main():
        print_somedata()
        print 'back in main'
        print_somedata()
        print 'back in main'

    main()

```

#### 其它


关于更多的示例，你可以参看： [Python Decorator Library](https://wiki.python.org/moin/PythonDecoratorLibrary)


关于Python Decroator的各种提案，可以参看：[Python Decorator Proposals](https://wiki.python.org/moin/PythonDecoratorProposals)


（全文完）


