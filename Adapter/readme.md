# 轉接器模式(Adapter Pattern)
又叫適配器模式，將一個類別的介面，轉換成另一個介面以供客戶使用，也就是把原本類的接口轉換成客戶端所期待的另一種接口，從而使原本因接口不匹配而無法一起工作的兩個類能夠在一起工作，讓原本不相容的類別可以互相合作。

Adapter分成兩種：
1. 類別轉接器：繼承(Class way)。
2. 物件轉接器；組合(Object way)。

其中由於類別轉接器需要多重繼承才能實作它，所以如果要使用類別轉接器必須選用支援多重繼承的語言，如C++。
##### 備註：C#、Java不支持多重繼承

與類別轉接器模式不同的是，物件轉接器模式不是使用繼承關係連接到Adaptee類，而是使用委派關係連接到Adaptee類。

> 何時用：
>
> 1. 設計階段：在開設計段其實沒必要使用轉接器模式，因為實在沒必要把功能相似的類設計不同的接口；但若有使用到第三方套件，而這套件的接口與我們系統的接口不同，也沒必要為了迎合它而修改自己的接口時，儘管是在設計階段，也是可以考慮用轉接器模式來解決接口不同的問題。
>
> 2. 維護階段：客戶代碼若可以統一接口就要先朝這方面做修正，轉接器模式要在雙方都不太容易修改時再使用。


## 組成
1. 目標抽像類(Target)：Target接口，這是原類Adaptee没有的方法，期待得到的插頭。
2. 轉接器類(Adapter)：轉接器Adapter繼承自Target，實現了目標接口Target。
3. 被轉接的類(Adaptee)：要被轉接的類，原有的插頭。
4. 客戶類(Client)：定義具體使用目標類，並透過Adapter類調用所需要的方法從而實現目標(不需透過原有插頭)。

## 範例
籃球中英翻譯。

## 參考
- [轉接器模式(Adapter Pattern) | 阿洲的程式教學](http://monkeycoding.com/?p=973)
- [轉接器模式 (Adapter Pattern)](http://corrupt003-design-pattern.blogspot.com/2016/07/adapter-pattern.html)
- [江湖走跳，轉接頭很重要! (Adapter 適配器模式) - iT 邦幫忙::一起幫忙解決難題，拯救 IT 人的一天](https://ithelp.ithome.com.tw/articles/10194158)
- [適配器模式（Adapter Pattern）- 最易懂的設計模式解析- 簡書](https://www.jianshu.com/p/9d0575311214)
- [重構到設計模式：使用 Adapter Pattern | 點燈坊](https://oomusou.io/design-pattern/adapter/)

## Run
```
php index.php
```

