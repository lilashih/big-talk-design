# 里氏替換原則(LSP - Liskov Substitution Principle)
Subtypes must be substitutable for their base types.
- 子類別必須要能取代它的父類別。

里氏代換原則是繼承復用的基礎，它背後所代表的意義是：父類別出現的地方，子類別就能代替它，而且要能做到替換而不出現任何錯誤或異常。

### 以下這個例子就違反了LSP
如果沒有達到LSP，則程式的行為將變得不可預測，換句話說可能產生不可預知且不易察覺的bugs。
舉個例子，如果Circle物件的draw method沒以把自己畫在畫面上，而是把自己存到檔案中，或是輸出到印表機中，或是輸出到畫面的時候使用的座標和父類別(Shape)所定義的座標系統不同。這樣的話雖然source code看起來都是正常的，但是在真正執行的時候程式的行為卻不是自己所預期的，這就是為什麼LSP容易被忽略的地方。
```php
class Shape
{
    abstract public function draw();
}

class Square extends Shape
{
    public function draw()
    {
        echo "畫出正方形";
    }
}

class Circle extends Shape
{
    public function draw()
    {
        echo "儲存檔案";
    }
}
```

## 參考
- [PHP OO 物件導向原則:單一職責原則SRP](https://wadehuanglearning.blogspot.com/2017/08/php-oo.html)
- [SOLID 之 里氏替換原則（Liskov substitution principle） - iT 邦幫忙::一起幫忙解決難題，拯救 IT 人的一天](https://ithelp.ithome.com.tw/articles/10192317)
- [搞笑談軟工: 亂談軟體設計（4）：Liskov Substitution Principle](http://teddy-chen-tw.blogspot.com/2012/01/4.html)