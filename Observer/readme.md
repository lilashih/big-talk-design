# 觀察者模式(Observer Pattern)
又叫發布訂閱模式(Publish Subscribe Pattern)，定義對象間的一對多依賴關係，讓多個觀察者對象同時監聽某一主題的對象，當這個主題更新狀態時，會自動通知並更新其所有依賴的觀察者。

> 何時用(DIP)：
>
> 當一對象改變時，需要同時改變其他對象的，並且無法確定有多少對象需要改變時，就應該使用使用觀察者模式。當一個抽象有兩個方面，其中一方依賴於另一面，這時使用觀察者模式可以將這兩者封裝在獨立的對象中，使他們各自獨立的改變和復用，讓耦合的雙方都依賴於抽象，而不是依賴於具體，從而使得各自的變化都不會影響到另一邊的變化(DIP)。

## 組成
1. 抽象主題\抽像被觀察者\抽象通知者(Subject)：該角色把所有觀察者對象保存在一個集合裡，每個主題都可以有任意數量的觀察者，抽象主題提供一個接口，可以增加和刪除觀察者對象。
2. 具體主題\具體通知者(ConcreteSubject)：該角色將有關狀態存入具體觀察者對象，在具體主題的內部狀態發生改變時，給所有註冊過的觀察者發送通知。
3. 抽象觀察者(Observer)：是觀察者者的抽像類，它定義了一個更新接口，使得在得到主題更改通知時更新自己。
4. 具體觀察者(ConcreteObserver)：是實現抽象觀察者定義的更新接口，以便在得到主題更改通知時更新自身的狀態。

#### SPL(Standard PHP Library)
1. SplSubject：抽象主題(通知者)Interface。

    - SplSubject源碼。
    ```php
    interface SplSubject {
        public function attach(SplObserver $observer); //註冊觀察者到當前主題
        public function detach(SplObserver $observer); //從當前主題刪除觀察者
        public function notify(); //主題狀態更新時通知所有的觀察者做相應的處理
    }
    ```
2. SplObserver：抽象觀察者Interface。

    - SplObserver源碼。
    ```php
    interface SplObserver 
    {
        public function update(SplSubject $subject); //註冊觀察者到當前主題
    }
    ```
3. SplObjectStorage：SplObjectStorage類在實現Observer Pattern上很有幫助，它對於物件的找查、新增、刪除等都很方便。使用SplObjectStorage後，就不需要再使用最原始的for去遍歷觀察者數組或者使用array_search()。

   - SplObjectStorage::attach()的部分源碼。
    ```php
    function attach($obj, $inf = NULL) 
    { 
       if (is_object($obj) && !$this->contains($obj)) { 
           $this->storage[] = array($obj, $inf); 
       } 
    }
    ```
    
    - SplObjectStorage用法。
    ```php
    $a = new StdClass; // $a->id = 1
    $b = new StdClass; // $b->id = 2
    $c = new StdClass; // $c->id = 3
    
    $storage = new SplObjectStorage;
    $storage->attach($a);
    $storage->attach($b);
    $storage->attach($c);
    echo $storage->count(); // 3
    
    // trying to attach same object again
    $storage->attach($c);
    echo $storage->count(); // still 3
    
    var_dump($storage->contains($b)); // TRUE
    $storage->detach($b);
    var_dump($storage->contains($b)); // FALSE
    ```
    
## 範例
通風報信。

## 參考
- [PHP設計模式（十四）—觀察者模式（observer Pattern） - 簡書](https://www.jianshu.com/p/3a98b530e195)
- [PHP設計模式-觀察者模式- 個人文章- SegmentFault 思否](https://segmentfault.com/a/1190000010502678)
- [PHP : Remove object from array - Stack Overflow](https://stackoverflow.com/questions/3573313/php-remove-object-from-array)
- [利用 SPL 快速实现 Observer 设计模式](https://www.ibm.com/developerworks/cn/opensource/os-cn-observerspl/index.html)
- [用 SplObjectStorage 來避免無窮迴圈 | Asika Lab 飛鳥實驗室](http://asika.windspeaker.co/post/3501-spl-object-storage)

## Run
```
php index.php
```