<?php
require 'libs/flight/Flight.php';
include('controllers/route_methode.php');
require_once 'libs/idiorm.php';
require_once 'libs/paris.php';
ORM::configure('sqlite:data/data.sqlite');

// require_once 'libs/idiorm.php';
// require_once 'libs/paris.php';
// ORM::configure('sqlite:data/data.sqlite');
// require_once 'models/article.php';


Flight::route('/', 'accueil');
Flight::route('/Contact', 'contact');
Flight::route('/Nouveaute', 'news');
Flight::route('/Evenements', 'events');
Flight::route('/QuiSommesNous?', 'whoarewe');
Flight::route('/Exemple', 'example');




Flight::start();
