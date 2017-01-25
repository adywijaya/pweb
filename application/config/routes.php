<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['kegiatan'] = 'kegiatan';
$route['struktur'] = 'struktur';


//*Register*//
$route['register'] = 'signup/signuppage';
$route['prosesregister'] = 'signup/register';

/**login**/
$route['login'] = 'loginform';  // formulir login user
$route['login/(:any)'] = 'loginform/index/$1';  // formulir login user
$route['logout'] = 'loginform/logout';  //  logout user
$route['dologin'] = 'loginform/login';  // proses login user

/**Poin**/
$route['reward'] = 'reward';


/** AJAX  **/
$route['ajax/cekuser'] = 'ajax/cekusername';
$route['ajax/cekemail'] = 'ajax/cekemail';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
