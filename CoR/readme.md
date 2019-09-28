# 責任鏈模式(CoR - Chain of Responsibility Pattern)
讓多個物件都有機會可以處理請求，以避免請求的發送者和接受者之間產生耦合關係。將這些物件連成一條鏈，並沿著這條鏈傳遞請求，直到有一個物件處理這個請求為止。

責任鏈的用意在於把每個角色的職責分清楚，每個物件只需要做好自己的事，透過責任鏈的方式來組合，並完成使用場景的需求，責任鏈模式也可以隨時增加或修改請求的結構，強調指派責任的靈活性。但為了避免請求到末端因配置錯誤而得不到處理，事先的考慮必須要全面。

責任鏈模式可以將請求的發出者和接受者之間予以鬆綁，請求者不需要知道實際接受者是誰，也不用知道請求是如何被處理，各個接受者之間也是彼此獨立且鬆綁的。責任鏈模式也可以動態修改責任鏈，如新增或刪除處理請求的物件。因為上述的特性，因此很常用來使用在視窗程式中，處理像是滑鼠或是鍵盤事件。但要注意的是，此模式沒有保證請求一定會被處理，端看設計者如何設計責任鏈。

## 組成
1. 抽象處理者(Handler)：定義了一個處理請求的接口。當然對於鏈子的不同實現，也可以在這個角色中實現後繼鏈。
2. 具體處理者(ConcreteHandler)：實現抽象角色定義的接口，並處理它所負責的請求，如果不能處理則會將請求轉發給它的後繼者(下一位)。 

## 範例
加薪及請假流程。

## 參考
- [責任鏈模式 (Chain of Responsibility Pattern)](http://corrupt003-design-pattern.blogspot.com/2017/01/chain-of-responsibility-pattern.html)
- [[.NET]重構之路系列v11 &ndash;用責任鏈模式打破討厭的switch case | In 91 - 點部落](https://dotblogs.com.tw/hatelove/archive/2012/04/09/refactoring-replace-switch-case-with-chain-of-responsibility-pattern.aspx)
- [責任鏈模式 chain of responsibility - 神馬文庫](https://www.smwenku.com/a/5b7fc4e92b717767c6b187e1/)

## Run
```
php index.php
```

