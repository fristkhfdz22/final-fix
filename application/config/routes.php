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
$route['admin/auth'] = 'admin/auth'; 
$route['admin/kepalasekolah'] = 'admin/kepalasekolah/kepalasekolah_crud';
$route['ekstrakurikuler'] = 'ekstrakurikuler/index';
$route['ekstrakurikuler/tambah'] = 'ekstrakurikuler/tambah';
$route['ekstrakurikuler/edit/(:any)'] = 'ekstrakurikuler/edit/$1';    
$route['ekstrakurikuler/hapus/(:any)'] = 'ekstrakurikuler/hapus/$1';  
$route['ekstrakurikuler/detail/(:any)'] = 'eskuldetail/index/$1';     
$route['berita/detail/(:num)'] = 'BeritaDetail/index/$1';
$route['prestasi'] = 'prestasi/index';                
$route['prestasi/tambah'] = 'prestasi/tambah';         
$route['prestasi/edit/(:num)'] = 'prestasi/edit/$1';  
$route['prestasi/hapus/(:num)'] = 'prestasi/hapus/$1'; 
$route['gurustaff'] = 'Gurustaff/index';
$route['gurustaff/create'] = 'Gurustaff/create';
$route['gurustaff/edit/(:num)'] = 'Gurustaff/edit/$1';
$route['gurustaff/delete/(:num)'] = 'Gurustaff/delete/$1';
$route['gurustaff/detail'] = 'gurustaff/all';
$route['kontak'] = 'kontak/index';
$route['kontak/add'] = 'kontak/add';
$route['kontak/save'] = 'kontak/save';
$route['user'] = 'user/index'; 
$route['kritiksaran/submit'] = 'kritiksaran/submit';
$route['admin/kritiksaran'] = 'kritiksaran/list'; 
$route['user/kepsek/detail'] = 'Kepsekdetail/index';
$route['berita/detail'] = 'beritadetail/index/';
$route['berita/detail_kedua'] = 'Berita/detail_kedua';
$route['admin/pengumuman'] = 'admin/pengumuman_list'; 
$route['admin/berita'] = 'berita'; 
$route['admin/berita/tambah'] = 'berita/tambah'; 
$route['admin/berita/edit/(:num)'] = 'berita/edit/$1'; 
$route['admin/berita/delete/(:num)'] = 'berita/delete/$1'; 
$route['jurusan'] = 'jurusan/view';
$route['admin/jurusan'] = 'jurusan';
$route['admin/jurusan/tambah'] = 'jurusan/tambah';
$route['admin/jurusan/edit/(:num)'] = 'jurusan/edit/$1';
$route['admin/jurusan/delete/(:num)'] = 'jurusan/delete/$1';
$route['jurusan/detail/(:num)'] = 'jurusan/detail/$1';
$route['admin/Visimisi'] = 'VisiMisi/index'; 
$route['visimisi/create'] = 'VisiMisi/create'; 
$route['visimisi/edit/(:num)'] = 'VisiMisi/edit/$1'; 
$route['visimisi/delete/(:num)'] = 'VisiMisi/delete/$1'; 
$route['visimisi'] = 'VisiMisi/user_view';
$route['sejarah'] = 'Sejarah/index';
$route['sejarah/create'] = 'Sejarah/create';
$route['sejarah/edit/(:num)'] = 'Sejarah/edit/$1';
$route['sejarah/delete/(:num)'] = 'Sejarah/delete/$1';
$route['sejarah-user'] = 'Sejarah/view';
$route['admin/infoppdb'] = 'InfoPpdb/index';
$route['admin/infoppdb/create'] = 'InfoPpdb/create';
$route['admin/infoppdb/edit/(:num)'] = 'InfoPpdb/edit/$1';
$route['admin/infoppdb/delete/(:num)'] = 'InfoPpdb/delete/$1';
$route['info_ppdb'] = 'InfoPpdb/view';
$route['saranaprasarana/admin'] = 'saranaprasarana/index';
$route['saranaprasarana/create'] = 'saranaprasarana/create';
$route['saranaprasarana/store'] = 'saranaprasarana/store';
$route['saranaprasarana/edit/(:num)'] = 'saranaprasarana/edit/$1';
$route['saranaprasarana/update/(:num)'] = 'saranaprasarana/update/$1';
$route['saranaprasarana/delete/(:num)'] = 'saranaprasarana/delete/$1';
$route['saranaprasarana'] = 'saranaprasarana/view';
$route['galeri'] = 'galeri/index'; 
$route['admin/galeri'] = 'galeri/index'; 
$route['galeri/create'] = 'galeri/create'; 
$route['galeri/store'] = 'galeri/store'; 
$route['galeri/edit/(:any)'] = 'galeri/edit/$1'; 
$route['galeri/update/(:any)'] = 'galeri/update/$1'; 
$route['galeri/delete/(:any)'] = 'galeri/delete/$1'; 
$route['galeri/view'] = 'galeri/view'; 
$route['stats'] = 'stats/index';
$route['stats/create'] = 'stats/create';
$route['stats/store'] = 'stats/store';
$route['stats/edit/(:any)'] = 'stats/edit/$1';
$route['stats/update/(:any)'] = 'stats/update/$1';
$route['stats/delete/(:any)'] = 'stats/delete/$1';
$route['404_override'] = 'errors/page_missing';





