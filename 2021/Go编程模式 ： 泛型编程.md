# Go编程模式 ： 泛型编程
>date: 2021-09-04T13:44:02+08:00


![](/assets/images/coolshell.cn/wp-content/uploads/2021/09/go-generics-1024x512.png)Go语言的1.17版本发布了，其中开始正式支持泛型了。虽然还有一些限制（比如，不能把泛型函数export），但是，可以体验了。我的这个《Go编程模式》的系列终于有了真正的泛型编程了，再也不需要使用反射或是go generation这些难用的技术了。周末的时候，我把Go 1.17下载下来，然后，体验了一下泛型编程，还是很不错的。下面，就让我们来看一下Go的泛型编程。（注：不过，如果你对泛型编程的重要性还不是很了解的话，你可以先看一下之前的这篇文章《[Go编程模式：Go Generation](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9AGo%20Generation.md "Go 编程模式：Go Generation")》，然后再读一下《[Go编程模式：MapReduce](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9AMap-Reduce.md "Go编程模式：Map-Reduce")》）


### 本文是全系列中第10 / 10篇：[Go编程模式](https://coolshell.cn/articles/series/go%e7%bc%96%e7%a8%8b%e6%a8%a1%e5%bc%8f)

* [Go编程模式：切片，接口，时间和性能](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E5%88%87%E7%89%87%EF%BC%8C%E6%8E%A5%E5%8F%A3%EF%BC%8C%E6%97%B6%E9%97%B4%E5%92%8C%E6%80%A7%E8%83%BD.md)
* [Go 编程模式：错误处理](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E9%94%99%E8%AF%AF%E5%A4%84%E7%90%86.md)
* [Go 编程模式：Functional Options](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9AFunctional%20Options.md)
* [Go编程模式：委托和反转控制](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E5%A7%94%E6%89%98%E5%92%8C%E5%8F%8D%E8%BD%AC%E6%8E%A7%E5%88%B6.md)
* [Go编程模式：Map-Reduce](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9AMap-Reduce.md)
* [Go 编程模式：Go Generation](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9AGo%20Generation.md)
* [Go编程模式：修饰器](/2017/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9A%E4%BF%AE%E9%A5%B0%E5%99%A8.md)
* [Go编程模式：Pipeline](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9APipeline.md)
* [Go 编程模式：k8s Visitor 模式](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9Ak8s%20Visitor%20%E6%A8%A1%E5%BC%8F.md)
* Go编程模式 ： 泛型编程

« [上一篇文章](/2020/Go%20%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9Ak8s%20Visitor%20%E6%A8%A1%E5%BC%8F.md "Go 编程模式：k8s Visitor 模式")


目录



