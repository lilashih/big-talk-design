# 抽象工廠模式(Abstract Factory Pattern)
用一個抽象工廠來定義一個產品集合的介面，產品集合裡面每個產品的具體類別由繼承抽象工廠的實體工廠決定。抽象工廠模式提供一個創建一系列相關或相互依賴的接口，而無須指定他們具體的類。

## 組成
1. 抽象工廠接口(AbstractFactory)：宣告出各個創建具體工廠集合的介面。
2. 具體工廠(ConcreteFactory)：實作AbstractFactory。
3. 抽象產品(AbstractProduct)：宣告產品等級結構的物品介面。
4. 具體產品(ConcreteProduct)：ConcreteFactory所建構的成品，需要實作AbstractProduct。

## 使用簡單工廠+反射來改進抽象工廠模式
直接使用實際的實例，不須存在任何依賴，也就是不再需要AbstractFactory及ConcreteFactory的部分，直接將產品包在一個簡單工廠裡。

## 範例
換DB。

## 參考
- [設計模式 - 工廠方法及抽象工廠 | TechBridge 技術共筆部落格](https://blog.techbridge.cc/2017/05/22/factory-method-and-abstract-factory/)
- [Static class initializer in PHP - Stack Overflow](https://stackoverflow.com/questions/3312806/static-class-initializer-in-php)

## Run
```
php index.php
```

