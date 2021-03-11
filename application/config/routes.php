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
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;






/*User Route*/ 
$route['index']   = 'HomeController/index';
$route['product'] = 'HomeController/open_product';
$route['about']   = 'HomeController/open_about';
$route['contact'] = 'HomeController/open_contact';
$route['login']   = 'HomeController/login';

/*User Authentication Routes */

/*User Product Routes */

$route['product/search']      = 'HomeController/productsearch';
$route['product/book/(.+)']   = 'HomeController/product_book/$1';
$route['product/confirmbook'] = 'HomeController/user_confirm_booking';










/*Admin Routes*/

/*Admin Authentication Routes */

$route['admin/index'] = 'AdminLoginController/index';
$route['admin/login'] = 'AdminLoginController/login';
$route['admin/logout'] = 'AdminLoginController/logout';



/*Admin Product Routes */

$route['admin/insert_product'] = 'AdminHomeController/open_insert_product';
$route['admin/insert_product/store'] = 'AdminHomeController/insert_product';
$route['admin/display_product'] = 'AdminHomeController/open_display_product';
$route['admin/edit_product/(.+)'] = 'AdminHomeController/edit_product/$1';
$route['admin/update_product/(.+)'] = 'AdminHomeController/update_product/$1';
$route['admin/delete_product/(.+)'] = 'AdminHomeController/delete_product/$1';



/*Admin Offline Order Routes */

$route['admin/offline_order'] = 'AdminHomeController/open_offline_order';
$route['admin/offline_order/productsearch'] = 'AdminHomeController/productsearch';
$route['admin/offline_order/book/(.+)'] = 'AdminHomeController/offline_product_book/$1';
$route['admin/offline_order/confirmbook'] = 'AdminHomeController/offline_confirm_booking';
$route['admin/offline_order_display'] = 'AdminHomeController/open_offline_order_display';
$route['admin/offline_order/edit/(.+)'] = 'AdminHomeController/edit_offline_order/$1';
$route['admin/offline_order/update/(.+)'] = 'AdminHomeController/update_offline_order/$1';
$route['admin/offline_order/delete/(.+)'] = 'AdminHomeController/delete_offline_order/$1';



/*Admin Online Order Routes */

$route['admin/online_order_display']='AdminHomeController/open_online_order_display';
$route['admin/online_order/edit/(.+)'] = 'AdminHomeController/edit_online_order/$1';
$route['admin/online_order/update/(.+)'] = 'AdminHomeController/update_online_order/$1';
$route['admin/online_order/delete/(.+)'] = 'AdminHomeController/delete_online_order/$1';
