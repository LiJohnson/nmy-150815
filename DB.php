<?php
$BASE = dirname(__FILE__);
define('MY_KV_FILE', $BASE . '/data.kv');
define('MY_JSON_FILE', $BASE . '/data.json');

include $BASE.'/lib/MyKV.php';

$kv = new MyKV();

$kv->set('a',[4,5]);

$DATA = json_decode(file_get_contents(MY_JSON_FILE));

?>