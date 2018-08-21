<?php

use Infrastructure\Models\Routing\RouteCollectionBuilder;
use Symfony\Component\Routing;

$routesCollectionBuilder = new RouteCollectionBuilder();


$routes = $routesCollectionBuilder->build();

return $routes;