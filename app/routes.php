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
$router->get("mangas/show", 'MangasController@show');
$router->post("mangas/update", "MangasController@update");
$router->get("mangas/delete", "MangasController@delete");

// ChapterController
$router->get('chapter', 'ChapterController@index');
$router->get('chapter/store', 'ChapterController@store');
$router->post('chapter/create', 'ChapterController@create');
$router->get('chapter/show', 'ChapterController@show');
$router->post('chapter/update', 'ChapterController@update');

// ImagesController
$router->get('chapter/update/img', 'ImagesController@index');
$router->get('images/store', 'ImagesController@store');
$router->post('images/create', 'ImagesController@create');
$router->get('images/show', 'ImagesController@show');
$router->post('images/update', 'ImagesController@update');
$router->get('images/delete', 'ImagesController@delete');
