<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use StockstoRSS\getStock;

echo getStock::stock();

?>
