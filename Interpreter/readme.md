# 解釋器模式(Interpreter Pattern)
用解釋器模式就如同開發一個程式語言給別人或自己用，就是一個迷你語言，將一句話轉成實際的命令程序。

解釋器模式定義了語言的文法，並且建立一個解釋器來解釋該語言中的句子，這裏的語言意思是使用規定格式和語法的代碼。

## 組成
1. 內容類(Context)：一般是用來存放文法中各個終結符所對應的具體值，比如R=R1+R2，我們給R1賦值100，給R2賦值200。
2. 抽象表達式(AbstractExpression)：聲明一個所有具體表達式都要實現的抽象接口或者抽像類，主要有一個interpret()方法，稱為解釋操作。具體解釋任務由它的各個實現類來完成，具體的解釋器分別由TerminalExpression和NonterminalExpression完成。
3. 終結符表達式(TerminalExpression)：實現與文法中的元素相關聯的解釋操作，通常一個解釋器模式中只有一個終結符表達式，但有多個實例，對應不同的終結符。終結符一半是文法中的運算單元，比如有一個簡單的公式R=R1+R2，在裡面R1和R2就是終結符，對應的解析R1和R2的解釋器就是終結符表達式。
4. 非終結符表達式(NonterminalExpression)：文法中的每條規則對應於一個非終結符表達式，非終結符表達式一般是文法中的運算符或者其他關鍵字，比如公式R=R1+R2中，+就是非終結符，解析+的解釋器就是一個非終結符表達式。非終結符表達式根據邏輯的複雜程度而增加，原則上每個文法規則都對應一個非終結符表達式。

## 範例
音樂解釋器。

## 參考
- [解釋器模式- 23種設計模式- 極客學院Wiki](http://wiki.jikexueyuan.com/project/java-design-pattern/interpreter-pattern.html)
- [解釋器模式(Interpreter) - IT閱讀](https://www.itread01.com/articles/1475891485.html)

## Run
```
php index.php
```

