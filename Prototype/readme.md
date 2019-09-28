# 原型模式(Prototype Pattern)
#### 工場模式
* 原型模式與工場模式類似，都是用來創建對象的，但工廠模式每次new物件時都會執行一次建構子，如果生成大對象會造成很大的開銷。

#### 原型模式
* 但如果利用克隆(clone)來生成大對象，則可以減少創建時占用開銷的初始化操作。原型模式其實就從一個對象在創建另一個可制定的對象，而且不須要知道任何創建的細節，等於不用重新初始化對象，而是動態的獲得運行時的狀態。

> 為什麼需要原型模式
> 
> 有些時候，我們需要創建多個類似的大對象，如果直接通過new來創建，會造成很大的開銷，而且new完還得進行重複的初始化工作。雖然初始化工作可以封裝起來，但是對於系統來說，你封不封裝，初始化工作還是要執行。
> 
> 原型模式則不同，原型模式是先創建好一個原型對象，然後通過clone這個原型對象來創建新的對象，這樣就免去了重複的初始化工作，系統僅需內存拷貝即可。

## 淺拷貝(Shallow Copy)
* 僅複製物件的指標，因此新舊物件是共用同一塊記憶體。

PHP可以使用clone關鍵字來複製一個物件，但過程是採用淺拷貝的方式。所以複製後，物件裡面的其他的物件，不會被複製到(指向同一個內存空間)。
```php
class X1
{
    public $v1 = 0;
}

class X2
{
    public $v2 = 0;
    public $obj1;
    
    public function __construct() 
    {
        $this->obj1  = new X1(); // 物件裡的物件
    }
}

$a = new X2();
$b = clone $a;

$b->v2 = 11; // 不會修改到 $a->v2
$b->obj1->v1 = 22; // $a->obj1->v1 也一起改變了
var_dump($a);
var_dump($b);
```

## 深拷貝(Deep Copy)
* 創造一個新的物件，因此新舊物件不會互相影響，存在於不同記憶體。

若想連裡面的物件也複製，則必須要設定magic methods __clone。__clone方法在複製新物件時會執行，所以可以設定複製時，要額外執行什麼動作。
```php
class X1
{
    public $v1 = 0;
}

class X2
{
    public $v2 = 0;
    public $obj1;
    
    public function __construct() 
    {
        $this->obj1  = new X1(); // 物件裡的物件
    }
    
    //當 clone 發生時會執行
    public function __clone()
    {
        $this->obj1 = clone $this->obj1;
    }
}

$a = new X2();
$b = clone $a;

$b->v2 = 11; // 不會修改到 $a->v2
$b->obj1->v1 = 22; // 不會修改到 $a->obj1->v1
var_dump($a);
var_dump($b);
```

## 範例
寫履歷。

## 參考
- [PHP设计模式（四）—原型模式（Prototype Pattern）_慕课手记](https://www.imooc.com/article/16973)
- [XYZ的筆記本: PHP 使用 clone 複製物件](https://xyz.cinc.biz/2015/03/php-clone-object.html)
- [用範例理解 Vue.js #16：實例 Vue Instance (deep copy) lodash.js 效能比較 - iT 邦幫忙::一起幫忙解決難題，拯救 IT 人的一天](https://ithelp.ithome.com.tw/articles/10193783)

## Run
```
php index.php
```

