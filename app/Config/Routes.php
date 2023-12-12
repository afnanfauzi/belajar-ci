<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('post', [\App\Controllers\Post::class, 'index']);
$routes->get('post/create', [\App\Controllers\Post::class, 'create']);
$routes->post('post/store', [\App\Controllers\Post::class, 'store']);
$routes->get('post/(:num)/edit', [\App\Controllers\Post::class, 'edit']);
$routes->post('post/update/(:num)', [\App\Controllers\Post::class, 'update']);
$routes->get('post/delete/(:num)', [\App\Controllers\Post::class, 'delete']);
