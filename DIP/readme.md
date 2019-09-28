# 依賴反轉原則(DIP - Dependency Inversion Principle)
High-level modules should not depend on low-level modules. Both should depend on abstractions.
- 高層模組不應該依賴底層模組，它們都應該依賴抽象。

Abstractions should not depend on details. Details should depend on abstractions.
- 抽象不應該依賴細節，細節應該依賴抽象。

為了解除高階模組(Caller呼叫者)與低階模組(Callee被呼叫者)的耦合關係，使高階模組不再直接依賴低階模組，避免上層模組因為底層模組改變而被迫改變。

## 控制反轉(IoC - Inversion of Control)
控制反轉告訴你如何實作DIP，它主要的精神是將創建物件的控制權進行轉移，將new什麼物件的決定權轉移到第三方，就是獲得依賴對象的方式反轉了。

## 依賴注入(DI - Dependency Injection)
將所需的依賴實例，注入到高階模組中，由依賴注入取得插件實例，高階模組完全沒有與具體實作耦合。

有以下三種形式：
1. 建構子注入(Constructor Injection)
2. 屬性注入(Setter Injection)
3. 介面注入(Interface Injection)

主要就是Type Hint定義的參數必須是個interface，這樣物件在建立時才可以丟這個interface的實例，而非在一開始就決定具體實例。

## IoC容器(IoC Container) / 服務容器(Service Container) 
IoC容器是：
1. Dependency Inversion
2. Dependency Injection
3. Inversion of Control

廣義上來說，IoC容器就是有進行DI的地方，你隨便寫一個類別，透過它將所需元件注入給高階模組，便可說是容器。但現在所說的容器，往往是泛指那些強大框架的容器：根據設定"自動生產"物件(非單一產品)，將其提供給所需模組，並管理該物件整個生命週期的超級自動化工廠。

它包含以下幾個功能：
1. 動態創建、注入依賴物件
2. 管理該物件整個生命週期
3. 映射依賴關係

## 參考
- [依賴倒置原則 (Dependency-Inversion Principle, DIP) - NotFalse 技術客](https://notfalse.net/1/dip)
- [PHP OO 物件導向原則:單一職責原則SRP](https://wadehuanglearning.blogspot.com/2017/08/php-oo.html)
- [SOLID 之 依賴反轉原則（Dependency inversion principle） - iT 邦幫忙::一起幫忙解決難題，拯救 IT 人的一天](https://ithelp.ithome.com.tw/articles/10192844)
- [PHP OOP Tutorial | What is a PHP interface - YouTube](https://www.youtube.com/watch?v=dk_1Q_LB14k)
- [深入理解DIP、IoC、DI以及IoC容器 - 木小楠 - 博客园](http://www.cnblogs.com/liuhaorain/p/3747470.html)
- [attributes - Type hinting for properties in PHP 7? - Stack Overflow](https://stackoverflow.com/questions/37254695/type-hinting-for-properties-in-php-7)
- [控制反轉 (IoC) 與 依賴注入 (DI) - NotFalse 技術客](https://notfalse.net/3/ioc-di)
- [Hannes Van De Vreken - IOC container beyond constructor injection - Laracon EU 2016 - YouTube](https://www.youtube.com/watch?v=WMT8txJHdKI)