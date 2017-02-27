<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';

$route['kegiatan'] = 'kegiatan';

$route['struktur'] = 'struktur';

$route['visimisi'] = 'visimisi';

$route['tentang'] = 'tentang';

$route['saran'] = 'saran';

$route['pendaftaran'] = 'pendaftaran';



$route['admin_login'] = 'admin_login';

$route['admin/dologin'] = 'admin_login/aksi_login';

$route['admin/logout'] = 'admin_login/logout';




$route['admin_home_page'] = 'admin_home_page';

$route['admin_kegiatan_page'] = 'admin_kegiatan_page';

$route['admin_struktur_page'] = 'admin_struktur_page';

$route['admin_saran_page'] = 'admin_saran_page';

$route['admin_anggota_page'] = 'admin_anggota_page';


$route['updatepoint_page/(:any)'] = 'admin_anggota_page/updatepoint/$1';


//*Register*//

$route['register'] = 'signup/signuppage';
$route['prosesregister'] = 'signup/register';

/**Poin**/
$route['reward'] = 'reward';


/** AJAX  **/
$route['ajax/cekuser'] = 'ajax/cekusername';
$route['ajax/cekemail'] = 'ajax/cekemail';
$route['ajax/ceknim'] = 'ajax/ceknim';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
