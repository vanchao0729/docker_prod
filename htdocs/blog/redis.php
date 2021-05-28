<?php


$redis = new Redis();
$redis->connect('redis-master', 6379);
echo "Connection to server sucessfully";
echo PHP_EOL;
$redis->set("redis-get", "Redis get");
echo "Stored string in redis:: " . $redis->get("redis-get");
