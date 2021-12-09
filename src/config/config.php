<?php


ini_set("display_errors" , false);     // DESLIGA OS ERROS 

date_default_timezone_set('America/Sao_Paulo');
setlocale (LC_TIME, 'pt_BR' , 'pt-BR.utf-8' , 'portugues');


//PASTAS
define('MODEL_PATH' , realpath(dirname(__FILE__) . '/../model'));
define('VIEW_PATH' , realpath(dirname(__FILE__) . '/../view'));
define('CONTROLLERS_PATH' , realpath(dirname(__FILE__) . '/../controllers'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../view/templates'));



require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
