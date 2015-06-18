<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use StockstoRSS\getStock;

// echo getStock::stock();

use RSS_Generation_Class\rss;

// echo rss::rss();

$rss = new rss('utf-8');
$rss->channel('Signera Stocks Feed', 'http://www.signera.net', 'Live stocks');
$rss->language('en-us');
$rss->copyright('Copyright by Signera 2013-'. date('Y'));
$rss->managingEditor('support@signera.net');
$rss->category('');

echo $rss->startRSS();

$rss->itemTitle('Test RSS Title');
$rss->itemLink('');
$rss->itemDescription('');
$rss->itemAuthor('support@signera.net');
$rss->itemGuid(time());
$rss->itemSource('Signera', 'n/a');
$rss->addItem();

echo $rss->RSSdone2();
?>
