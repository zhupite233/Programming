<?php 
/*
============================================== 设计模式 ==============================================

1.工厂模式  
 
 将不同的操作封装成不同的类,需要的时候选择性的实例化 返回一个对象

2.策略者模式

根据不同的类型参数传入不同的对象进入

3.单一职责原则 

每个类都有不同的职责,而一个类只负责单一的任务,避免程序的耦合性,避免修改一个类造成很多隐形的错误

4.面向对象

强内聚,松耦合
依赖倒转其实可以说是面向对象设计的标志,用那种语言来编写程序不重要,如果编写是考虑的都是如何针对抽象编程二不是针对细节编程,及程序中所有的依赖关系都是终止与抽象类或者接口,那就是面向对象的设计,繁殖就是过程化的设计了

5.装饰者模式










父类有自己的方法和属性 子类中也可加上自己所特有的属性和方法。----也就实现了多态

=============================================  抽象类  ===========================================


抽象类将事物的共性的东西提取出来，抽象成一个高层的类。子类由其继承时，也拥有了这个超类的属性和方法。---也就实现了代码的复用了。

子类中也可加上自己所特有的属性和方法。----也就实现了多态

假如有两个程序员，两个在两个程序里都要用到一种功能，比如要取一个对象名。

甲自己做了一个方法叫getname，乙也作了一个方法叫qumingzi。如果两个人要去看对方的程序，那么这个方法要读懂是不是要有一个过程？

如果在公司里，有个抽象类，离面有个抽象方法较getName,公司规定，凡遇到这样的问题就实现这个方法。那么这两个人要读对方的代码是不是就容易了？？
假如很多人要买水果吃，吃的动作只有一个，但是有的人要用现金买，有的人用信用卡，有的人赊帐。要为每个人定义一个类，就要定义多个相同的吃的方法。
如果定义一个抽象类，在里面实现吃的方法，再做一个买的抽象方法。那每个人的类都从这个抽象类派生下来，只要实现买的方法即可，吃的方法就可以直接用父类的方法了。
如果要改吃的方法就不用改多个，只要改这个抽象类里的就行了。

抽象类往往用来表征对问题领域进行分析、设计中得出的抽象概念，是对一系列看上去不同，但是本质上相同的具体概念的抽象。具体分析如下：

1.因为抽象类不能实例化对象，所以必须要有子类来实现它之后才能使用。这样就可以把一些具有相同属性和方法的组件进行抽象，这样更有利于代码和程序的维护。

比如本科和研究生可以抽象成学生，他们有相同的属性和方法。这样当你对其中某个类进行修改时会受到父类的限制，这样就会提醒开发人员有些东西不能进行随意修改，这样可以对比较重要的东西进行统一的限制，也算是一种保护，对维护会有很大的帮助。

2.当又有一个具有相似的组件产生时，只需要实现该抽象类就可以获得该抽象类的那些属性和方法。

比如学校又新产生了专科生这类学生，那么专科生直接继承学生，然后对自己特有的属性和方法进行补充即可。这样对于代码的重用也是很好的体现。

抽象类的特点：
抽象类不能实例化，只能被继承。
抽象类不一定有抽象方法，有抽象方法的类，一定是抽象类。
抽象方法的可见性不能是private
抽象方法在子类中，需要重写。

什么时候需要用抽象类？
有个方法，方法体不知如何写，子类中还必须有这个方法时，封装成抽象方法，类为抽象类。
控制子类中必须封装某些方法时，可以用抽象方法。
当需要控制类只能被继承，不能被实例化时。


=============================================  接口 ===========================================


什么情况下应该使用接口而不用抽象类. 


1. 需要实现多态

2. 要实现的方法(功能)不是当前类族的必要(属性).

3. 要为不同类族的多个类实现同样的方法(功能).

4.interface 是完全抽象的，只能声明方法，而且只能声明 public 的方法，不能声明 private 及 protected 的方法，不能定义方法体，也不能声明实例变量 。

接口用关键字 interface 来声明。抽象类提供了具体实现的标准，而接口则是纯粹的模版。接口只定义功能，而不包含实现的内容。

interface 是完全抽象的，只能声明方法，而且只能声明 public 的方法，不能声明 private 及 protected 的方法，不能定义方法体，也不能声明实例变量 。

interface 却可以声明常量变量 。但将常量变量放在 interface 中违背了其作为接口的作用而存在的宗旨，也混淆了 interface 与类的不同价值。如果的确需要，可以将其放在相应的 abstract class 或 Class 中。

任何实现接口的类都要实现接口中所定义的所有方法，否则该类必须声明为 abstract 。

一个类可以在声明中使用 implements 关键字来实现某个接口。这么做之后，实现接口的具体过程和继承一个仅包含抽象方法的抽象类是一样的。

一个类可以同时继承一个父类和实现任意多个接口。 extends 子句应该在 implements 子句之前。

 PHP 只支持继承自一个父类，因此 extends 关键字后只能跟一个类名。

接口不可以实现另一个接口，但可以继承多个
接口其中一个存在意义就是为了实现多态

而抽象类(继承) 也可以实现多态


=============================================  接口和抽象类的区别 ===========================================

抽象类:

定义为抽象的类不能被实例化.任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；另外，这些方法的访问控制必须和父类中一样（或者更为宽松）。例如某个抽象方法被声明为受保护的，那么子类中实现的方法就应该声明为受保护的或者公有的，而不能定义为私有的。此外方法的调用方式必须匹配，即类型和所需参数数量必须一致。例如，子类定义了一个可选参数，而父类抽象方法的声明里没有，则两者的声明并无冲突。 这也适用于 PHP 5.4 起的构造函数。在 PHP 5.4 之前的构造函数声明可以不一样的.

接口:

使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。

接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。

接口中定义的所有方法都必须是公有，这是接口的特性。

要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。类可以实现多个接口，用逗号来分隔多个接口的名称。

实现多个接口时，接口中的方法不能有重名。

接口也可以继承，通过使用extends操作符.

类要实现接口，必须使用和接口中所定义的方法完全一致的方式。否则会导致致命错误.

区别:

1.对接口的继承使用implements,抽象类使用extends.

2.接口中不可以声明变量,但可以声明类常量.抽象类中可以声明各种变量

3.接口没有构造函数,抽象类可以有

4.接口中的方法默认为public,抽象类中的方法可以用public,protected,private修饰 抽象方法的可见性不能是private

5.一个类可以继承多个接口,但只能继承一个抽象类
 */