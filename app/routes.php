<?php

// PagesController
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

// UsersController
$router->post('users', 'UsersController@store');
$router->get('users', 'UsersController@index');

// MangasController
$router->get('mangas', 'MangasController@index');
$router->get('mangas/store', 'MangasController@store');
$router->post('mangas/create', 'MangasController@create');