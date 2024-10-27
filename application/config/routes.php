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
*/$route['default_controller'] = 'user'; // Default controller for users
$route['admin'] = 'admin/login'; // Redirect /admin to the login method in Admin controller
$route['admin/dashboard'] = 'admin/dashboard'; // Route for admin dashboard
$route['admin/auth'] = 'admin/auth'; // Route for handling authentication (login processing)
$route['admin/kepalasekolah'] = 'admin/kepalasekolah/kepalasekolah_crud';
$route['ekstrakurikuler'] = 'ekstrakurikuler/index';
$route['ekstrakurikuler/tambah'] = 'ekstrakurikuler/tambah';
$route['ekstrakurikuler/edit/(:any)'] = 'ekstrakurikuler/edit/$1';    // Menggunakan slug
$route['ekstrakurikuler/hapus/(:any)'] = 'ekstrakurikuler/hapus/$1';  // Menggunakan slug
$route['ekstrakurikuler/detail/(:any)'] = 'eskuldetail/index/$1';     // Menggunakan slug
$route['berita/detail/(:num)'] = 'BeritaDetail/index/$1';
$route['jurusan/detail/(:num)'] = 'JurusanDetail/index/$1';

$route['prestasi'] = 'prestasi/index';                 // Menampilkan daftar prestasi
$route['prestasi/tambah'] = 'prestasi/tambah';         // Menampilkan form tambah prestasi
$route['prestasi/edit/(:num)'] = 'prestasi/edit/$1';   // Menampilkan form edit prestasi berdasarkan ID
$route['prestasi/hapus/(:num)'] = 'prestasi/hapus/$1'; // Hapus prestasi berdasarkan ID
$route['gurustaff'] = 'Gurustaff/index';
$route['gurustaff/create'] = 'Gurustaff/create';
$route['gurustaff/edit/(:num)'] = 'Gurustaff/edit/$1';
$route['gurustaff/delete/(:num)'] = 'Gurustaff/delete/$1';
$route['gurustaff/detail'] = 'gurustaff/all';

$route['kontak'] = 'kontak/index';
$route['kontak/add'] = 'kontak/add';
$route['kontak/save'] = 'kontak/save';
$route['user'] = 'user/index'; // Ganti 'user/index' sesuai controller dan method tampilan utama Anda
$route['kritiksaran/submit'] = 'kritiksaran/submit'; // Proses pengiriman kritik dan saran
$route['admin/kritiksaran'] = 'kritiksaran/list'; // Daftar kritik dan saran untuk admin

$route['user/kepsek/detail'] = 'Kepsekdetail/index';
$route['berita/detail'] = 'beritadetail/index/';
$route['berita/detail_kedua'] = 'Berita/detail_kedua';


// Routes for Pengumuman CRUD

$route['admin/pengumuman'] = 'admin/pengumuman_list'; // Route for listing all announcements
$route['admin/berita'] = 'berita'; // To list all berita
$route['admin/berita/tambah'] = 'berita/tambah'; // To add berita
$route['admin/berita/edit/(:num)'] = 'berita/edit/$1'; // To edit berita
$route['admin/berita/delete/(:num)'] = 'berita/delete/$1'; // To delete berita
$route['admin/jurusan'] = 'jurusan';
$route['admin/jurusan/tambah'] = 'jurusan/tambah';
$route['admin/jurusan/edit/(:num)'] = 'jurusan/edit/$1';
$route['admin/jurusan/delete/(:num)'] = 'jurusan/delete/$1';
$route['jurusan/detail/(:num)'] = 'jurusan/detail/$1';
// Routing untuk Admin Panel
// $route['admin/visimisi'] = 'admin/VisiMisi/index'; // Daftar visi dan misi
// $route['admin/visimisi/create'] = 'admin/VisiMisi/create'; // Form untuk menambah visi dan misi
// $route['admin/visimisi/edit/(:num)'] = 'admin/VisiMisi/edit/$1'; // Form untuk edit visi dan misi
// $route['admin/visimisi/delete/(:num)'] = 'admin/VisiMisi/delete/$1'; // Menghapus visi dan misi
// $route['admin/visimisi/view/(:num)'] = 'admin/VisiMisi/view/$1'; // Melihat detail visi dan misi

// // Routing untuk User Side
// $route['visimisi'] = 'VisiMisi/index'; // Menampilkan visi dan misi

$route['admin/Visimisi'] = 'VisiMisi/index'; // Menampilkan daftar
$route['visimisi/create'] = 'VisiMisi/create'; // Menampilkan form tambah
$route['visimisi/edit/(:num)'] = 'VisiMisi/edit/$1'; // Menampilkan form edit
$route['visimisi/delete/(:num)'] = 'VisiMisi/delete/$1'; // Menghapus data
$route['visimisi'] = 'VisiMisi/user_view';
$route['sejarah'] = 'Sejarah/index';
$route['sejarah/create'] = 'Sejarah/create';
$route['sejarah/edit/(:num)'] = 'Sejarah/edit/$1';
$route['sejarah/delete/(:num)'] = 'Sejarah/delete/$1';
$route['sejarah-user'] = 'Sejarah/view';
// Routing untuk admin CRUD info_ppdb
$route['admin/infoppdb'] = 'InfoPpdb/index';
$route['admin/infoppdb/create'] = 'InfoPpdb/create';
$route['admin/infoppdb/edit/(:num)'] = 'InfoPpdb/edit/$1';
$route['admin/infoppdb/delete/(:num)'] = 'InfoPpdb/delete/$1';

// Routing untuk tampilan user info_ppdb
$route['info_ppdb'] = 'InfoPpdb/view';











