<?php
use QL\QueryList;

set_time_limit(0);

require __DIR__.'/../vendor/autoload.php';

$html = '<div id="one">
    <div class="two">
        <a href="http://querylist.cc">QueryList官网</a>
        <img src="http://querylist.com/1.jpg" alt="这是图片" abc="这是一个自定义属性">
        <img class="second_pic" src="http://querylist.com/2.jpg" alt="这是图片2">
        <a href="http://doc.querylist.cc">QueryList文档</a>
    </div>
    <span>其它的<b>一些</b>文本</span>
</div>';
$rules = [
    'a' => ['a','text'],
    'img_src' => ['img','src'],
    'img_alt' => ['img','alt']
];

$ql = QueryList::html($html);

$data = $ql->find('a')->texts();

var_dump($data);