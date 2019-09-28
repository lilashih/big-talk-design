# 命令模式(Command Pattern)
將請求封裝為物件，使你藉由不同的請求(如佇列或日誌請求)，對客戶端請求參數化，並支援可取消的操作。並且，大多數命令模式，如定義所述實現了佇列(Queue)、日誌(Log)、復原(undoable)...等功能。

命令模式最大的好處，是將引發命令的物件與實際執行操作的物件隔離開來，系統邏輯的隔離，大大的增加了擴充性，新增一個命令物件，並配置欲呼叫的Receiver與其操作，即可增加新功能。

## 组成
1. 抽象命令類(Command)：負責制定命令使用介面，"至少"會含有一個Execute()的抽象方法(abstract operation)。
2. 具體命令類(ConcreteCommand)：負責呼叫Receiver的對應操作，具體的命令類別，通常持有Receiver物件(繼承)。
3. 調用者(Invoker)：負責儲存與呼叫命令，儲存具體的命令物件(ConcreteCommand)，並負責呼叫該命令 — ConcreteCommand.Execute()，若該Command有實作復原功能，則在執行之前先儲存其狀態。
4. 接收者(Receiver)：負責執行命令的內容，知道如何根據命令的請求執行任務內容，因此任何能實現命令請求的類別，都有可能當作Receiver。
5. 客戶類(Client)：負責建立具體命令並組裝接收者，建立具體的命令物件(ConcreteCommand)，並設定其接收者(Receiver)，此處的Client是站在命令模式的立場，而非泛指的客戶，Client一詞是站在使用命令模式(Command Pattern)的立場而定。

## 範例
燒烤店。

## 參考
- [命令模式 (Command Pattern) - NotFalse 技術客](https://notfalse.net/4/command-pattern)

## Run
```
php index.php
```

