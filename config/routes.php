<?php


use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
   
    $routes->setRouteClass(DashedRoute::class);

   // $routes->scope('/', function (RouteBuilder $builder) {
      
       // $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

     //  $builder->connect('/pages/*', 'Pages::display');

        $routes->connect('/', ['controller'=>'Home', 'action' => 'index']);
        $routes->connect('/about', ['controller'=>'About', 'action' => 'index']);
        $routes->connect('/product', ['controller'=>'Product', 'action' => 'index']);
        //com parametros
        $routes->get('/products/{id}', ['controller'=> 'Products', 'action'=> 'index']);
       //variaso parametros
        $routes->connect('/users', ['controller'=>'Users', 'action' => 'index']);
        $routes->connect('/posts', ['controller'=>'Posts', 'action' => 'index']);
        $routes->get('/clube/*', ['controller'=> 'Clube', 'action'=> 'index']);
        
       // $builder->fallbacks();
    //});

};
