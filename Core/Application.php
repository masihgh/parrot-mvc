<?php

/*Load EnvLoader*/
(new Core\EnvLoader(dirname(__DIR__) . '\.env'))->load();
/*Create PHP-Eror Whoops*/
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
