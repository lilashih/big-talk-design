# 裝飾者模式(Decorator Pattern)
動態的給對象添加一些額外的職責，就增加新功能來說，裝飾模式比生成一堆子類別更靈活，而且這個裝飾是可以有順序的(先做DI的事，再做自己的事)。

建造的過程如果是穩定的要用建造者模式。

> 何時用(SRP & OCP)：
>
> 有新功能時，通常是在主類中加新代碼(違反OCP)，但這些新功能僅僅是為了滿足一些只在特定情況下(違反SRP)才會執行的特殊行為需要。
>
> 裝飾者模式可以將這些功能放在單獨的類中，依需求有選擇的、按順序的使用裝飾功能包裝對象，但理想中應保持裝飾類間的獨立，才不會在順序的的組合上出錯。

## 組成
1. 抽象物件(Component)：定義了對象的接口，可以給這些對象動態增加職責(方法)。
2. 具體物件(ConcreteComponent)：定義了具體的構件對象，實現了在抽象構件中聲明的方法，裝飾器可以給它增加額外的職責(方法)。
3. 抽象裝飾物件(Decorator)：抽象構件類的子類，用於給具體構件增加職責，但是具體職責在其子類中實現。
4. 具體裝飾物件(ConcreteDecorator)：抽象裝飾類的子類，負責向構件添加新的職責。

##### 備註：裝飾者模式中的繼承行為，是為了讓裝飾者與被裝飾者必須是一樣的型態，也就是有共同的超類別。

## 範例
穿衣服。

## 參考
- [裝飾者模式筆記 | PIN - 點部落](https://dotblogs.com.tw/pin0513/archive/2010/01/04/12779.aspx)
- [Decorator Design Pattern in PHP](https://sourcemaking.com/design_patterns/decorator/php)
- [裝飾模式 | Design Pattern](https://rongli.gitbooks.io/design-pattern/content/chapter8.html)

## Run
```
php index.php
```

