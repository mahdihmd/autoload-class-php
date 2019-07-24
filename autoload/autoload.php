<?php

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