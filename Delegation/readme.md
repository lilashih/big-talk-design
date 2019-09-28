# 委托模式(Delegation Pattern)
在觀察者模式中有些缺點：
1. 如果通知者在通知觀察者時，並不是要呼叫update方法呢，在現實生活中方法名稱不一定會相同
2. 又或者這些被通知者並非是我們自己寫的code，這樣的話當然也就沒有定義update了

為了解決以上的不足，我們可以採用委托模式。在委托模式中，原本在觀察者模式中的attach和detach都不需要了(抽象通知者不希望依賴於抽象觀察者)，觀察者的update也不需要了，而通知者的notify就是對觀察者的遍歷。為了讓通知者與被通知者間互相獨立，我們讓client自己來決定要通知誰，讓客戶端來讓委託方法，但委託的前提必須是委託對象所搭載的所有方法，都必須具有相同的參數和返回值。

## 範例
通風報信。

## 參考
- [Practical PHP Refactoring: Replace Inheritance with Delegation - DZone Agile](https://dzone.com/articles/replace-inheritance-delegation)
- [php-design-patterns/Patterns/Delegate at master · kevbradwick/php-design-patterns · GitHub](https://github.com/kevbradwick/php-design-patterns/tree/master/Patterns/Delegate)

## Run
```
php index.php
```

