<?php
/*
|--------------------------------------------------------------------------
| ROUTES
|--------------------------------------------------------------------------
|
| Types: GET, POST
| Example
| $router->get('', 'PagesController@index');
| $router->post('posts/edit/{id}', 'PostsController@edit');
|
*/
$router->get('', 'PrincipalController@index');

$router->get('ftp', 'FtpController@ftp');
$router->post('ftp', 'FtpController@ftp');

$router->get('upload', 'UploadController@upload');
$router->post('upload', 'UploadController@upload');