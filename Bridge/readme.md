# 橋接模式(Bridge Pattern)
橋接模式把抽象和實作分離，使他們都可以獨立變化。允許你改變實作及抽象，採取的作法是將實作與抽象放在兩個不同的類別階層中。

當我們發現使用繼承會造成大量的類增加，且無法滿足開放封閉原則(OCP)時，就該考慮使用橋接模式。

## 組成
1. 抽象類(Abstraction)：抽象化給出的定義，並保存一個對實現化對象的引用。
2. 擴充抽像類(RefinedAbstraction)：擴展Abstraction，改變和修正父類對抽象化的定義。
3. 實現類接口(Implementor)：定義要實作Abstraction的介面接口。
4. 具體的實作者(ConcreteImplementor)：具體實作Implementor的介面。

## 範例
手機應用程式。

## 參考
- [橋接模式 (Bridge Pattern)](http://corrupt003-design-pattern.blogspot.com/2017/01/bridge-pattern.html)
- [Bridge Pattern -- 分成功能階層和實作階層 | 技術筆記](http://twmht.github.io/blog/posts/design-pattern/bridge.html)
- [設計模式筆記16：橋接模式(Bridge Pattern) - Snowball - CSDN博客](https://blog.csdn.net/yangzl2008/article/details/7670996)

## Run
```
php index.php
```

