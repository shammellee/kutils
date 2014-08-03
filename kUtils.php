<?php
$kIO = KBN_UTILS_DIR . 'kIO.php';

if(is_file($kIO))
{
	include $kIO;
}

$utils = <<<'UTILS'
Term
Tex
UTILS;


foreach(explode("\n",$utils) as $util)
{
	kIO::inc(KBN_UTILS_DIR . 'k' . $util . '.php');
}

?>