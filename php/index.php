<?php
echo 'Starting';
$redis = new Redis();
$redis->connect('redis', '6379');
var_dump($redis->incr('foo'));

