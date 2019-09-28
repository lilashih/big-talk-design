# 策略模式(Strategy Pattern)
將不同的演算法，定義成一個家族，這些演算法實現同樣的接口，且寫成個別的類別，所以彼此之間能夠互相替換。
優點是以後要增加新的演算法，只須額外新增一個類別，不須動到原本的類別。

當需求為不同時間應用不同的業務規則，就可以考慮使用策略模式處理變化的可能性。

## 範例
商店在不同的時期，常會有不同的折扣活動。假設有「打8折」、「打7折」、「滿200打6折」。 
這些不同的算法則可用策略模式來實做，以後如果又有新的折扣活動，只須再新增一個算法類別即可，不須更動到原本的計算類別。

## 參考
- [[設計模式] 策略模式(Strategy) + 簡單工廠(Simple Factory) | .NET 隨筆 - 點部落](https://dotblogs.com.tw/atowngit/2010/02/07/13511)
- [策略模式與簡單工廠模式有什麼不同? · 設計模式學習筆記 - Study Design Pattern In Java](https://skyyen999.gitbooks.io/-study-design-pattern-in-java/content/strategySimpleFactory.html)

## Run
```
php index.php
```

