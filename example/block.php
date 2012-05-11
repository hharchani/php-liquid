<?php
define('LIQUID_INCLUDE_SUFFIX', 'tpl');
define('LIQUID_INCLUDE_PREFIX', '');

require_once('../Liquid.class.php');

define('PROTECTED_PATH', dirname(__FILE__).'/protected/');


$liquid = new LiquidTemplate(PROTECTED_PATH.'templates/');

$cache = array('cache' => 'file', 'cache_dir' => PROTECTED_PATH.'cache/');
//$cache = array('cache' => 'apc');

//$liquid->setCache($cache);

$liquid->parse(file_get_contents(PROTECTED_PATH.'templates/block.tpl'));

$assigns = array(
		'document' => array(
			'title' => 'This is php-liquid',
			'content' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',
			'copyright' => 'Harald Hanek - All rights reserved.'
			)
		);

print $liquid->render($assigns);
?>