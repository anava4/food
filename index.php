<?php

//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');


//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG',3);

//Define a default route
$f3->route('GET /', function()
{

    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');
});

//Define a continental breakfast route
$f3->route('GET /breakfast/continental', function()
{
    //Display breakfast view
    $view = new Template();
    echo $view->render('views/bfast-cont.html');
}
);

//Define a lunch route
$f3->route('GET /lunch', function()
{
    //Display breakfast view
    $view = new Template();
    echo $view->render('views/lunch.html');
}
);

//Define a brunch route
$f3->route('GET /lunch/brunch/buffet', function()
{
    //Display brunch view
    $view = new Template();
    echo $view->render('views/buffet.html');
}
);


//Run fat free
$f3->run();
