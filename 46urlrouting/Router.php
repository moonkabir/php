<?php
namespace OurApplication\Routing;
class Router{
    private static function getUrl(){
        return $_SERVER['REQUEST_URI'];
    }
    private static function getMatches($pattern){
        $url = self::getUrl();
        if(preg_match($pattern,$url,$matches)){
            return $matches;
        }
        return false;
    }
    static function get($pattern, $callback){
        $pattern = "~^{$pattern}$~";
        $params = self::getMatches($pattern);
        if($params){
            if(is_callable($callback)){
                $functionArguments = array_slice($params,1);
                $callback(...$functionArguments);
            }
        }
    }
}