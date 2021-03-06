<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['login'] = 'front/accesos';
$route['login/iniciar-sesion'] = 'front/accesos/login';
$route['logout'] = 'front/accesos/logout';
$route['registro'] = 'front/accesos/registro';
$route['registro/add-usuario'] = 'front/accesos/add_usuario';
$route['registro/success'] = 'front/accesos/registro_success';

$route['dashboard'] = 'back/dashboard';
$route['dashboard/login'] = 'back/dashboard/login';
$route['dashboard/login-access'] = 'back/dashboard/login_access';
$route['dashboard/logout'] = 'back/dashboard/logout';

$route['dashboard/peliculas'] = 'back/peliculas';
$route['dashboard/peliculas/add'] = 'back/peliculas/add_pelicula';
$route['dashboard/peliculas/save'] = 'back/peliculas/save_pelicula';
$route['dashboard/peliculas/view/(:num)'] = 'back/peliculas/view_pelicula/$1';
$route['dashboard/peliculas/edit/(:num)'] = 'back/peliculas/edit_pelicula/$1';
$route['dashboard/peliculas/update'] = 'back/peliculas/update_pelicula';
$route['dashboard/peliculas/delete/(:num)'] = 'back/peliculas/delete_pelicula/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
