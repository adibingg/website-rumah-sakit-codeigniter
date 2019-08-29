<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Routes Home
$route['default_controller'] = 'home';
$route['berita'] = 'berita';
$route['baca-berita/(:any)'] = 'berita/read/$1';
$route['kontak-kami'] = 'kontak';
$route['jadwal-peraktik-rsu-kartini'] = 'dokter/jadwal';
$route['galeri-foto-rsu-kartini']='';
$route['info-karir'] = 'karir';
$route['404_override'] = 'wkwk';
$route['translate_uri_dashes'] = FALSE;


//Routes Admin
//Artikel
$route['admin/pos'] = 'admin/berita';
$route['admin/buat-pos'] = 'admin/berita/create';

//Dokter
$route['admin/doctor-list'] = 'admin/dokter';
$route['admin/doctor-schedule'] = 'admin/dokter/schedule';

//Pelayanan
$route['admin/daftar-pelayanan'] = 'admin/pelayanan';
$route['admin/daftar-pelayanan/tambah'] = 'admin/pelayanan/form_tambah';

//Fasilitas Penunjang
$route['admin/fasilitas-penunjang'] = 'admin/fasilitas';

//Halaman Statis
$route['admin/halaman-statis'] = 'admin/halaman';

//Poli
$route['admin/jadwal-poli'] = 'admin/poli';
$route['admin/poli/tambah-jadwal-poli'] = 'admin/poli/add_poli';

//Visi Misi
$route['admin/visi-misi'] = 'admin/profil/visi_misi';

//Sejarah
$route['admin/sejarah'] = 'admin/profil/sejarah';

//Struktru Organisasi
$route['admin/struktur-organisasi'] = 'admin/profil/struktural';
