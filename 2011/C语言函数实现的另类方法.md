# C语言函数实现的另类方法
>date: 2011-01-26T13:38:20+08:00


在前面看过那个[BT的Javascript程序](/2011/%E4%B8%80%E6%AE%B5Javascript%E7%9A%84%E4%BB%A3%E7%A0%81.md)后，我们来看一个C语言的，相信大家还记得[输出从1到1000的数](/2011/%E8%BE%93%E5%87%BA%E4%BB%8E1%E5%88%B01000%E7%9A%84%E6%95%B0.md "输出从1到1000的数")最后的那个示例，本站还有很多这样的示例，如：[变态的hello word](/2009/6%E4%B8%AA%E5%8F%98%E6%80%81%E7%9A%84C%E8%AF%AD%E8%A8%80Hello%20World%E7%A8%8B%E5%BA%8F.md)，[如何教新手编程](/2010/%E8%80%81%E6%89%8B%E6%98%AF%E8%BF%99%E6%A0%B7%E6%95%99%E6%96%B0%E6%89%8B%E7%BC%96%E7%A8%8B%E7%9A%84.md)，[还有恐怖的C++](/2009/%E6%81%90%E6%80%96%E7%9A%84C%2B%2B%E8%AF%AD%E8%A8%80.md)，在下面这个示例面前，神马都是浮云。


下面这个示例向你展示了如何写一个swap()函数（把两个值交换），这段代码在我的Linux下的 gcc v4.1.1下可以正确编译通过，连一个Warning都没有，而且可以正确工作。我能说什么？！C语言并不疯狂，疯狂的是程序员。



```
#include <stdio.h>
void(*swap)() = (void(*)()) "\x8b\x44\x24\x04\x8b\x5c\x24\x08\x8b\x00\x8b\x1b\x31\xc3\x31\xd8\x31\xc3\x8b\x4c\x24\x04\x89\x01\x8b\x4c\x24\x08\x89\x19\xc3";

int main(){ // works on GCC 3+4
        int a = 37, b = 13;
        swap(&a, &b);

        printf("%d %d\n",a,b);
}
```

其实，这种**用字符串来实现函数的方法**，在原理上是很好理解的。



字符串就是一段内存空间，把一个字符串指针强转成函数指针，那么这个指针所指向的内容就是各种指令，因此，那堆乱七八糟的东西说白了就是汇编。8086的汇编。你可以使用ndisasm来看看。



```
# ruby -e "print \"\x8b\x44\x24\x04\x8b\x5c\x24\x08\x8b\x00\x8b\x1b\x31\xc3\x31\xd8\x31\xc3\x8b\x4c\x24\x04\x89\x01\x8b\x4c\x24\x08\x89\x19\xc3\"" | ndisasm -u -

00000000  8B442404          mov eax,[esp+0x4]       ; load pointers to two parameters into eax, ebx
00000004  8B5C2408          mov ebx,[esp+0x8]

00000008  8B00              mov eax,[eax]           ; load values of two parameters from pointers (*eax, *ebx) into eax, ebx
0000000A  8B1B              mov ebx,[ebx]

0000000C  31C3              xor ebx,eax             ; swap two values (eax, ebx) using xor trick
0000000E  31D8              xor eax,ebx
00000010  31C3              xor ebx,eax

00000012  8B4C2404          mov ecx,[esp+0x4]       ; load pointer to param 1 into ecx
00000016  8901              mov [ecx],eax           ; store swapped value 1 (eax) into param 1 (*ecx)

00000018  8B4C2408          mov ecx,[esp+0x8]       ; load pointer to param 2 into ecx
0000001C  8919              mov [ecx],ebx           ; store swapped value 2 (ebx) into param 2 (*ecx)

0000001E  C3                ret
```

注意：这段汇编中使用了XOR而不是引入第三个变量来完成了变量值的交换。


关于XOR的方式，参看下面的示例：



```
a = a^b;
b=a^b;
a=b^a; 
```

或者更为简单的：


`a^=b^=a^=b;`


(全文完)


