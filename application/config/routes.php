<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Routes Home
$route['default_controller'] = 'home';
$route['berita'] = 'artikel';
$route['kontak-kami'] = 'kontak';
$route['jadwal-peraktik-rsu-kartini'] = 'dokter/jadwal';
$route['galeri-foto-rsu-kartini']='';
$route['info-karir'] = 'career';
$route['404_override'] = 'wkwk';
$route['translate_uri_dashes'] = FALSE;

//Routes Admin
//Artikel
$route['admin/article-list'] = 'admin/berita';
$route['admin/article-create'] = 'admin/berita/create';
$route['admin/article-save'] = 'admin/article/save';
$route['admin/article-update'] = 'admin/berita/update';
$route['admin/article-save-update'] = 'admin/berita/save_update';

//Dokter
$route['admin/doctor-list'] = 'admin/dokter';
$route['admin/doctor-schedule'] = 'admin/dokter/schedule';

//Pelayanan
$route['admin/daftar-pelayanan'] = 'admin/pelayanan';

//Fasilitas Penunjang
$route['admin/fasilitas-penunjang'] = 'admin/fasilitas';

//Halaman Statis
$route['admin/halaman-statis'] = 'admin/halaman';


