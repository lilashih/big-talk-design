# 迪米特法則(LoD - Law of Demeter)
Each unit should have only limited knowledge about other units: only units "closely" related to the current unit.
- 每個單元應該對其他單元只能有有限的知識：只了解跟目前單元比較親近的單元。
- 白話就是：一個物件應該對其他物件有最少的了解，例如Controller應該以最簡單的方式使用Service。

迪米特法則又叫做最小知識原則(LKP - Least Knowledge Principle)，它的目的是解耦合，強調類之間的鬆耦合，顧名思義也就是當我們在設計一個類別時，這個類別必須要知道其他的方法或屬性是越少越好。在類的結構設計上，每個類都應當降低成員的訪問權限，如果類之間不需要直接通信，那麼兩個類間就不應該發生直接的相互作用，如果其中一個類要調用另一個類的某一個方法時，可以透過第三者轉發這個調用。

## 鏈結風格
迪米特法則經常被簡單描述為「對任何函式傳回的物件，不該再呼叫上頭之方法」，因此程式碼中出現訊息鏈(Message Chain)或方法鏈(Method Chain)時，就有可能是違反迪米特法則的訊號，實際上真的是如此嗎?

- [封裝與迪米特法則 | iThome](https://www.ithome.com.tw/voice/98670)
- [The Paperboy, The Wallet and The Law Of Demeter](https://www2.ccs.neu.edu/research/demeter/demeter-method/LawOfDemeter/paper-boy/demeter.pdf)

## 範例
無熟人辦事難。

## 參考
- [Law of Demeter: Principle of Least Knowledge](http://www.ccs.neu.edu/home/lieber/LoD.html)
- [軟體路上不孤單Day13-物件導向原則介紹6[LoD] - iT 邦幫忙::一起幫忙解決難題，拯救 IT 人的一天](https://ithelp.ithome.com.tw/articles/10101265)
- [迪米特法則 | 點燈坊](https://oomusou.io/oop/oop-demeter/)
- [封裝與迪米特法則 | iThome](https://www.ithome.com.tw/voice/98670)
- [The Paperboy, The Wallet and The Law Of Demeter](https://www2.ccs.neu.edu/research/demeter/demeter-method/LawOfDemeter/paper-boy/demeter.pdf)

## Run
```
php index.php
```

