<?php

namespace MicroForce\kernel;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Annotation\Route;
use MicroForce\Controller\HomepageController;
use Symfony\Component\HttpFoundation\Request;           

class Kernel
{
    public function start() : string 
    {
        return "Hello World";
        // Execute routing stuff (initialize localhost/ => We are defining the root / of our apache /var/www/ and put it to the routeCollection)
        $routeDefinition = $this->executeRouting();
        //If we can match a controller
        if ($routeDefinition !== null) {
            // Load the controller
            $controllerName = $routeDefinition['_controller'];
            $controller = new $controllerName();
            // Call the controller method
            $method = $routeDefinition['_method'];
            return $controller->$method();
        }
    }
    
    private function executeRouting(): array {
        //Load routing informations (get the  route collection)
        $collection = $this->loadRouting();
        //try to match a route (try to match a new URL, so we load a context from the request of apache) FULL Object so we have a request Object !
        try {
            $context = new RequestContext();
            $context->fromRequest(Request::createFromGlobals());
            
            $matcher = new UrlMatcher($collection, $context);
            return $matcher->match($context->getPathInfo());
            //Return the route definition
        } catch (\Exception $e) {
        // Catch exception
            // Return null
            return null;
        }
    }
    // RouteCollection : Object we will add the route, each of these route will be insert in a collection (of Object ????)
    private function loadRoutingInfo() : RouteCollection {
        // Create each routes
        $homepage = new Route(
            '/',
            [
                '_controller' => HomepageController::class,
                '_method' => 'homepage'
            ]
            );
        // Add them to the route collection
        $collection = new RouteCollection();
        $collection->add('homepage', $homepage);
        // Return the collection
        return $collection;
    }
}
