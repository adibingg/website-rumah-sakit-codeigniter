<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//FRONT
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
$route['admin/galery'] = '';
$route['admin/galery/add'] = '';
$route['admin/galery/store'] = '';
$route['admin/galery/edit'] = '';
$route['admin/galery/update'] = '';
$route['admin/galery/delete'] = '';

//Album
$route['admin/album'] = '';
$route['admin/album/add'] = '';
$route['admin/album/store'] = '';
$route['admin/album/edit'] = '';
$route['admin/album/update'] = '';
$route['admin/album/delete'] = '';

//Doctor
$route['admin/doctor'] = 'admin/dokter';
$route['admin/doctor/create'] = 'admin/dokter/create';
$route['admin/doctor/store'] = 'admin/dokter/store';
$route['admin/doctor/edit/(:any)'] = 'admin/dokter/edit/$1';
$route['admin/doctor/update/'] = '';
$route['admin/doctor/delete'] = ''; 

//Doctor Schedule
$route['admin/doctor/schedule'] = '';
$route['admin/doctor/schedule/add'] = '';
$route['admin/doctor/schedule/store'] = '';
$route['admin/doctor/schedule/edit'] = '';
$route['admin/doctor/schedule/update'] = '';
$route['admin/doctor/schedule/delete'] = '';

//Polyclinic
$route['admin/polyclinic/'] = '';
$route['admin/polyclinic/add'] = '';
$route['admin/polyclinic/store'] = '';
$route['admin/polyclinic/edit'] = '';
$route['admin/polyclinic/update'] = '';
$route['admin/polyclinic/delete'] = '';

//Polyclinic Schedule
$route['admin/polyclinic-schedule/'] = '';
$route['admin/polyclinic-schedule/add'] = '';
$route['admin/polyclinic-schedule/store'] = '';
$route['admin/polyclinic-schedule/edit'] = '';
$route['admin/polyclinic-schedule/update'] = '';
$route['admin/polyclinic-schedule/delete'] = '';

//Services
$route['admin/services'] = 'admin/pelayanan';
$route['admin/services/add'] = 'admin/pelayanan/form_tambah';

//Facilities
$route['admin/add-facilities'] = 'admin/fasilitas/add_facilities';
$route['admin/facilities/add'] = '';
$route['admin/facilites/store'] = '';
$route['admin/facilities/edit'] = '';
$route['admin/facilities/delete'] = '';

//Static Pages
$route['admin/navigation-static-pages'] = 'admin/halaman';
$route['admin/navigation-static-pages/add-navigation'] = 'admin/halaman/add_nav';
$route['admin/navigation-static-pages/edit-navigation'] = '';
$route['admin/navigation-static-pages/update-navigation'] = '';
$route['admin/navigation-static-pages/pages-create'] = '';
$route['admin/navigation-static-pages/pages-edit'] = '';
$route['admin/navigation-static-pages/pages-update'] = '';

//Profile
$route['admin/visi-misi'] = 'admin/profil/visi_misi';
$route['admin/sejarah'] = 'admin/profil/sejarah';
$route['admin/struktur-organisasi'] = 'admin/profil/struktural';

//Career
$route['admin/career'] = 'admin/karir';
$route['admin/career/add'] = 'admin/karir/tambah_informasi_karir';
$route['admin/career/store'] = 'admin/karir/tambah_informasi_karir';
$route['admin/career/edit'] = 'admin/karir/tambah_informasi_karir';
$route['admin/career/update'] = 'admin/karir/tambah_informasi_karir';
$route['admin/career/delete'] = 'admin/karir/tambah_informasi_karir';

//Login Tracker
$route['admin/login-tracker'] = 'admin/tracker';

//Log activity

//Settings

