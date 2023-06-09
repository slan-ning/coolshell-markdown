# Lisp的永恒之道
>date: 2012-06-04T08:58:46+08:00


【感谢 Todd投递本文 – 微博帐号：[weidagang](http://weibo.com/weidagang "weidagang") 】




目录



* [Lisp之魅](#Lisp%E4%B9%8B%E9%AD%85 "Lisp之魅")
* [Lisp之源](#Lisp%E4%B9%8B%E6%BA%90 "Lisp之源")
* [Lisp之形](#Lisp%E4%B9%8B%E5%BD%A2 "Lisp之形")
* [Lisp之道](#Lisp%E4%B9%8B%E9%81%93 "Lisp之道")
* [Lisp之器](#Lisp%E4%B9%8B%E5%99%A8 "Lisp之器")
* [总结](#%E6%80%BB%E7%BB%93 "总结")
* [后记](#%E5%90%8E%E8%AE%B0 "后记")
* [参考](#%E5%8F%82%E8%80%83 "参考")

#### Lisp之魅


长久以来，Lisp一直被许多人视为史上最非凡的编程语言。它不仅在50多年前诞生的时候带来了诸多革命性的创新并极大地影响了后来编程语言的发展，即使在一大批现代语言不断涌现的今天，Lisp的诸多特性仍然未被超越。当各式各样的编程语言摆在面前，我们可以从运行效率、学习曲线、社区活跃度、厂商支持等多种不同的角度进行评判和选择，但我特别看中的一点在于语言能否有效地表达编程者的设计思想。学习C意味着学习如何用过程来表达设计思想，学习Java意味着学习如何用对象来表达设计思想，而虽然Lisp与函数式编程有很大的关系，但学习Lisp绝不仅仅是学习如何用函数表达设计思想。实际上，**函数式编程并非Lisp的本质**，在已经掌握了lambda、高阶函数、闭包、惰性求值等函数式编程概念之后，学习Lisp仍然大大加深了我对编程的理解。**学习Lisp所收获的是如何“自由地”表达你的思想**，这正是Lisp最大的魅力所在，也是这门古老的语言仍然具有很强的生命力的根本原因。


#### Lisp之源


Lisp意为表处理(List Processing)，源自设计者John McCarthy于1960年发表的一篇论文《符号表达式的递归函数及其机器计算》。McCarthy在这篇论文中向我们展示了用一种简单的数据结构S表达式(S-expression)来表示代码和数据，并在此基础上构建一种完整的语言。Lisp语言形式简单、内涵深刻，Paul Graham在《Lisp之根源》中将其对编程的贡献与欧几里德对几何的贡献相提并论。


#### Lisp之形


然而，与数学世界中简单易懂的欧氏几何形成鲜明对比，程序世界中的Lisp却一直是一种古老而又神秘的存在，真正理解其精妙的人还是少数。从表面上看，Lisp最明显的特征是它“古怪”的S表达式语法。S表达式是一个原子(atom)，或者若干S表达式组成的列表(list)，表达式之间用空格分开，放入一对括号中。“列表“这个术语可能会容易让人联想到数据结构中的链表之类的线形结构，实际上，Lisp的列表是一种可嵌套的树形结构。下面是一些S表达式的例子:



```
foo

()

(a b (c d) e)

(+ (* 2 3) 5)

(defun factorial (N)
    (if (= N 1)
        1
        (* N (factorial (- N 1)))
    )
)

```


据说，这个古怪的S表达式是McCarthy在发明Lisp时候所采用的一种临时语法，他实际上是准备为Lisp加上一种被称为M表达式(M-expression)的语法，然后再把M表达式编译为S表达式。用一个通俗的类比，S表达式相当于是JVM的字节码，而M表达式相当于Java语言，但是后来Lisp的使用者都熟悉并喜欢上了直接用S表达式编写程序，并且他们发现S表达式有许多独特的优点，所以M表达式的引入也就被无限期延迟了。


许多Lisp的入门文章都比较强调Lisp的函数式特性，而我认为这是一种误导。真正的Lisp之门不在函数式编程，而在S表达式本身，Lisp最大的奥秘就藏在S表达式后面。S表达式是Lisp的语法基础，语法是语义的载体，形式是实质的寄托。**“S表达式”是程序的一种形，正如“七言”是诗的一种形，“微博”是信息的一种形**。正是形的不同，让微博与博客有了质的差异，同样的道理，正是S表达式让Lisp与C、Java、SQL等语言有了天壤之别。


#### Lisp之道


一门语言能否有效地表达编程者的设计思想取决于其抽象机制的语义表达能力。根据抽象机制的不同，语言的抽象机制形成了面向过程、面向对象、函数式、并发式等不同的范式。当你采用某一种语言，基本上就表示你已经“面向XXX“了，你的思维方式和解决问题的手段就会依赖于语言所提供的抽象方式。比如，采用Java语言通常意味着采用面向对象分析设计；采用Erlang通常意味着按Actor模型对并发任务进行建模。


有经验的程序员都知道，无论是面向XXX编程，程序设计都有一条“抽象原则“：What与How解耦。但是，**普通语言的问题就在于表达What的手段非常有限**，无非是过程、类、接口、函数等几种方式，而诸多领域问题是无法直接抽象为函数或接口的。比如，你完全可以在C语言中定义若干函数来做到make file所做的事情，但C代码很难像make file那样声明式地体现出target、depends等语义，它们只会作为实现细节被淹没在一个个的C函数之中。采用OOP或是FP等其它范式也会遇到同样的困难，也就是说make file语言所代表的抽象维度与面向过程、OOP以及FP的抽象维度是正交的，使得各种范式无法直接表达出make file的语义。这就是普通语言的“刚性”特征，它要求我们必须以语言的抽象维度去分析和解决问题，把问题映射到语言的基本语法和语义。


更进一步，如果仔细探究这种刚性的根源，我们会发现正是由于普通语言**语法和语义的紧耦合**造成了这种刚性。比如，C语言中printf(“hello %s”, name)符合函数调用语法，它表达了函数调用语义，除此之外别无他义；Java中interface IRunnable { … }符合接口定义语法，它表达了接口定义语义，除此之外别无他义。如果你认为“语法和语义紧耦合“是理所当然的，看不出这有什么问题，那么理解Lisp就会让你对此产生更深的认识。


当你看到Lisp的(f a (b c))的时候，你会想到什么？会不会马上联想到函数求值或是宏扩展？就像在C语言里看到gcd(10, 15)马上想到函数调用，或者在Java里看到class A马上想到类定义一样。如果真是这样，那它就是你理解Lisp的一道障碍，因为你已经习惯了顺着语言去思考，总是在想这一句话机器怎么解释执行？那一句话又对应语言的哪个特性？理解Lisp要反过来，让语言顺着你，Lisp的(f a (b c))可以是任何语义，完全由你来定，它可以是函数定义、类定义、数据库查询、文件依赖关系，异步任务的执行关系，业务规则 …


下面我准备先通过几个具体的例子逐步展示Lisp的本质。需要说明的是，由于Lisp的S表达式和XML的语法形式都是一种树形结构，在语义表达方面二者并无本质的差别。所以，为了理解方便，下面我暂且用多数人更为熟悉的XML来写代码，请记住我们可以很轻易地把XML代码和Lisp代码相互转换。


首先，我们可以轻易地用XML来定义一个求两个数最大公约数的函数：



```
    <func name='gcd' return_type='int'>
        <params>
            <a type='int'/>
            <b type='int'/>
        </params>
        <body>
            <if>
               <equals>
                   <a/>
                   <int>0</int>
               </equals>
            </if>
            <then>
                <return><b/></return>
            </then>
            <else>
                <return>
                    <gcd>
                        <modulo><b/><a/></modulo>
                        <a/>
                    </gcd>
                </return>
            </else>
        </body>
    </func>

```

其次，我们可以用它来定义类：



```
    <class name="Computer">
        <field access="private" type="MainBoard" name="main-board" />
        <field access="private" type="CPU" name="cpu" />
        <field access="private" type="Memory" name="memory" />

        <method access="public" return_type="boolean" name="powerOn" />
            <params>...</params>
            <body>...</body>
        </method>

        <method access="public" return_type="boolean" name="powerOff" />
            <params>...</params>
            <body>...</body>
        </method>
    </class>

```

还可以轻易地用它来编写关系查询：



```
<sql>
    <select>
        <column name="employees.id" />
        <column name="bonus.amount" />
    </select>
    <from>
        <table name="employees" />
        <table name="bonus" />
    </from>
    <where>
        <equals>
            <column name="employees.id" />
            <column name="bonus.employee_id" />
        </equals>
    </where>
</sql>

```

还可以用它来实现类似make file的自动化构建(语法取自ant)：



```
    <project name="MyProject" default="dist" basedir=".">
        <property name="src" location="src"/>
        <property name="build" location="build"/>
        <property name="dist"  location="dist"/>

        <target name="init">
            <mkdir dir="${build}"/>
        </target>

        <target name="compile" depends="init" description="compile the source " >
            <javac srcdir="${src}" destdir="${build}"/>
        </target>

        <target name="dist" depends="compile" description="generate the distribution" >
            <mkdir dir="${dist}/lib"/>
            <jar jarfile="${dist}/lib/MyProject-${DSTAMP}.jar" basedir="${build}"/>
        </target>

        <target name="clean" description="clean up" >
            <delete dir="${build}"/>
            <delete dir="${dist}"/>
        </target>
    </project>

```

一口气举了这么多个例子，目的在于用XML这种树形结构来说明Lisp的S表达式所能够描述的语义。不知道你是否发现了S表达式和XML这种树形语法在语义构造方面有着特别的“柔性”？我们可以轻易地用它构造出函数、变量、条件判断语义；类、属性、方法语义；可以轻易地构造出关系模型的select、where语义；可以轻易地构造出make的target、depends语义，等等数不清的语义。在普通语言里，你可以定义一个函数、一个类，但你无法为C语言增加匿名函数特性，也没法给Java语言加上RAII语义，甚至连自己创造一个foreach循环都不行，而自定义语义意味着在Lisp之上**你创造了一门语言**！不管是面向过程，面向对象，函数式，还是关系模型，在Lisp里统统都变成了一种DSL，而Lisp本身也就成了一种定义语言的语言，即元语言(Meta Language)。


Lisp的柔性与S表达式有着密切的关系。Lisp并不限制你用S表达式来表达什么语义，同样的S表达式语法可以表达各种不同领域的语义，这就是**语法和语义解耦**。如果说普通语言的刚性源于“语法和语义紧耦合”，那么Lisp的柔性正是源于“语法和语义解耦”！“语法和语义解耦”使得Lisp可以随意地构造各种领域的DSL，而不强制用某一种范式或是领域视角去分析和解决问题。本质上，Lisp编程是一种超越了普通编程范式的范式，这就是**Lisp之道：面向语言编程(LOP, Language Oriented Programming)**。Wikipedia上是这样描述LOP的：



> Language oriented programming (LOP) is a style of computer programming in which, rather than solving problems in general-purpose programming languages, the programmer creates one or more domain-specific languages for the problem first, and solves the problem in those languages … The concept of Language Oriented Programming takes the approach to capture requirements in the user’s terms, and then to try to create an implementation language as isomorphic as possible to the user’s descriptions, so that the mapping between requirements and implementation is as direct as possible.
> 
> 


LOP范式的基本思想是从问题出发，先创建一门描述领域模型的DSL，再用DSL去解决问题，它具有高度的声明性和抽象性。SQL、make file、CSS等DSL都可以被认为是LOP的具体实例，下面我们再通过两个常见的例子来理解LOP的优势。


例1：在股票交易系统中，交易协议定义若干二进制的消息格式，交易所和客户端需要对消息进行编码和解码。


消息格式是一种抽象的规范，本身不对语言做任何的限制，你可以用C，C++，Java，或者Python。普通的实现方式是按照消息格式规范，在相应的语言中定义消息结构，并编写相应的编解码函数。假设为一个消息定义结构和实现编解码函数的工作量为M，不同消息类型的数量为N，这种方式的工作量大致为M\*N。也就是说每增加一种消息类型，就需要为该消息定义结构，实现编解码函数，引入bug的可能性当然也和M\*N成正比。如果仔细观察不难发现，各个消息结构其实是高度类似的，编解码函数也大同小异，但是普通语言却找不到一种抽象机制能表达这种共性，比如，我们无法通过面向对象的方法定义一个基类把消息结构的共性抽象出来，然后让具体的消息去继承它，达到复用的目的。这正是由于普通语言的抽象维度限制所致，在普通语言中，你只能从函数、接口等维度对事物进行抽象，而恰好消息格式共性所在的维度与这些抽象维度并不匹配。


其实，不同消息类型的**共性在于它们都具有相同的领域语义**，比如：“某字段内容是另一个字段内容的md5码”就是一种消息格式的领域语义，这种领域语义是OOP的抽象机制无法描述的。LOP的思路是先创建一门消息定义DSL，比如，类似Google的Protocol Buffer，Android的AIDL。然后，通过DSL编写消息定义文件，直接声明式地描述消息的结构特征，比如，我们可以声明式地描述“某字段内容是另一个字段内容的md5码”。我们还需要为DSL开发编译器用于生成C、Java等通用语言的消息定义和编解码函数。


有了消息定义DSL和编译器之后，由于DSL编写消息定义是一种高度声明式的编程方法，每增加一种消息的只需要多编写一个消息定义文件而已，工作量几乎可以忽略不计。所有的工作量都集中在编译器的开发上，工作量是一个常数C，与消息的数量没有关系；质量保证方面也只需要关注编译器这一点，不会因为增加新的消息类型而引入bug。


例2：在图书管理系统中，需要支持在管理界面上对书籍、学生、班级等各种实体进行管理操作。


如果按传统的三层架构，一般需要在后端程序中为每一种实体定义一个类，并定义相应的方法实现CRUD操作，与之相应的，还需要在前端页面中为每一个实体编写相应的管理页面。这些实体类的CRUD操作都是大同小异的，但细节又各不相同，虽然我们很想复用某些共同的设计实现，但OOP所提供的封装、继承、多态等抽象机制不足以有效捕获实体之间的共性，大量的代码还是必须放在子类中来完成。比如，Student和Book实体类的实现非常相似，但是如果要通过OOP的方式去抽象它们的共性，得出的结果多半是Entity这样的大而空的基类，很难起到复用的效果。


其实，不同实体之间的共性还是在于它们具有相同的领域语义，比如：实体具有属性，属性具有类型，属性具有取值范围，属性具有可读取、可编辑等访问属性，实体之间有关联关系等。LOP方法正是直接面向这种领域语义的。采用LOP方法，我们并不需要为每一个实体类单独编写CRUD方法，也不需要单独编写管理页面，只需要定义一种DSL并实现其编译器；然后，用DSL声明式地编写实体描述文件，去描述实体的属性列表，属性的类型、取值范围，属性所支持的操作，属性之间的关系和约束条件等；最后，通过这个实体描述文件自动生成后端的实体类和前端管理页面。采用LOP，不论前后端采用何种技术，Java也好，C#也好，JSP也好，ASP.NET也好，都可以自动生成它们的代码。采用LOP的工作量和质量都集中在DSL的设计和编译器的开发，与实体的数量无关，也就是说，越是庞大的系统，实体类越多越是能体现LOP的优势。


通过上面两个小例子我们可以感受到，LOP是一种面向领域的，高度声明式的编程方式，它的抽象维度与领域模型的维度完全一致。LOP能让程序员从复杂的实现细节中解脱出来，把关注点集中在问题的本质上，从而提高编程的效率和质量。


接下来的问题是如果需要为某领域设计DSL，我们是应该发明一门类似SQL这样的专用DSL呢，还是用XML或S表达式去定义DSL呢？它们各有何优缺点呢？


我认为采用XML或S表达式定义DSL的优点主要有：1) SQL、make file、CSS等专用DSL都只能面向各自的领域，而一个实际的领域问题通常是跨越多个领域的，有时我们需要将不同领域融合在一起，但是由于普通语言的刚性，多语言融合通常会是一件非常困难的事情，而XML和S表达式语法结构的单一性和“代码及数据”的特点使得跨领域融合毫无障碍。2) 在为DSL开发编译器或解释器的方面，二者难度不同。对XML和S表达式定义的DSL进行语法分析非常简单，相比之下，对SQL这样的专用DSL进行语法分析，虽然可以借助Lex、Yacc、ANTLR等代码生成工具，但总的来讲复杂度还是要明显高一些。


当然，XML和S表达式的优点也正好是其缺点，由于XML和S表达式的语法形式是固定的，不能像专用DSL那样自由地设计语法。所以，一般来讲专用DSL的语法显得更加简洁。换句话说，XML和Lisp其实是在语法和语义间做了一个交换，用语法的限制换来了语义的灵活。


#### Lisp之器


接下来我们继续探讨DSL的解释执行问题。DSL代码的解释执行一般分为3种典型的方式：1) 通过专门的解释器解释执行；2) 编译生成其他语言的代码，再通过其他语言的解释器解释执行(或编译运行)；3) 自解释。比如，第1类的代表是SQL，上一节举的两个例子都属于第2类，而第3类自解释正是Lisp的特色。


为了理解自解释，我们可以先从内部DSL的解释执行说起。内部DSL是指嵌入在宿主语言中的DSL，比如，Google Test单元测试框架定义了一套基于流畅接口(Fluent Interface)的C++单元测试DSL。从语义构造的角度看，内部DSL直接借用宿主语言的语法定义了自己的领域语义，是一种语法和语义解耦；从解释执行的角度看，内部DSL是随宿主语言的解释器而自动解释的，不需要像外部DSL一样开发专门的解释器，因而实现的代价很低。当然，并不是说设计内部DSL不用关心任何的解释实现，实际上，还是需要熟悉宿主语言的特性，并利用该特性使得DSL能随着宿主语言的解释器得到解释执行。


Lisp拥有强大的自解释特性，这得益于独一无二的**Lisp之器：宏 (macro)**。宏使得Lisp编写的DSL可以被Lisp解释器直接解释执行，这在原理上与内部DSL是相通的，只是内部DSL一般是利用宿主语言的链式调用等特性，通常形式简陋，功能有限，而Lisp的宏则要强大和灵活得多。


C语言中也有宏的概念，不过Lisp的宏与C语言的宏完全不同，C语言的宏是简单的字符串替换。比如，下面的宏定义：



```
#define square(x) (x*x)

```

square(1+1)的期望结果是4，而实际上它会被替换成(1+1\*1+1)，结果是3。这个例子说明，C语言的宏只在预编译阶段进行简单的字符串替换，对程序语法结构缺乏理解，非常脆弱。Lisp的宏不是简单的字符串替换，而是一套完整的代码生成系统，它是在语法解析的基础上把Lisp代码从一种形式转换为另一种形式，本质上起到了普通语言编译器的作用。不同的是，普通编译器是把一种语言的代码转换为另一种语言的代码，比如，Java编译器把Java代码转换成Java字节码；而Lisp宏的输入和输出都是S表达式，它本质上是把一种DSL转换为另一种DSL。下面的例子是宏的一个典型用法。


例3：假设Lisp解释器已经具备解释执行面向过程DSL的能力，需要实现类似ant的自动化构建工具。


我们可以基于宏构建一门类ant的DSL，宏的作用是把类ant DSL通过宏展开变成面向过程的DSL，最后被Lisp解释器所解释执行。这样用Lisp编写的ant DSL就不需要被编译为其他语言，也不需要像XML的ant一样依赖于专门的解释器了。


当然，和开发专门的解释器/编译器相比，Lisp的宏也并非没有缺点，宏难以理解，开发和调试更加困难。到底是开发专门的解释器/编译器还是直接采用宏应该视具体情况而定。


#### 总结


Lisp采用单一的S表达式语法表达不同的语义，实现了语法和语义解耦。这使得Lisp具有强大的语义构造能力，擅长于构造DSL实现面向语言编程，而宏使得Lisp具有自解释能力，让不同DSL之间的转换游刃有余。进入Lisp的世界应当从理解面向语言编程入门，这是Lisp之道，而函数式编程和宏皆为Lisp之器，以道驭器方为正途。


#### 后记


本文是我学习Lisp的一个总结，也是写给有兴趣学习Lisp的程序员的入门资料。必须说明，我还是一个标准的Lisp初学者，几乎没有写过像样的Lisp程序，文中的错误和不足在所难免，希望读者批评指正，感谢！


#### 参考


[The Roots of Lisp](http://www.paulgraham.com/rootsoflisp.html)


[The Nature of Lisp](http://www.defmacro.org/ramblings/lisp.html)


[Why Lisp macros are cool, a Perl perspective](http://lists.warhead.org.uk/pipermail/iwe/2005-July/000130.html)


[Wikipedia: Language-oriented programming](https://en.wikipedia.org/wiki/Language-oriented_programming)


[《实用Common Lisp编程》](http://book.douban.com/subject/6859720/)


[《冒号课堂 – 编程范式与OOP思想》](http://book.douban.com/subject/4031906/)


