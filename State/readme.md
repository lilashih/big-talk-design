# 狀態模式(State Pattern)
把複雜的狀態邏輯簡化，當然如果狀態的判斷邏輯很簡單就不需要用狀態模式了。適合使用狀態模式的情境取決於一個對象的行為是否依賴於它的狀態，如果在運行時需要常常依據狀態來改變行為，那就應該考慮使用狀態模式。

## 組成
1. 抽象狀態類(State)：定義一個接口以封裝與Context的一個特定狀態相關的行為。
2. 環境類(Context)：維護一個ConcreteState子類的實例，這個實例定義當前狀態。
3. 具體狀態類(ConcreteState)：每一子類實現一個與Context的一個狀態相關的行為。

## 範例
工作狀態。

## 參考
- [设计模式 ( 十七) 状态模式State（对象行为型） - guisu，程序人生。 逆水行舟，不进则退。 - CSDN博客](https://blog.csdn.net/hguisu/article/details/7557252)

## Run
```
php index.php
```

