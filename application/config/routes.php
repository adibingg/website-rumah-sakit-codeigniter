<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//FRONT
$route['default_controller'] = 'home';
$route['profile/struktur-organisasi'] = 'profile/struktur_organisasi';
$route['berita'] = 'berita';
$route['baca-berita/(:any)'] = 'berita/read/$1';
$route['profile/fasilitas-dan-pelayanan'] = 'profile/fasilitas';
$route['post/(:any)'] = 'berita/filter/$1';
$route['kontak-kami'] = 'kontak';
$route['jadwal-dokter'] = 'dokter/jadwal';
$route['jadwal-poli'] = 'dokter/jadwal_poli';
$route['galeri-foto-rsu-kartini']='';
$route['info-karir'] = 'karir';
$route['404_override'] = 'wkwk';
$route['translate_uri_dashes'] = FALSE;

//ADMINISTRATOR
//News
$route['admin/news'] = 'admin/news';
$route['admin/news/create'] = 'admin/news/create';
$route['admin/news/publish'] = 'admin/news/store';
$route['admin/news/edit/(:any)'] = 'admin/news/edit/$1';
$route['admin/news/update'] = 'admin/news/update';
$route['admin/news/delete/(:any)'] = 'admin/news/destroy/$1';

//Comment

//Galery
$route['admin/gallery'] = 'admin/galeri';
$route['admin/gallery/add'] = 'admin/galeri/add';
$route['admin/gallery/store'] = 'admin/galeri/store';
$route['admin/gallery/edit/(:any)'] = 'admin/galeri/edit/$1';
$route['admin/gallery/update'] = 'admin/galei/update';
$route['admin/gallery/delete/(:any)'] = 'admin/galeri/destroy/$1';

//Album
// $route['admin/album'] = '';
$route['admin/album/add'] = 'admin/album/add';
$route['admin/album/store'] = 'admin/album/store';
$route['admin/album/edit/(:any)'] = 'admin/album/edit/$1';
$route['admin/album/update'] = 'admin/album/update';
$route['admin/album/delete/(:any)'] = 'admin/album/destroy/$1';

//Doctor
$route['admin/doctor'] = 'admin/dokter';
$route['admin/doctor/add'] = 'admin/dokter/create';
$route['admin/doctor/store'] = 'admin/dokter/store';
$route['admin/doctor/edit/(:any)'] = 'admin/dokter/edit/$1';
$route['admin/doctor/update/'] = 'admin/dokter/update';
$route['admin/doctor/delete/(:any)'] = 'admin/dokter/destroy/$1'; 

//Doctor Schedule
$route['admin/doctor/schedule'] = 'admin/dokter/jadwal';
$route['admin/doctor/schedule/add'] = 'admin/dokter/jadwal_create';
$route['admin/doctor/schedule/store'] = 'admin/dokter/jadwal_store';
$route['admin/doctor/schedule/edit/(:any)'] = 'admin/dokter/jadwal_edit/$1';
$route['admin/doctor/schedule/update'] = 'admin/dokter/jadwal_update';
$route['admin/doctor/schedule/delete/(:any)'] = 'admin/dokter/jadwal_destroy/$1';

//Polyclinic
$route['admin/polyclinic'] = 'admin/poliklinik';
$route['admin/polyclinic/add'] = 'admin/poliklinik/create';
$route['admin/polyclinic/store'] = 'admin/poliklinik/store';
$route['admin/polyclinic/edit/(:any)'] = 'admin/polilklinik/edit/$1';
$route['admin/polyclinic/update'] = 'admin/poliklinik/update';
$route['admin/polyclinic/delete/(:any)'] = 'admin/poliklinik/destroy/$1';

//Polyclinic Schedule
$route['admin/polyclinic/schedule'] = 'admin/poli';
$route['admin/polyclinic/schedule/add'] = 'admin/poli/create';
$route['admin/polyclinic/schedule/store'] = 'admin/poli/store';
$route['admin/polyclinic/schedule/edit'] = 'admin/poli/edit';
$route['admin/polyclinic/schedule/update'] = 'admin/poli/update';
$route['admin/polyclinic/schedule/delete/(:any)'] = 'admin/poli/destroy/$1';

//Services
$route['admin/services'] = 'admin/pelayanan';
$route['admin/services/show'] = 'admin/pelayanan/show';
$route['admin/service/edit/(:any)'] = 'admin/pelayanan/edit/$1';
$route['admin/service/delete/(:any)'] = 'admin/pelayanan/destroy/$1';

//Static Pages
$route['admin/navigation-static-pages'] = 'admin/halaman';
$route['admin/navigation-static-pages/add-navigation'] = 'admin/halaman/add_nav';
$route['admin/navigation-static-pages/edit-navigation'] = '';
$route['admin/navigation-static-pages/update-navigation'] = '';
$route['admin/navigation-static-pages/pages-create'] = '';
$route['admin/navigation-static-pages/pages-edit'] = '';
$route['admin/navigation-static-pages/pages-update'] = '';

//Navigasi
$route['admin/navigation/add'] = 'admin/halaman/add_nav';

//Profile
$route['admin/profile'] = 'admin/profil';
$route['admin/visi-misi'] = 'admin/profil/visi_misi';
$route['admin/sejarah'] = 'admin/profil/sejarah';
$route['admin/struktur-organisasi'] = 'admin/profil/struktural';

//Facilities
$route['admin/facilities'] = 'admin/fasilitas';
$route['admin/facilities/add'] = 'admin/fasilitas/create';
$route['admin/facilities/store'] = 'admin/fasilitas/store';
$route['admin/facilities/edit/(:any)'] = 'admin/fasilitas/edit/$1';
$route['admin/facilities/update'] = 'admin/fasilitas/update/';
$route['admin/facilities/delete/(:any)'] = 'admin/fasilitas/destroy/$1';

//Career
$route['admin/career'] = 'admin/karir';
$route['admin/career/add'] = 'admin/karir/create';
$route['admin/career/store'] = 'admin/karir/tambah_informasi_karir';
$route['admin/career/edit'] = 'admin/karir/tambah_informasi_karir';
$route['admin/career/update'] = 'admin/karir/tambah_informasi_karir';
$route['admin/career/delete'] = 'admin/karir/tambah_informasi_karir';

//Login Tracker
$route['admin/login-tracker'] = 'admin/tracker';

//Users
$route['admin/users'] = 'admin/pengguna';
$route['admin/users/add'] = 'admin/pengguna/create';
$route['admin/users/save'] = 'admin/pengguna/store';

//Settings

