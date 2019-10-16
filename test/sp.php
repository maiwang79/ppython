<?php
require_once('../core/php_python.php');
$res= ppython("sp.sp::sp0",'www.xxxx.com');
print_r($res . "\n");
