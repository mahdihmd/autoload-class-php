# autoload-class-php
Calling Class Functions with Autoload in Php


![Autoload](https://cdn1.imggmi.com/uploads/2019/8/5/65463392ac1c172330d85d5319682256-full.png)

This is an Sample for automatically calling classes from other php files

in Index file contain this codes

```
require_once('autoload/autoload.php');

spl_autoload_register(array('Autoloader', 'loader'));

echo Books::showbooks();

echo "<br><br>";

echo calc::sum(2,5);
```

<b>spl_autoload_register</b> This is one of the php methods, pass Autoloader Class and  loader function

Inside the autoload/autoload.php file 
```
class Autoloader
{
    public static function loader($class)
    {
        $filename = strtolower($class) . '.php';
        $file ='autoload/core/' . $filename;
        if (!file_exists($file))
        {
            $file ='autoload/core/404.php';
        }
        include $file;
    }
}
```

If you call a class, it will automatically find and include the file

<b>Note</b>, your filenames must be the same as the name of the class. If you do not follow, it does not work.



