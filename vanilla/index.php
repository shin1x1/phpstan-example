<?php

require_once __DIR__ . '/lib/Foo.php';

$bar = new Bar(); // 存在しないクラスのインスタンス化

Foo::sub(1, 2); // 存在しないメソッド呼び出し
Foo::add(1, 2); // インスタンスメソッドをクラスメソッドとして呼び出し

$foo = new foo(); // クラス名が小文字
$foo->add(1, 2);
