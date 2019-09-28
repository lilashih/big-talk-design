# 中介者模式(Mediator Pattern)
當物件和物件之間或有錯綜複雜的交互作用，可將這些關係交由另一物件(中介者)來處理，以減少這些物件間的耦合。

物件之間存在大量的相互關聯和調用，若有一個物件發生變化，則需要跟踪和該物件關聯的其他所有物件，並進行適當處理。一個模塊可能由很多物件構成，而且這些物件之間可能存在相互的引用，透過中介者模式可以減少對像兩兩之間複雜的引用關係，使之成為一個松耦合的系統。

## 組成
1. 抽象同事類(Colleague)：定義各個同事類公有的方法，並聲明了一些抽象方法來供子類實現，同時它維持了一個對抽像中介者類的引用，其子類可以通過該引用來與中介者通信。
2. 抽像中介者(Mediator)：定義一個接口，該接口用於與各同事對象間的通信。
3. 具體同事類(ConcreteColleague)：具體同事類，每個具體同事只知道自己的行為，不需去了解其他具體同事的情況，但他們都認識中介者對象。
4. 具體中介者(ConcreteMediator)：具體中介者，透過協調各個同事對象來實現協作行為，它必須知道所有具體同事類，從具體同事類接收消息，向具體同事類發送消息。
    - 具體中介者類(ConcreteMediator)中包含了同事之間的交互細節，可能會導致具體中介者類非常複雜，使得系統難以維護。

## 範例
聊天室(用戶對象之間存在很強的關聯性)。

## 參考
- [XYZ的筆記本: 設計模式：中介者模式 (Mediator Pattern)](https://xyz.cinc.biz/2013/07/mediator-pattern.html)
- [2. 中介者模式— Graphic Design Patterns](https://design-patterns.readthedocs.io/zh_CN/latest/behavioral_patterns/mediator.html)
- [JAVA设计模式之 中介者模式【Mediator Pattern】 - 小吕丶Code阶区 - CSDN博客](https://blog.csdn.net/janice0529/article/details/41685175)

## Run
```
php index.php
```

