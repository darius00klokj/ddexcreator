<?php

/**
 * Loads the classes as needed and called in the files, will only load those 
 * that are called. in the specific files. So a class within another class might not
 * be loaded if the parent class was not called.
 */
$dir = 'src';
includeFile($dir);

function includeFile($dir_or_file) {

    if (is_file($dir_or_file) && strpos($dir_or_file, '.php') !== false) {
        include_once $dir_or_file;
        return;
    }

    if (is_dir($dir_or_file)) {
        $files = scandir($dir_or_file);
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $file = sprintf('%s/%s', $dir_or_file, $file);
            includeFile($file);
        }
    }
}
