<?php
$memcache = new Memcache;
$memcache->connect("127.0.0.1", 11211);
$memcache->set('mem_test','',0,10);
if ($memcache->get('mem_test') === false) {
    echo '缓存没有';
}
if ($memcache->get('mem_test') === '') {
    echo "有或缓存为空";
}
?>