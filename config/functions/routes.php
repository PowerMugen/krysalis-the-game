<?php
class Routes {

  public static $routes = array();

  public static function isSpecific($module, $page)
  {
    return (in_array($module, self::$routes['modules']) && in_array($page, self::$routes['modules'][$module]['pages']));
  }

  public static function getInformations($module, $page)
  {
    return self::$routes['modules'][$module];
  }

  public static function definePath($module, $page)
  {
    return self::$routes['modules'][$module]['modulePath'] .'/'. self::$routes['modules'][$module]['pages'][$page];
  }

}