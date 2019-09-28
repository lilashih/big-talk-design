# 工廠方法模式(Factory Method Pattern)
定義一個用於創建對象的接口，讓子類決定實例化哪一個類。工廠方法使一個類的實例化延遲到其子類。

> 工廠方法(OCP)：
>
> 優點在於工廠類包含了必要的邏輯判斷，可以根據客戶端的選擇條件，動態實例化相關的類。
> 
> 但這也是問題所在，因為這樣會讓我們去修改到原本的類，違反了OCP。

## 範例
1. 計算機。
2. 雷鋒。

## 參考
- [[Design Pattern] 工廠方法模式 (Factory Method Pattern) 各自的飲料工廠 | .Net 蛤什麼? - 點部落](https://dotblogs.com.tw/joysdw12/2013/09/12/design-pattern-factory-method-pattern)
- [DependencyAndAssociation](https://martinfowler.com/bliki/DependencyAndAssociation.html)

## Run
```
php index.php
```