* [初探](#%E5%88%9D%E6%8E%A2 "初探")
* [数据结构](#%E6%95%B0%E6%8D%AE%E7%BB%93%E6%9E%84 "数据结构")
	+ [Stack 栈](#Stack_%E6%A0%88 "Stack 栈")
	+ [LinkList 双向链表](#LinkList_%E5%8F%8C%E5%90%91%E9%93%BE%E8%A1%A8 "LinkList 双向链表")
* [函数式范型](#%E5%87%BD%E6%95%B0%E5%BC%8F%E8%8C%83%E5%9E%8B "函数式范型")
	+ [泛型Map](#%E6%B3%9B%E5%9E%8BMap "泛型Map")
	+ [泛型 Reduce](#%E6%B3%9B%E5%9E%8B_Reduce "泛型 Reduce")
	+ [泛型 filter](#%E6%B3%9B%E5%9E%8B_filter "泛型 filter")
* [业务示例](#%E4%B8%9A%E5%8A%A1%E7%A4%BA%E4%BE%8B "业务示例")

#### 初探


我们先来看一个简单的示例：




```
package main

import "fmt"

func print[T any] (arr []T) {
  for _, v := range arr {
    fmt.Print(v)
    fmt.Print(" ")
  }
  fmt.Println("")
}

func main() {
  strs := []string{"Hello", "World",  "Generics"}
  decs := []float64{3.14, 1.14, 1.618, 2.718 }
  nums := []int{2,4,6,8}

  print(strs)
  print(decs)
  print(nums)
}
```

上面这个例子中，有一个 `print()` 函数，这个函数就是想输出数组的值，如果没有泛型的话，这个函数需要写出 `int` 版，`float`版，`string` 版，以及我们的自定义类型（`struct`）的版本。现在好了，有了泛型的支持后，我们可以使用 `[T any]` 这样的方式来声明一个泛型类型（有点像C++的 `typename T`），然后面都使用 `T` 来声明变量就好。


上面这个示例中，我们泛型的 `print()` 支持了三种类型的适配—— `int`型，`float64`型，和 `string`型。要让这段程序跑起来需要在编译行上加上 `-gcflags=-G=3`编译参数（这个编译参数会在1.18版上成为默认参数），如下所示：



```
$ go run -gcflags=-G=3 ./main.go
```

有了个操作以后，我们就可以写一些标准的算法了，比如，一个查找的算法



```
func find[T comparable] (arr []T, elem T) int {
  for i, v := range arr {
    if  v == elem {
      return i
    }
  }
  return -1
}
```

我们注意到，我们没有使用 `[T any]`的形式，而是使用 `[T comparable]`的形式，`comparable`是一个接口类型，其约束了我们的类型需要支持 `==` 的操作， 不然就会有类型不对的编译错误。上面的这个 `find()` 函数同样可以使用于 `int`, `float64`或是`string`类型。


从上面的这两个小程序来看，Go语言的泛型已基本可用了，只不过，还有三个问题：


* 一个是 `fmt.Printf()`中的泛型类型是 `%v` 还不够好，不能像c++ `iostream`重载 `>>` 来获得程序自定义的输出。
* 另外一个是，go不支持操作符重载，所以，你也很难在泛型算法中使用“泛型操作符”如：`==` 等
* 最后一个是，上面的 `find()` 算法依赖于“数组”，对于hash-table、tree、graph、link等数据结构还要重写。也就是说，没有一个像C++ STL那样的一个泛型迭代器（这其中的一部分工作当然也需要通过重载操作符（如：`++` 来实现）


不过，这个已经很好了，让我们来看一下，可以干哪些事了。


#### 数据结构


##### Stack 栈


编程支持泛型最大的优势就是可以实现类型无关的数据结构了。下面，我们用Slices这个结构体来实现一个Stack的数结构。


首先，我们可以定义一个泛型的Stack



```
type stack [T any] []T
```

看上去很简单，还是 `[T any]` ，然后 `[]T` 就是一个数组，接下来就是实现这个数据结构的各种方法了。下面的代码实现了 `push()` ，`pop()`，`top()`，`len()`，`print()`这几个方法，这几个方法和 C++的STL中的 Stack很类似。（注：目前Go的泛型函数不支持 export，所以只能使用第一个字符是小写的函数名）



```
func (s *stack[T]) push(elem T) {
  *s = append(*s, elem)
}

func (s *stack[T]) pop() {
  if len(*s) > 0 {
    *s = (*s)[:len(*s)-1]
  } 
}
func (s *stack[T]) top() *T{
  if len(*s) > 0 {
    return &(*s)[len(*s)-1]
  } 
  return nil
}

func (s *stack[T]) len() int{
  return len(*s)
}

func (s *stack[T]) print() {
  for _, elem := range *s {
    fmt.Print(elem)
    fmt.Print(" ")
  }
  fmt.Println("")
}
```

上面的这个例子还是比较简单的，不过在实现的过程中，对于一个如果栈为空，那么 `top()`要么返回`error`要么返回空值，在这个地方卡了一下。因为，之前，我们返回的“空”值，要么是 int 的`0`，要么是 string 的 `“”`，然而在泛型的`T`下，这个值就不容易搞了。也就是说，除了类型泛型后，还需要有一些“值的泛型”（注：在C++中，如果你要用一个空栈进行 `top()` 操作，你会得到一个 segmentation fault），所以，这里我们返回的是一个指针，这样可以判断一下指针是否为空。


下面是如何使用这个stack的代码。



```
func main() {

  ss := stack[string]{}
  ss.push("Hello")
  ss.push("Hao")
  ss.push("Chen")
  ss.print()
  fmt.Printf("stack top is - %v\n", *(ss.top()))
  ss.pop()
  ss.pop()
  ss.print()

  
  ns := stack[int]{}
  ns.push(10)
  ns.push(20)
  ns.print()
  ns.pop()
  ns.print()
  *ns.top() += 1
  ns.print()
  ns.pop()
  fmt.Printf("stack top is - %v\n", ns.top())

}
```

 


##### LinkList 双向链表


下面我们再来看一个双向链表的实现。下面这个实现中实现了 这几个方法：


* `add()` – 从头插入一个数据结点
* `push()` – 从尾插入一个数据结点
* `del()` – 删除一个结点（因为需要比较，所以使用了 `compareable` 的泛型）
* `print()` – 从头遍历一个链表，并输出值。



```
type node[T comparable] struct {
  data T
  prev *node[T]
  next *node[T]
}

type list[T comparable] struct {
  head, tail *node[T]
  len int
}

func (l *list[T]) isEmpty() bool {
  return l.head == nil && l.tail == nil
}

func (l *list[T]) add(data T) {
  n := &node[T] {
    data : data,
    prev : nil,
    next : l.head,
  }
  if l.isEmpty() {
    l.head = n
    l.tail = n
  }
  l.head.prev = n
  l.head = n
}

func (l *list[T]) push(data T) { 
  n := &node[T] {
    data : data,
    prev : l.tail,
    next : nil,
  }
  if l.isEmpty() {
    l.head = n
    l.tail = n
  }
  l.tail.next = n
  l.tail = n
}

func (l *list[T]) del(data T) { 
  for p := l.head; p != nil; p = p.next {
    if data == p.data {
      
      if p == l.head {
        l.head = p.next
      }
      if p == l.tail {
        l.tail = p.prev
      }
      if p.prev != nil {
        p.prev.next = p.next
      }
      if p.next != nil {
        p.next.prev = p.prev
      }
      return 
    }
  } 
}

func (l *list[T]) print() {
  if l.isEmpty() {
    fmt.Println("the link list is empty.")
    return 
  }
  for p := l.head; p != nil; p = p.next {
    fmt.Printf("[%v] -> ", p.data)
  }
  fmt.Println("nil")
}
```

上面这个代码都是一些比较常规的链表操作，学过链表数据结构的同学应该都不陌生，使用的代码也不难，如下所示，都很简单，看代码就好了。



```
func main(){
  var l = list[int]{}
  l.add(1)
  l.add(2)
  l.push(3)
  l.push(4)
  l.add(5)
  l.print() //[5] -> [2] -> [1] -> [3] -> [4] -> nil
  l.del(5)
  l.del(1)
  l.del(4)
  l.print() //[2] -> [3] -> nil
  
}
```

#### 函数式范型


接下来，我们就要来看一下我们函数式编程的三大件 `map()` 、 `reduce()` 和 `filter()` 在之前的《[Go编程模式：Map-Reduce](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9AMap-Reduce.md "Go编程模式：Map-Reduce")》文章中，我们可以看到要实现这样的泛型，需要用到反射，代码复杂到完全读不懂。下面来看一下真正的泛型版本。


##### 泛型Map



```
func gMap[T1 any, T2 any] (arr []T1, f func(T1) T2) []T2 {
  result := make([]T2, len(arr))
  for i, elem := range arr {
    result[i] = f(elem)
  }
  return result
}
```

在上面的这个 map函数中我使用了两个类型 – `T1` 和 `T2` ，


* `T1` – 是需要处理数据的类型
* `T2` – 是处理后的数据类型


`T1` 和 `T2` 可以一样，也可以不一样。


我们还有一个函数参数 –  `func(T1) T2` 意味着，进入的是 `T1` 类型的，出来的是 `T2` 类型的。


然后，整个函数返回的是一个 `[]T2`


好的，我们来看一下怎么使用这个map函数：



```
nums := []int {0,1,2,3,4,5,6,7,8,9}
squares := gMap(nums, func (elem int) int {
  return elem * elem
})
print(squares)  //0 1 4 9 16 25 36 49 64 81 

strs := []string{"Hao", "Chen", "MegaEase"}
upstrs := gMap(strs, func(s string) string  {
  return strings.ToUpper(s)
})
print(upstrs) // HAO CHEN MEGAEASE 


dict := []string{"零", "壹", "贰", "叁", "肆", "伍", "陆", "柒", "捌", "玖"}
strs =  gMap(nums, func (elem int) string  {
  return  dict[elem]
})
print(strs) // 零 壹 贰 叁 肆 伍 陆 柒 捌 玖
```

##### 泛型 Reduce


接下来，我们再来看一下我们的Reduce函数，reduce函数是把一堆数据合成一个。



```
func gReduce[T1 any, T2 any] (arr []T1, init T2, f func(T2, T1) T2) T2 {
  result := init
  for _, elem := range arr {
    result = f(result, elem)
  }
  return result
}
```

函数实现起来很简单，但是感觉不是很优雅。


* 也是有两个类型 `T1` 和 `T2`，前者是输出数据的类型，后者是佃出数据的类型。
* 因为要合成一个数据，所以需要有这个数据的初始值 `init`，是 `T2` 类型
* 而自定义函数 `func(T2, T1) T2`，会把这个init值传给用户，然后用户处理完后再返回出来。


下面是一个使用上的示例——求一个数组的和



```
nums := []int {0,1,2,3,4,5,6,7,8,9}
sum := gReduce(nums, 0, func (result, elem int) int  {
    return result + elem
})
fmt.Printf("Sum = %d \n", sum)
```

##### 泛型 filter


filter函数主要是用来做过滤的，把数据中一些符合条件（filter in）或是不符合条件（filter out）的数据过滤出来，下面是相关的代码示例



```
func gFilter[T any] (arr []T, in bool, f func(T) bool) []T {
  result := []T{}
  for _, elem := range arr {
    choose := f(elem)
    if (in && choose) || (!in && !choose) {
      result = append(result, elem)
    }
  }
  return result
}

func gFilterIn[T any] (arr []T, f func(T) bool) []T {
  return gFilter(arr, true, f)
}

func gFilterOut[T any] (arr []T, f func(T) bool) []T {
  return gFilter(arr, false, f)
}
```

其中，用户需要提从一个 `bool` 的函数，我们会把数据传给用户，然后用户只需要告诉我行还是不行，于是我们就会返回一个过滤好的数组给用户。


比如，我们想把数组中所有的奇数过滤出来



```
nums := []int {0,1,2,3,4,5,6,7,8,9}
odds := gFilterIn(nums, func (elem int) bool  {
    return elem % 2 == 1
})
print(odds)
```

#### 业务示例


正如《[Go编程模式：Map-Reduce](/2020/Go%E7%BC%96%E7%A8%8B%E6%A8%A1%E5%BC%8F%EF%BC%9AMap-Reduce.md "Go编程模式：Map-Reduce")》中的那个业务示例，我们在这里再做一遍。


首先，我们先声明一个员工对象和相关的数据



```
type Employee struct {
  Name     string
  Age      int
  Vacation int
  Salary   float32
}

var employees = []Employee{
  {"Hao", 44, 0, 8000.5},
  {"Bob", 34, 10, 5000.5},
  {"Alice", 23, 5, 9000.0},
  {"Jack", 26, 0, 4000.0},
  {"Tom", 48, 9, 7500.75},
  {"Marry", 29, 0, 6000.0},
  {"Mike", 32, 8, 4000.3},
}
```

然后，我们想统一下所有员工的薪水，我们就可以使用前面的reduce函数



```
total_pay := gReduce(employees, 0.0, func(result float32, e Employee) float32 {
  return result + e.Salary
})
fmt.Printf("Total Salary: %0.2f\n", total_pay) // Total Salary: 43502.05
```

我们函数这个 `gReduce` 函数有点啰嗦，还需要传一个初始值，在用户自己的函数中，还要关心 `result` 我们还是来定义一个更好的版本。


一般来说，我们用 reduce 函数大多时候基本上是统计求和或是数个数，所以，是不是我们可以定义的更为直接一些？比如下面的这个 `CountIf()`，就比上面的 Reduce 干净了很多。



```
func gCountIf[T any](arr []T, f func(T) bool) int {
  cnt := 0
  for _, elem := range arr {
    if f(elem) {
      cnt += 1
    }
  }
  return cnt;
}
```

我们做求和，我们也可以写一个Sum的泛型。


* 处理 `T` 类型的数据，返回 `U`类型的结果
* 然后，用户只需要给我一个需要统计的 `T` 的 `U` 类型的数据就可以了。


代码如下所示：



```
type Sumable interface {
  type int, int8, int16, int32, int64,
        uint, uint8, uint16, uint32, uint64,
        float32, float64
}

func gSum[T any, U Sumable](arr []T, f func(T) U) U {
  var sum U
  for _, elem := range arr {
    sum += f(elem)
  }
  return sum
}
```

上面的代码我们动用了一个叫 Sumable 的接口，其限定了 U 类型，只能是 Sumable里的那些类型，也就是整型或浮点型，这个支持可以让我们的泛型代码更健壮一些。


于是，我们就可以完成下面的事了。


**1）统计年龄大于40岁的员工数**



```
old := gCountIf(employees, func (e Employee) bool  {
    return e.Age > 40
})
fmt.Printf("old people(>40): %d\n", old) 
// ld people(>40): 2
```

**2）统计薪水超过 6000元的员工数**



```
high_pay := gCountIf(employees, func(e Employee) bool {
  return e.Salary >= 6000
})
fmt.Printf("High Salary people(>6k): %d\n", high_pay) 
//High Salary people(>6k): 4
```

**3）统计年龄小于30岁的员工的薪水**



```
younger_pay := gSum(employees, func(e Employee) float32 {
  if e.Age < 30 {
      return e.Salary
  } 
  return 0
})
fmt.Printf("Total Salary of Young People: %0.2f\n", younger_pay)
//Total Salary of Young People: 19000.00
```

**4）统计全员的休假天数**



```
total_vacation := gSum(employees, func(e Employee) int {
  return e.Vacation
})
fmt.Printf("Total Vacation: %d day(s)\n", total_vacation)
//Total Vacation: 32 day(s)
```

**5）把没有休假的员工过滤出来**



```
no_vacation := gFilterIn(employees, func(e Employee) bool {
  return e.Vacation == 0
})
print(no_vacation)
//{Hao 44 0 8000.5} {Jack 26 0 4000} {Marry 29 0 6000}
```

怎么样，你大概了解了泛型编程的意义了吧。


（全文完）


