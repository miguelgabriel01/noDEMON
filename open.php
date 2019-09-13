<?php
# ...
$fp = fopen('nada.txt', 'w');
for ($i = 0; $i < 10; $i++) {
    fwrite($fp, "linha $i" . PHP_EOL);
}
fclose($fp);
# ...
?>