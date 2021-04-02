<?php

$package_name = basename(__DIR__);
$class_name = str_replace('-', '', ucwords($package_name, '-'));

//Replace content and rename classes
foreach ([
    '/composer.json',
    '/README.md',
    '/src/Skeleton.php',
    '/tests/SkeletonTest.php',
    '/phpunit.xml.dist',
] as $file) {
    $content = file_get_contents(__DIR__.$file);
    $content = str_replace('skeleton', $package_name, $content);
    $content = str_replace('Skeleton', $class_name, $content);

    if ($file === '/README.md') {
        //Remove the note in README.md
        $content = explode('---', $content, 2);
        $content = ltrim($content[1]);
    }

    file_put_contents(__DIR__.$file, $content);

    //Rename Skeleton classes
    if (strpos($file, 'Skeleton') !== false) {
        $newFile = str_replace('Skeleton', $class_name, $file);
        rename(__DIR__.$file, __DIR__.$newFile);
    }
}

//Supersede .gitattributes
unlink('.gitattributes');
rename('.gitattributes.skeleton', '.gitattributes');

$composer = json_decode(file_get_contents(__DIR__.'/composer.json'), true);

//Remove the "post-create-project-cmd" composer script
unset($composer['scripts']['post-create-project-cmd']);

//Remove the "template" keyword
array_shift($composer['keywords']);

file_put_contents(__DIR__.'/composer.json', json_encode($composer, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

//Remove myself
unlink(__FILE__);
