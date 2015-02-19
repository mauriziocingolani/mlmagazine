<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/protected/components/framework/Config.php';
$config = new Config('ML Magazine', 'files');
$config->addStandardImports(array(
            'application.modules.user.models.*',
        ))->
        addStandardComponents()->
        addPreload('log')->
        addModule('user');

return $config->getConfig();
