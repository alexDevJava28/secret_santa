<?php
/**
 * Created by PhpStorm.
 * User: oleksii.khodakivskyi
 * Date: 21.12.18
 * Time: 14:48
 */

/**
 * Simple autoloader, so we don't need Composer just for this.
 */
class Autoloader {
    public static function register(array $folders_with_classes) {
        foreach ($folders_with_classes as $folder) {
            spl_autoload_register(function ($class) use ($folder) {
                $file = __DIR__ . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
                if (file_exists($file)) {
                    require $file;
                    return true;
                }
                return false;
            });
        }
    }
}