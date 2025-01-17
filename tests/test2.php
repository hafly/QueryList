<?php
use QL\QueryList;

set_time_limit(0);

require __DIR__.'/../vendor/autoload.php';

$html = '<div id="one">
    <ul>
        <li>
            <a href="http://querylist.cc">QueryList官网</a>
            <img src="http://querylist.com/1.jpg" alt="这是图片1" abc="这是一个自定义属性1">
        </li>
        <li>
            <a href="http://v3.querylist.cc">QueryList V3文档</a>
            <img src="http://querylist.com/2.jpg" alt="这是图片2" abc="这是一个自定义属性2">
        </li>
        <li>
            <a href="http://v4.querylist.cc">QueryList V4文档</a>
            <img src="http://querylist.com/3.jpg" alt="这是图片3" abc="这是一个自定义属性3">
        </li>
    </ul>
</div>';
$rules = [
    'a' => ['a','text'],
    'img_src' => ['img','src'],
    'img_alt' => ['img','alt']
];

$range = 'ul>li';
$data = QueryList::rules($rules)->range($range)->html($html)->query()->getData();

var_dump($data);