# 簡單工廠模式(Simple Factory Pattern)
簡單工廠切割了介面與業務，並且依照需求產生相對應的物件，若是要擴充運算類別或是修改，也只需針對業務這一塊，並對於判斷建立相對應的運算。

## 範例
計算機。

## OOP三大特性
利用物件導向的特性(封裝、繼承、多型)來寫出容易擴充、維護與高重用性的程式。
1. 封裝(Encapsulation)
    * 業務/資料封裝
    * 避免程式各個物件互相干擾
2. 繼承(Inheritance)
    * 好複用且不需修改其他code
3. 多型(Polymorphism)
    * Override
        * 子類重新定義父類的函數
    * Overload
        * 許存在多個同名函數，但parameter不同
    
## 參考
- [[設計模式] 簡單工廠(Simple Factory) | .NET 隨筆 - 點部落](https://dotblogs.com.tw/atowngit/2010/02/05/13480)
- [Yen's Blogger: 物件導向三大特色](http://chihyen-hsiao.blogspot.com/2013/07/1.html)

## Run
```
php index.php
```

