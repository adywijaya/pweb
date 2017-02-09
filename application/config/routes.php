<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['kegiatan'] = 'kegiatan';
$route['struktur'] = 'struktur';
$route['visimisi'] = 'visimisi';
$route['tentang'] = 'tentang';
$route['saran'] = 'saran';
$route['pendaftaran'] = 'pendaftaran';

/*Admin*/
$route['admin'] = 'admin';

$route['admin_home'] = 'admin_home';
$route['admin_kegiatan'] = 'admin_kegiatan';
$route['admin_struktur'] = 'admin_struktur';
$route['admin_saran'] = 'admin_saran';
$route['admin_anggota'] = 'admin_anggota';
$route['updatepoint/(:any)'] = 'admin_anggota/updatepoint/$1';

//*Register*//
$route['register'] = 'signup/signuppage';
$route['prosesregister'] = 'signup/register';

/**Poin**/
$route['reward'] = 'reward';


/** AJAX  **/
$route['ajax/cekuser'] = 'ajax/cekusername';
$route['ajax/cekemail'] = 'ajax/cekemail';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
