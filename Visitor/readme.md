# 訪問者模式(Visitor Pattern)
訪問者模式表示一個作用於某物件結構中的各元素之操作。它使你可以再不改變各元素之類別的前提之下，定義作用於這些元素的新操作。也就是當一個「物件結構」中的「元素」幾乎不會異動，但這些「元素的行為」常會增減，那就很適合用訪問者模式。
訪問者模式是GoF Design Pattern中最複雜的一種模式，使用頻率不高，在大部分的狀況下不需要使用這個模式。在資料結構穩定(甚至固定)時才適合使用，如果任意使用反而會造成(資料結構)擴充困難的結果。

> 使用情境：
> 
> 1. 元素的個數是固定時，也就是有穩定的資料結構；缺點是資料結構(元素)的增加變得更為困難了。
> 2. 將處理和資料結構兩者分離開來。
> 3. 增加操作就等於是增加新的Visitor。

## 组成
1. 結構對象(ObjectStructure)：能枚舉他的元素，主要用途是讓訪問者可以尋訪所有元件。
2. 抽像元素(Element)：定義一個以抽象訪問者(Visitor)為參數的Accept操作。
3. 抽象訪問者(Visitor)：為每一個具體元素(ConcreteElement)類別宣告一個Visit操作。
    - 如果需要頻繁的修改Visitor介面的話，代表不適合用Visitor模式(資料結構不穩定)。因為訪問者模式的結構跟概念都比較複雜所以使用的頻率不高，
4. 具體訪問者(ConcreteVisitor)：需要對每一個元素實作具體的Visit行為。
5. 具體元素(ConcreteElement)：實作Accept方法，是我們實際要操作的元件。

## 範例
男人和女人。

## 參考
- [[ Day 25 ] 每個人關心的點都不同 - 訪問者模式 (Visitor Pattern) - iT 邦幫忙::一起幫忙解決難題，拯救 IT 人的一天](https://ithelp.ithome.com.tw/articles/10208766)
- [XYZ的筆記本: 設計模式：訪問者模式 (Visitor Pattern)](https://xyz.cinc.biz/2013/08/visitor-pattern.html)
- [訪問者模式 (Visitor Pattern)](http://corrupt003-design-pattern.blogspot.com/2017/02/visitor-pattern.html)

## Run
```
php index.php
```

