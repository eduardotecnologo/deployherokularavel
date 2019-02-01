<?php
namespace lib;

class System extends Router{
    private $url;
    private $exploder;
    private $area;
    private $controller;
    private $action;
    private $param;
    private $runController;

    //Constructor
    public function __construct(){
        $this->setUrl();
        $this->setExploder();
        $this->setArea();
        $this->setController();
        $this->setAction();
        $this->setParams();

        }

    //Set URL
    private function setUrl(){
        $this->url = isset($_GET['url']) ? $_GET['url'] : 'home/index';
    }
    private function setExploder(){
        $this->exploder = explode('/', $this->url);
    }

    //Set Area
    private function setArea(){
        foreach ($thius->routers as $i => $v){
            if($this->onRaiz && $this->exploder[0] == $i){
                $this->area = $v;
                $this->onRaiz = false;
            }
        }
        $this->area = empty($this->area) ? $this->routerOnRaiz : $this->area;
        if(!defined('APP_AREA')){
            define('APP_AREA', $this->area);
        }
    }
    public function getArea(){
        return $this->area;
    }


    //Set Controllers
    private function setController(){
        $this->controller = $this->onRaiz ? $this->exploder[0] : (empty($this->exploder[1]) || 
    is_null($this->exploder[1] || !isset($this->exploder[1]) ? 'home' : $this->exploder[1]));
    }
    public function getController(){
        return $this->controller;
    }

    //Set Actions
    private function setAction(){
        $this->action = $this->onRaiz ? 
        (!isset($this->exploder[1]) || is_null($this->exploder[1]) || empty($this->exploder[1]) ? 'index' : $this->exploder[1]) : 
        (!isset($this->exploder[2]) || is_null($this->exploder[2]) || empty($this->exploder[2]) ? 'index' : $this->exploder[2]);
    }    
    public function getAction(){
        return $this->action;
    }

    //Set params
    private function setParams(){
        if($this->onRaiz){
            unset($this->exploder[0], $this->exploder[1]);
        }else{
            foreach ($This->exploder as $val) {
                $params[] = $val;
            }
            $this->params = $params;
        }
    }
    public function getParams($indice){
        return isset($this->params[$indice]) ? $this->params[$indice] : null;
    }

    //Metod Run - Start Framework
}