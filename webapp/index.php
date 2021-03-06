<?php
/**
 * Homepage which displays occupational pay gap information.
 *
 * @author Gina Trapani <ginatrapani [at] gmail [dot] com>
 * @license http://www.gnu.org/licenses/gpl.html
 */

//Register the lazy class loader
require_once 'extlibs/isosceles/libs/class.Loader.php';
Loader::register(array(dirname(__FILE__).'/libs/model/', dirname(__FILE__).'/libs/controller/'));

header('Access-Control-Allow-Origin: *');
$router = new Router();
$router->addRoute('gap', 'DisplayGapController', array('slug'));
$router->addRoute('index', 'DisplayGapController');
$router->addRoute('gaps', 'AllGapsController');
echo $router->route();

