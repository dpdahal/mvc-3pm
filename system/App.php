<?php

namespace Application\system;

class App{

    public function start(){
       $router= new Router();
       require_once '../routers/web.php';
    }

}