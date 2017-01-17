<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['kegiatan'] = 'kegiatan';
$route['struktur'] = 'struktur';

/*Admin*/
$route['admin/login'] = 'admin';

$route['admin_home'] = 'admin_home';
$route['admin_kegiatan'] = 'admin_kegiatan';
$route['admin_struktur'] = 'admin_struktur';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
