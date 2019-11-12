<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Routes Home
$route['default_controller'] = 'home';
$route['berita'] = 'berita';
$route['baca-berita/(:any)'] = 'berita/read/$1';
$route['kontak-kami'] = 'kontak';
$route['jadwal-dokter'] = 'dokter/jadwal';
$route['jadwal-poli'] = 'dokter/jadwal_poli';
$route['galeri-foto-rsu-kartini']='';
$route['info-karir'] = 'karir';
$route['404_override'] = 'wkwk';
$route['translate_uri_dashes'] = FALSE;


//Routes Admin
//Artikel
$route['admin/pos'] = 'admin/berita';
$route['admin/buat-pos'] = 'admin/berita/create';

//Login Tracker
$route['admin/login-tracker'] = 'admin/tracker';

//Dokter
$route['admin/doctor-list'] = 'admin/dokter';
$route['admin/doctor-schedule'] = 'admin/dokter/schedule';
$route['admin/doctor-update/(:any)'] = 'admin/dokter/edit/$1';

//Pelayanan
$route['admin/services'] = 'admin/pelayanan';
$route['admin/services/add'] = 'admin/pelayanan/form_tambah';

//Fasilitas Penunjang
$route['admin/add-facilities'] = 'admin/fasilitas/add_facilities';

//Halaman Statis
$route['admin/halaman-statis'] = 'admin/halaman';
$route['admin/tambah-navigasi'] = 'admin/halaman/add_nav';
//Poli
$route['admin/jadwal-poli'] = 'admin/poli';
$route['admin/poli/tambah-jadwal-poli'] = 'admin/poli/add_poli';

//Visi Misi
$route['admin/visi-misi'] = 'admin/profil/visi_misi';

//Sejarah
$route['admin/sejarah'] = 'admin/profil/sejarah';

//Struktru Organisasi
$route['admin/struktur-organisasi'] = 'admin/profil/struktural';

//Loker
$route['admin/info-karir'] = 'admin/karir';
$route['admin/tambah-info-karir'] = 'admin/karir/tambah_informasi_karir';

