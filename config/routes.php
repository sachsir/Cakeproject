<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
 
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {

//Admin Routes
$builder->connect('/add-user', ['controller' => 'Users', 
'action' => 'addUser']);

        // Users Routes
        $builder->connect('/add-user', ['controller' => 'Users', 
                              'action' => 'addUser']);
        $builder->connect('/edit-user/:id', ['controller' => 'Users', 
                              'action' => 'editUser'],
                 ["pass" => ["id"]]);
        $builder->connect('/delete-user/:id', ['controller' => 'Users', 
                              'action' => 'deleteUser'], 
                 ["pass" => ["id"]]);
        $builder->connect('/list-users', ['controller' => 'Users', 
                             'action' => 'listUsers']);
    
    });
    $routes->prefix('Admin', function (RouteBuilder $routes) {
        $routes->connect('/language', array('controller' => 'Admin', 'action' => 'addUser')) ;
        
        
        //$routes->connect('/:language', array('controller' => 'Users', 'action' => 'login'), array('language' => 'en|ar')) ;
        $routes->fallbacks(DashedRoute::class);
    });
    
     
};
