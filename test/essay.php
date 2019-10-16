<?php

include_once('../core/php_python.php');

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        for ($k = 1; $k <= 3; $k++) {
            $ary = [1, $i, $j, $k, $j, $i];

            try {
                $res = ppython("essay::sfft", $ary);
            } catch (\Throwable $e) {
                echo 'err:::=>';
                var_dump($e);
                die();
            }
            echo implode(',', $ary) . " " . json_encode($res) . "\n";

        }
    }

}

?>
