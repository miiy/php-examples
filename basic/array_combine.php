<?php
$list = [
    [
        'id' => 1001,
        'name' => '张三'
    ],
    [
        'id' => 2091,
        'name' => '李四'
    ]
];

$list = array_combine(array_column($list, 'id'), array_column($list, 'name'));
print_r($list);

// array_combine 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
// output:
//
// Array
// (
//     [1001] => 张三
//     [2091] => 李四
// )
