# 單例模式(Singleton Pattern)
保證一個類別只會產生一個物件，而且要提供存取該物件的統一方法。

## 組成
1. Singleton：將建構子設成private，並定義一個getInstance靜態方法來創建自己的唯一實例，getInstance方法將傳回一個靜態屬性的參照(reference)，不會有新的物件實例被建立。

    - 單例模式。
    ```php
    class Singleton
    {
        private static $instance;
    
        private function __construct() {}
    
        public static function getInstance()
        {
            if (!self::$instance) {
                self::$instance = new Singleton();
            }
    
            return self::$instance;
        }
    }
    ```
    
    - 使用單例模式建立物件。
    ```php
    // 一般使用new來建立物件
    // $i = new Singleton();
 
    // 單例模式
    $i = Singleton::getInstance();
    $j = Singleton::getInstance();
    if ($i == $j) {
       echo "單例模式";
    }
    ```
 
## 範例
單例模式。

## 參考
- [單例模式 Singleton · 設計模式學習筆記 - Study Design Pattern In Java](https://skyyen999.gitbooks.io/-study-design-pattern-in-java/content/singleton.html)
- [單例模式(Singleton Pattern) | 阿洲的程式教學](http://monkeycoding.com/?p=969)
- [如何使用單例設計模式(Singleton design pattern) for PHP](https://www.pcschool.com.tw/campus/share/lib/130/)
- [Thrift PHP singleton without locks? - Stack Overflow](https://stackoverflow.com/questions/30613819/thrift-php-singleton-without-locks)

## Run
```
php index.php
```

