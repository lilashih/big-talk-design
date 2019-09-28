# 備忘錄模式(Memento Pattern)
備忘忘錄模式的用途很單純，就是提供物件回到之前狀態的功能，簡單說就是備份(存檔)的機制，如遊戲的儲存記錄、文書編輯器上一步的功能等。

該模式適用於功能複雜，且須要維護或紀錄屬性歷史的類，或者需要保存的屬性只是眾多屬性中的一部分，但在儲存Memento時會將整個狀態資料都存進去，所以如果資料很多會非常消耗記憶體。

## 組成
1. 發起人(Originator)：負責創建一個備忘錄物件(Memento)來記錄當前的內部狀態，定義哪些屬於備份範圍的狀態，負責創建和恢復備忘錄數據。
2. 備忘錄(Memento)：負責存儲發起人(Originator)物件的內部狀態，把要保存的細節封裝在Memento中，在需要的時候提供發起人所需的內部狀態，並防止Originator以外的其他對象訪問Memento。而Memento有兩個接口：
    - 窄接口：Caretaker只能看到Memento的窄接口，只能將備忘錄傳給其他對象。
    - 寬接口：Originator只能看到一個寬接口，並允許它取得先前狀態的所有資料。
3. 管理者(Caretaker)：主要功用是管理Memento物件，無法對Memento內容進行操作。

## 範例
遊戲進度儲存。

## 參考
- [備忘錄模式 (Memento Pattern)](http://corrupt003-design-pattern.blogspot.com/2017/02/memento-pattern.html)

## Run
```
php index.php
```

