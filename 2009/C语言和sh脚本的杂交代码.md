# C语言和sh脚本的杂交代码
>date: 2009-11-19T13:47:51+08:00


在网上看到了一个把 C语言和bash杂并起来的例子，这个示子如下所示。在下面这个例子中，我们把脚本用#if 0这个预编译给起来，这样就不会让其编译到C语言中了。



```
#if 0
echo "Hello from bash!"
exit
#endif
#include <stdlib.h>
#include <stdio.h>
int main(int argc, char* argv[]) {
  puts("Hello from C!");
  return EXIT_SUCCESS;
}
```

下面，让我看看如果来使用这样的程序：



```
$ sh test.sh.c
Hello from bash!
$ gcc test.sh.c -o test
$ ./test
Hello from C!

```

你甚至还可以做一个自我编译，并自我运行的源代码。如下所示：




```
#if 0
file=`mktemp`
gcc -o $file $0
$file
rm $file
exit
#endif
#include <stdlib.h>
#include <stdio.h>

int main(int argc, char *argv[]) {
  puts("Hello from C!");
  return EXIT_SUCCESS;
}
```

运行：



```
$ sh test.sh.c
Hello from C!
$
```

当然，我并不建议你在真正的开发环境中这样使用，我只不过是在介绍一个比较有趣的用法，仅此而已！


