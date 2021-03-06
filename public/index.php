<?php
ob_start();
define('ROOT', dirname(__DIR__));
define('TPL', ROOT.'/app/Views/templates/');

require_once(ROOT.'/app/App.php');
require_once(ROOT.'/core/Auth/Auth.php');
require_once(ROOT.'/config/Config.php');
require_once(ROOT.'/core/Secu/Secu.php');
require_once(ROOT.'/core/Controller/Controller.php');

require(TPL.'/header.php');
require(TPL.'/subheader.php');

if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 'index.login';
}

$parametre = '';
$page = explode('.', $page);
require(TPL.'/menu.php');
switch ($page[0])
{
	case "index":
        $class = 'ControllerIndex';
        $action = 'accueil';
        if(empty($page[1]))
        {
            $action = 'accueil';
        }
        else
        {
            if ($page[1] == 'accueil')
            {
                $action = $page[1];  
            }

        }
    break;
    case "documents":
        $class = 'ControllerDocuments';
        $action = 'exploits';
        if(empty($page[1]))
        {
            $action = 'exploits';
        }
        else
        {
            if ($page[1] == 'exploits' || $page[1] == 'tutos')
            {
                $action = $page[1];
            }
            elseif($page[1] == 'exploit' || $page[1] == 'tuto')
            {
                $action = $page[1];
                if(empty($page[2]))
                {
                    $parametre = 1;
                }
                else
                {
                    $parametre = intval($page[2]);
                }  
            }
        }
    break;
    default:
        $class = 'ControllerIndex';
        $action = 'accueil';
    break;
}    

    App::load($class);
    $controller = new $class;
    $controller->$action($parametre);

require(TPL.'/footer.php');
ob_end_flush();
?>