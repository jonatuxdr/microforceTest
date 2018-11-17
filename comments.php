<?php 

//static : store the function and the proprety directly in the class !!!!

//2 ways of writing the require in the composer.json file

/*
Way 1 : 
"require": {
    "symfony/routing": "^4.0"
}
Way 2 : 
Ask composer to require a package, he will update the requirement in the file
$ composer require symfony/templating:^4.0 symfony/routing:^4.0

*/

// Install the library requirements

/*
 $ composer install 
 * */

// Update the library requirements

/*
 
 $ composer update
  
 * */

// Difference between update and install

/*
 composer.lock = install the versions of the library (composer install look at this file, last installed never update), able to deploy in production, to install the same version !
 composer.json = configuration of the project
 Ask packagist API to get all version, write a new composer.lock if the version is not corrsponding
 
 => vendor is for the library -> for connecting to github
 
*/

// Autoloading need to load automatically the classes !!!

/*
 How to create an autoloading 
 
 composr comes with an built in autoloading system ! Mapping will be placed in the configuration
 
 "autoload": {
        "psr-4" = psr => PHP Standards Recommendations, commom way to code in PHP to have the same look like in the code (coding style standard), he has a lifecylce 
        "psu-0" = 
    	"psr-4" : {
    		"namespace":"folder"
    	}
    }
    
    
    \\ = put it 2 times to avoid, because \" = avoid the \ so put it again to have the \
    change in the configuration do a COMPOSER UPDATE !!!!!!!!!!!!!!!
    Output : 
    Loading composer repositories with package information
    Updating dependencies (including require-dev)
    Nothing to install or update
    
    Generating autoload files
    => but there is nothing outputed about the changes in composer.json
    
    
 * */

// We need the KERNEL, what should he do ? Start the application


// Vendor folder

/*
 1) composer = 
 2) symfony = 
 3) autoload.php = 
*/

/*
Class located in the vendor, class is part of the routing componenent
1rst param = root (/), 2ème = route definition (array), 

L'exception je dois la throw quand je fais du procedural car je dois savoir où je le throw pour le catch au bonne endroit, 
mais avec la library je sais d'où l'exception est envoyé (par la library) donc je peux la catch directement après le TRY !!!!!!

getPathInfo() does this thing for us : 
if (substr($url, 0, strlen('/index.php')) == '/index.php') {
    $url = substr($url, strlen('/index.php'));
}
*/
