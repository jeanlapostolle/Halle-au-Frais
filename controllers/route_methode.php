<?php
function accueil(){
	$commerce = Model::factory('Commerce')->find_many();
	$type = Model::factory('Type')->find_many();
    Flight::render('accueil.php');
}

function contact(){
    Flight::render('contact.php');
}

function events(){
    Flight::render('events.php');
}

function news(){
    Flight::render('news.php');
}

function whoarewe(){
    Flight::render('whoarewe.php');
}

function example(){
    Flight::render('example.php');
}

