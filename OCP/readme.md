# 開放封閉原則(OCP - Open Closed Principle)
Open for extension. Close for modification.
- 開放擴展，封閉修改。

面對需求的改變，為了保持code的穩定，應該是增加新代碼，而非更改現有代碼。但模塊可能無法完全封閉，因此應該猜出最有可能發生變化的類，並抽象隔離那些變化。

## 參考
- [PHP OO 物件導向原則:單一職責原則SRP](https://wadehuanglearning.blogspot.com/2017/08/php-oo.html)
- [SOLID 之 開關原則（Open-Close principle） - iT 邦幫忙::一起幫忙解決難題，拯救 IT 人的一天](https://ithelp.ithome.com.tw/articles/10192105)