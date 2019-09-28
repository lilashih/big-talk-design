# 反覆器模式(Iterator Pattern)
又叫迭代器模式，它為如何訪問集合的內部定義了統一的訪問方式。有了這個統一的訪問方式，客戶端就可以對那些集合類所有的集合使用統一的方式來訪問，而不用關心集合的類型。反覆器模式提供一種方法順序訪問一個聚合對象中的各個元素，而且又不暴露該對象的內部表示。

當你需要訪問一個聚集對象，而且不管這些對象是什麼都需要遍歷時，就該考慮反覆器模式，為便利不同的聚集結構提供如開始、下一個、是否結束、當前項目等接口。

不過這模式其實已經被實作在語言中了，就是我們熟悉的for in、foreach，基本上大部分語言的for-in、foreach loop都是Iterator Pattern的實作，也因此MartinFlower甚至在自己的網站提出撤銷此模式。

## 組成
1. 聚集抽象類(Aggregate)：聚集的抽象類。
2. 具體聚集類(Concrete Aggregate)：繼承自Aggregate。
3. 反覆器抽象類(Iterator)：用來定義得到開始對象、得到下一個對象、判斷是否到結尾、當前對象等抽象方法的統一接口。
4. 具體反覆器類(Concrete Iterator)：繼承自Iterator，實現Iterator的接口。

#### SPL(Standard PHP Library)
1. Iterator：聚集抽象類(Aggregate)Interface，實現\Iterator接口的類，就可以利用foreach把它當作陣列來操作。

    - Iterator源碼。
    ```php
    interface Iterator extends Traversable {
        public function current();
        public function next();
        public function key();
        public function valid();
        public function rewind();
    }
    ```
#### Generator
透過SPL的Iterator可以把一個循序操作的過程包裝起來，然後利用foreach把它當作陣列來操作。不過為了要能這樣操作，就需要打破程式的流程，把步驟分散到各個不同方法裡，其實是有一點麻煩的，而且需要浪費極大的記憶體空間儲存資料。

如果使用Generator的話，就可以用更簡單的方式來做，只要在適當的時機使用yield。使用了yield的函數，執行後會回傳一個Generator，而Generator也implement了Iterator，所以一樣可以用foreach來操作。

但這種方式只能知道目前的資料為何，然後靠yield傳回，它無法後退，也無法快轉，若要求更進階的功能，還是必須使用SPL Iterator，並且實踐Iterator interface。

- [如何使用Generator? | 點燈坊](https://oomusou.io/php/php-generator/)

## 範例
驗票員。

## 參考
- [設計模式學習 - Iterator Pattern - 每日頭條](https://kknews.cc/zh-tw/news/g2gvgm8.html)
- [Rx 入門一：迭代器模式 • Weihang Lo](https://weihanglo.tw/posts/2017/intro-rx-1-iterator-pattern/)
- [逐步提昇PHP技術能力 - PHP的語言特性 ： Generators / Iterators - iT 邦幫忙::一起幫忙解決難題，拯救 IT 人的一天](https://ithelp.ithome.com.tw/articles/10133614)
- [如何使用Generator? | 點燈坊](https://oomusou.io/php/php-generator/)

## Run
```
php index.php
```

