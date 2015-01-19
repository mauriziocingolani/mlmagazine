<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/protected/components/framework/Config.php';
$config = new Config('ML Magazine', 'files');
$config->addStandardImports();
$config->addStandardComponents();

return $config->getConfig();
